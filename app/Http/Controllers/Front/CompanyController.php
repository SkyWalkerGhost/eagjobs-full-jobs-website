<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Company\UpdateCompanyProfileRequest;
use App\Repositories\Vacancy\VacancyRepository;
use App\Repositories\Company\CompanyRepository;
use App\Repositories\Front\FrontQueryRepository;

class CompanyController extends Controller
{
    protected $vacancyRepository;
    protected $frontQueryRepository;
    protected $companyRepository;

    public function __construct(VacancyRepository $vacancyRepository,
                                FrontQueryRepository $frontQueryRepository,
                                CompanyRepository $companyRepository) {

        $this->vacancyRepository    = $vacancyRepository;
        $this->frontQueryRepository = $frontQueryRepository;
        $this->companyRepository    = $companyRepository;
    }
    
    public function index()
    {
        return view('front.account.index')->with([
            'myVacancy' => $this->companyRepository->myVacancy(),
        ]);
    }

    public function vacancy_history()
    {
        return view('front.account.history.index');
    }

    public function create()
    {
        return view('front.account.create')->with([
            'getCategory'       => $this->vacancyRepository->getCategory(),
            'getLocation'       => $this->vacancyRepository->getLocation(),
            'getExperience'     => $this->vacancyRepository->getExperience(),
            'getLanguage'       => $this->vacancyRepository->getLanguage(),
            'getVacancyType'    => $this->vacancyRepository->getVacancyType(),
        ]);;
    }

    public function show()
    {
        return view('front.account.order.index')->with([
            'vacancy' => $this->companyRepository->showOrder(),
        ]);
    }

    public function edit_profile()
    {
        return view('front.account.update.profile');
    }

    public function update_profile(UpdateCompanyProfileRequest $request)
    {
        $this->companyRepository->updateCompanyProfile();

        return back()->with('success', 'პროფილი განახლებულია');
    }
}
