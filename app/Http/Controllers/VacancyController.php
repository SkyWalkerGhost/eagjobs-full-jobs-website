<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Repositories\Vacancy\VacancyRepository;
use App\Http\Requests\Vacancy\StoreVacancyRequest;
use App\Events\PaymentEvent;
use Illuminate\Support\Facades\Event;

class VacancyController extends Controller
{
    protected $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepository) {

        $this->vacancyRepository    = $vacancyRepository;
    }

    public function store(StoreVacancyRequest $request)
    {
        Vacancy::create($this->vacancyRepository->storeVacancy($request));

        return back()->with('success', 'ახალი ვაკანსია დამატებულია');
    }

    public function edit()
    {
        return view('admin.pages.vacancy.update')->with([
            'editVacancy'       => $this->vacancyRepository->editVacancy(),
            'getCategory'       => $this->vacancyRepository->getCategory(),
            'getLocation'       => $this->vacancyRepository->getLocation(),
            'getExperience'     => $this->vacancyRepository->getExperience(),
            'getLanguage'       => $this->vacancyRepository->getLanguage(),
            'getVacancyType'    => $this->vacancyRepository->getVacancyType(),
        ]);
    }

    public function update(StoreVacancyRequest $request, $vacancy_id)
    {
        $this->vacancyRepository->updateVacancy($request);

        return redirect()
                ->route('admin.pages.vacancy.index')
                ->with('success', 'ვაკანსია განახლებულია');
    }

    public function destroy($vacancy_id)
    {
        $this->vacancyRepository->deleteVacancy();

        return back()->with('success', 'ვაკანსია წაშლილია');
    }
}
