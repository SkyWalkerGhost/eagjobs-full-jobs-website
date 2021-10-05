<?php

namespace App\Repositories\Vacancy;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Vacancy;
use App\Models\VacancyType;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class VacancyRepository
{
    public function __construct(
                Request $request,
                Category $category, Experience $experience, 
                Location $location, Language $language,
                Vacancy $vacancy, VacancyType $vacancyType) {

        $this->request      = $request;
        $this->category     = $category;
        $this->experience   = $experience;
        $this->language     = $language;
        $this->location     = $location;
        $this->vacancyType  = $vacancyType;
        $this->vacancy      = $vacancy;
    }

    public function getCategory()
    {
        return $this->category->orderBy('id', 'asc')->get();
    }

    public function getLocation()
    {
        return $this->location->orderBy('id', 'asc')->get();
    }

    public function getExperience()
    {
        return $this->experience->orderBy('id', 'asc')->get();
    }

    public function getLanguage()
    {
        return $this->language->orderBy('id', 'asc')->get();
    }

    public function getVacancyType()
    {
        return $this->vacancyType->orderBy('id', 'asc')->get();
    }

    public function generateOrderId()
    {
        return Str::substr(Str::upper(md5(Str::random(50))), 0, 20);
    }

    public function getUserId()
    {
        return Auth::guard('company')->check() ? Auth::guard('company')->id() : null;
    }

    public function vacancyPrice()
    {
        return match($this->request->vacancy_type) {
            Vacancy::STANDARD_VACANCY   => Vacancy::DEFAULT_PRICE,
            Vacancy::VIP_VACANCY        => Vacancy::VIP_PRICE,
            Vacancy::GOLD_VACANCY       => Vacancy::GOLD_PRICE,
            Vacancy::PRIME_VACANCY      => Vacancy::PRIME_PRICE,
            default                     => Vacancy::DEFAULT_PRICE,
        };
    }

    public function vacancyPlacementPeriod()
    {
        return match($this->request->vacancy_type){
            Vacancy::STANDARD_VACANCY   => Carbon::now()->addMonths(1),
            Vacancy::VIP_VACANCY        => Carbon::now()->addWeeks(2),
            Vacancy::GOLD_VACANCY       => Carbon::now()->addDays(10),
            Vacancy::PRIME_VACANCY      => Carbon::now()->addDays(3),
            default                     => Carbon::now()->addMonths(1),
        };
    }

    public function storeVacancy($request)
    {
        $this->request = $request;

        return $this->request->validated() + [
            'amount_price'  => $this->vacancyPrice(),
            'order_id'      => $this->generateOrderId(),
            'end_time'      => $this->vacancyPlacementPeriod(),
            'company_id'    => $this->getUserId(), 
        ];
    }

    public function editVacancy()
    {
        return $this->vacancy->where('id', $this->request->vacancy_id)->firstOrFail();
    }

    public function updateVacancy($request)
    {
        $this->request = $request;

        return $this->editVacancy()->update($this->request->validated() + [
            'amount_price'  => $this->vacancyPrice(),
            'start_time'    => Carbon::now(),
            'end_time'      => $this->vacancyPlacementPeriod(),
        ]);
    }

    public function vacancyPostingPeriodHasExpired()
    {
        $vacancyUpdate = $this->vacancy->where('end_time', '<', Carbon::now())->get();

        foreach($vacancyUpdate as $update) {

            $update->update([
                'job_status'    => Vacancy::PENDING_STATUS,
                'end_time'      => null,
            ]);
        }
    }

    public function deleteVacancy()
    {
        $this->vacancy->findOrFail($this->request->vacancy_id)->delete();
    }
}
