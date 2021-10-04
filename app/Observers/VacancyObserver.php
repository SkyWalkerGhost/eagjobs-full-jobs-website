<?php

namespace App\Observers;

use App\Models\Vacancy;
use App\Models\Payment;

class VacancyObserver
{
    public function created(Vacancy $vacancy)
    {
        Payment::create([
            'vacancy_id'    => $vacancy->id,
            'company_id'    => $vacancy->company_id,
        ]);
    }

    public function updated(Vacancy $vacancy)
    {
        
    }

    public function deleted(Vacancy $vacancy)
    {
        //
    }

    public function restored(Vacancy $vacancy)
    {
        //
    }

    public function forceDeleted(Vacancy $vacancy)
    {
        //
    }
}
