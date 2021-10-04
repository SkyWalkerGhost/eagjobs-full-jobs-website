<?php

namespace App\Repositories\Front;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Vacancy;
use App\Models\VacancyType;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FrontQueryRepository
{
    public function __construct(
                Request $request,
                Category $category, Experience $experience, 
                Location $location, Language $language,
                Vacancy $vacancy, VacancyType $vacancyType, Company $company) {

        $this->request      = $request;
        $this->category     = $category;
        $this->experience   = $experience;
        $this->language     = $language;
        $this->vacancy      = $vacancy;
        $this->location     = $location;
        $this->vacancyType  = $vacancyType;
        $this->company      = $company;
    }

    public function getStandardVacancy()
    {
        return $this->vacancy->with(['category','location'])
                ->where('vacancy_type', Vacancy::STANDARD_VACANCY)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->take(20)
                ->get();
    }

    public function getPrimeVacancy()
    {
        return $this->vacancy->with(['category','location'])
                ->where('vacancy_type', Vacancy::PRIME_VACANCY)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->take(3)
                ->get();
    }

    public function getGoldVacancy()
    {
        return $this->vacancy->with(['category','location'])
                ->where('vacancy_type', Vacancy::GOLD_VACANCY)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->take(3)
                ->get();
    }

    public function getVipVacancy()
    {
        return $this->vacancy->with(['category','location'])
                ->where('vacancy_type', Vacancy::GOLD_VACANCY)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->take(3)
                ->get();
    }
    
    public function getVacancyByLocation()
    {
        return $this->vacancy->with(['company', 'category','location'])
                ->whereRelation('location', 'id', '=', $this->request->location_id)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->paginate(10);
    }

    public function getVacancyByCompany()
    {
        return $this->vacancy->with(['company', 'category','location'])
                ->whereRelation('company', 'id', '=', $this->request->company_id)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->paginate(10);
    }

    public function getVacancyByCategory()
    {
        return $this->vacancy->with(['company', 'category','location'])
                ->whereRelation('category', 'id', '=', $this->request->category_id)
                // ->where('job_status', Vacancy::APPROVED_STATUS)
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->paginate(10);
    }

    public function viewVacancy()
    {
        return $this->vacancy->with(['company', 
                                    'payment', 
                                    'category', 
                                    'location', 
                                    'language', 
                                    'experience'
                                ])
                                ->where('id', $this->request->vacancy_id)
                                ->firstOrFail();
    }

    public function getCompanyLogo()
    {
        return $this->company->withCount('vacancy')->get();
    }

    public function getDefaultSalaryOrNot()
    {
        return $this->request->query('salary') 
                ? $this->request->query('salary') 
                : Vacancy::DEFAULT_SALARY;
    }

    public function filterVacancy()
    {
        $input = $this->request->query('name');

        return $this->vacancy->query()
                ->with(['company', 'category','location'])
                ->where('name', 'LIKE', "%{$input}%")
                ->where('category_id', 'LIKE', "%{$this->request->category_id}%")
                ->where('location_id', 'LIKE', "%{$this->request->location_id}%")
                ->where('salary', 'LIKE', "%{$this->getDefaultSalaryOrNot()}%")
                ->where('end_time', '>', Carbon::now())
                ->latest()
                ->paginate(10);
    }
}
