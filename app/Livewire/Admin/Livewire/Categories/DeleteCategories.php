<?php

namespace App\Livewire\Admin\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;

class DeleteCategories extends Component
{
    public $category, $name;
    protected $listeners = ["categoryDelete"];

    public function categoryDelete($id)
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->dispatch("deleteModelToggle");
    }

    public function submit()
    {
        $this->category->delete();
        $this->reset("category");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("dataRefresh")->to(DataCategories::class);
    }
    
    public function render()
    {
        return view('admin.livewire.categories.delete-categories');
    }
}
