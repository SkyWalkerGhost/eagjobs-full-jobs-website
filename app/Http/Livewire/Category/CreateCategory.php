<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{

    public $name;

    public function rules()
    {
        return [
            'name' => ['required', 'max:30', 'unique:categories'],
        ];
    }

    public function store()
    {
        Category::create($this->validate());

        $this->dispatchBrowserEvent('swal', [
                    'title' => 'კატეგორია დამატებულია', 
                    'icon' => 'success',
                ]);

        $this->emit('refreshCategory');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->clearInput();
    }

    public function clearInput()
    {
        $this->name = null;
    }

    public function render()
    {
        return view('livewire.category.create-category');
    }
}
