<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Vacancy\VacancyRepository;
use App\Repositories\Front\FrontQueryRepository;

class FrontPageController extends Controller
{
    protected $vacancyRepository;
    protected $frontQueryRepository;

    public function __construct(VacancyRepository $vacancyRepository, 
                            FrontQueryRepository $frontQueryRepository) {

        $this->vacancyRepository    = $vacancyRepository;
        $this->frontQueryRepository = $frontQueryRepository;
    }

    public function index()
    {
        return view('front.index')->with([
            'getStandardVacancy'    => $this->frontQueryRepository->getStandardVacancy(),
            'getPrimeVacancy'       => $this->frontQueryRepository->getPrimeVacancy(),
            'getGoldVacancy'        => $this->frontQueryRepository->getGoldVacancy(),
            'getVipVacancy'         => $this->frontQueryRepository->getVipVacancy(),
            'getCategory'           => $this->vacancyRepository->getCategory(),
            'getLocation'           => $this->vacancyRepository->getLocation(),
            'getCompanyLogo'        => $this->frontQueryRepository->getCompanyLogo(),
        ]);
    }

    public function show($vacancy_id)
    {
        return view('front.show.index')->with([
            'vacancy' => $this->frontQueryRepository->viewVacancy(),
        ]);
    }

    public function location()
    {
        return view('front.location.index')->with([
            'getVacancyByLocation' => $this->frontQueryRepository->getVacancyByLocation(),
        ]);
    }

    public function company()
    {
        return view('front.company.index')->with([
            'getVacancyByCompany' => $this->frontQueryRepository->getVacancyByCompany(),
        ]);
    }

    public function category()
    {
        return view('front.category.index')->with([
            'getVacancyByCategory' => $this->frontQueryRepository->getVacancyByCategory(),
        ]);
    }

    public function filter()
    {
        return view('front.filter.index')->with([
            'filterVacancy' => $this->frontQueryRepository->filterVacancy(),
            'getCategory'   => $this->vacancyRepository->getCategory(),
            'getLocation'   => $this->vacancyRepository->getLocation(),
        ]);
    }
}
