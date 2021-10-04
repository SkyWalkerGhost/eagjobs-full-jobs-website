<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use App\Models\Vacancy;
use Livewire\WithPagination;

class GetMyVacancyHistory extends Component
{
    use WithPagination;

    public $loadMore = 10;

    public function loadMoreHistory()
    {
        $this->loadMore = $this->loadMore + 5;
    }

    public function myVacancyHistory()
    {
        return Vacancy::with(['payment'])
                        ->where('company_id', auth()->guard('company')->id())
                        ->latest()
                        ->paginate($this->loadMore);
    }

    public function render()
    {
        return view('livewire.account.get-my-vacancy-history', [
            'myVacancyHistory' => $this->myVacancyHistory()
        ]);
    }
}
