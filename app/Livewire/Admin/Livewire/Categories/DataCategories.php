<?php

namespace App\Livewire\Admin\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class DataCategories extends Component
{

    public $search;

    protected $listeners = ["dataRefresh" => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.livewire.categories.data-categories' ,  ["data" => Category::where("name", "LIKE", "%" . $this->search . "%")->paginate(10)]);
    }
}
