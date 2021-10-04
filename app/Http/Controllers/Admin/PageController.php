<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Vacancy\VacancyRepository;
use App\Repositories\Back\BackQueryRepository;

class PageController extends Controller
{
    protected $vacancyRepository;
    protected $backQueryRepository;

    public function __construct(VacancyRepository $vacancyRepository, 
                        BackQueryRepository $backQueryRepository) {

        $this->vacancyRepository    = $vacancyRepository;
        $this->backQueryRepository  = $backQueryRepository;
    }

    public function index()
    {
        return view('admin.index')->with([
            'getVacancyTypeCountAndSum'   => $this->backQueryRepository->getVacancyTypeCountAndSum(),
        ]);
    }

    public function vacancy()
    {
        $this->vacancyRepository->vacancyPostingPeriodHasExpired();

        return view('admin.pages.vacancy.index')->with([
            'getVacancy' => $this->vacancyRepository->getVacancy(),
        ]);
    }

    public function category()
    {
        return view('admin.pages.category.index');
    }

    public function company()
    {
        return view('admin.pages.company.index');
    }

    public function search()
    {
        return view('admin.pages.search.index')->with([
            'searchResults' => $this->backQueryRepository->searchResults(),
        ]);
    }
}
