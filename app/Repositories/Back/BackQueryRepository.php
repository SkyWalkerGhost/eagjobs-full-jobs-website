<?php

namespace App\Repositories\Back;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Location;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Vacancy;
use App\Models\VacancyType;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class BackQueryRepository
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
}
