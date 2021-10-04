<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use DB;

class GetCategory extends Component
{
    use WithPagination;

    public $category_id;
    public $name;
    public $perPage = 10;
    protected $listeners = ['refreshCategory' => '$refresh'];
    protected $paginationTheme = 'bootstrap';

    public function rules()
    {
        return [
            'name' => ['required', 'max:30', 'unique:categories'],
        ];
    }

    public function getCategory()
    {
        return DB::table('categories')->latest()->paginate($this->perPage);
    }

    public function update($category_id)
    {
        $this->category_id = $category_id;
        
        $update = Category::where('id', $this->category_id)->firstOrFail();
        $update->update($this->validate());

        $this->dispatchBrowserEvent('swal', [
                'title' => 'კატეგორია განახლებულია', 
                'icon' => 'success',
            ]);

        $this->resetErrorBag();
        $this->resetValidation();
        $this->clearInput();
    }

    public function clearInput()
    {
        $this->name = null;
    }

    public function delete($category_id)
    {
        $this->category_id = $category_id;

        Category::where('id', $this->category_id)->firstOrFail()->delete();

        $this->dispatchBrowserEvent('swal', [
                'title' => 'კატეგორია წაშლილია', 
                'icon' => 'success',
            ]);
    }

    public function render()
    {
        return view('livewire.category.get-category', [
            'categories' => $this->getCategory(),
        ]);
    }
}
