<?php

namespace App\Livewire\Admin\Livewire\Categories;

use Livewire\Component;
use App\Http\Requests\Livewire\Admin\Category\LiveCategoryRequest;
use App\Models\Category;

class CreateCategories extends Component
{

    public $name;

    public function getRules()
    {
        return (new LiveCategoryRequest())->rules();
    }

    public function submit()
    {
        $data = $this->validate();
        Category::create($data);
        $this->reset();

        $this->dispatch("createModelToggle");
        $this->dispatch("dataRefresh")->to(DataCategories::class);
    }

    public function render()
    {
        return view('admin.livewire.categories.create-categories');
    }
}
