<?php

namespace App\Livewire\Admin\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use App\Livewire\Admin\Livewire\Categories\DataCategories;
use App\Http\Requests\Livewire\Admin\Category\LiveCategoryRequest;

class EditCategories extends Component
{
    public $category, $name;
    protected $listeners = ["categoryUpdate"];

    public function categoryUpdate($id)
    {
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        $this->dispatch("editModelToggle");
    }

    public function getRules()
    {
        return (new LiveCategoryRequest())->rules();
    }

    public function submit()
    {
        $newData = $this->validate();
        $this->category->update($newData);

        $this->dispatch("editModelToggle");
        $this->dispatch("dataRefresh")->to(DataCategories::class);
    }
    public function render()
    {
        return view('admin.livewire.categories.edit-categories');
    }
}
