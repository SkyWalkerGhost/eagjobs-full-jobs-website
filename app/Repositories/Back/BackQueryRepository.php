<?php

namespace App\Repositories\Back;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Company;
use Carbon\Carbon;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class BackQueryRepository
{
    public function __construct(Request $request, Vacancy $vacancy, Company $company) {

        $this->request  = $request;
        $this->vacancy  = $vacancy;
        $this->company  = $company;
    }

    public function getVacancy()
    {
        return $this->vacancy->with([
            'company', 
            'payment', 
            'category', 
            'location', 
            'language', 
            'experience', 
            ])->latest()->paginate(10);
    }

    public function getCompanyUsers()
    {
        return $this->company->latest()->paginate(10);
    }

    public function getVacancyTypeCountAndSum()
    {
        return $this->vacancy->select('amount_price', 'vacancy_type', 
                            DB::raw('count(*) as vacancy_type_count'), 
                            DB::raw('sum(amount_price) as vacancy_type_sum'))
                        ->groupBy('vacancy_type')
                        ->get();
    }

    public function searchResults()
    {
        return Search::new()
                ->add(Vacancy::with(['company','payment','category','location','language','experience']), 'order_id')
                ->orderByDesc()
                ->paginate(10)
                ->get($this->request->query('search'));
    }

    public function getCompanyRow()
    {
        return $this->company->where('id', $this->request->company_id)->firstOrFail();
    }

    public function imagePath()
    {
        return public_path() . '/storage' . str_replace('public', "", $this->getCompanyRow()->photo);
    }

    public function removeImageFromStorageFolder()
    {
        if(File::exists($this->imagePath())) {
            File::delete($this->imagePath());
        }
    }

    public function deleteCompany()
    {
        $this->removeImageFromStorageFolder();
        $this->getCompanyRow()->delete();
    }
}
