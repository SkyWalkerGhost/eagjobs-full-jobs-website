<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\CompanyReview;

class AddCompanyReview extends Component
{
    public $point;
    public $vacancy_id;

    public function rules()
    {
        return [
            'point' => ['required', 'numeric'],
        ];
    }

    public function addCompanyReview()
    {
        CompanyReview::create($this->validate() + [
            'vacancy_id' => $this->vacancy_id,
        ]);

        $this->dispatchBrowserEvent('swal', [
                    'title' => 'თქვენი შეფასება მიღებულია', 
                    'icon' => 'success',
                ]);

        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.company.add-company-review');
    }
}
