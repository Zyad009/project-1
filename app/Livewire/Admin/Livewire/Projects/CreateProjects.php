<?php

namespace App\Livewire\Admin\Livewire\Projects;

use App\Http\Requests\Livewire\Admin\Project\LiveProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProjects extends Component
{
    use WithFileUploads;

    public $name, $description, $image , $link , $category_id , $categories;

    public function mount(){
        $this->categories = Category::select(["id", "name"])->get();
    }
    public function getRules()
    {
        return (new LiveProjectRequest())->rules();
    }

    
    public function submit()
    {
        $data = $this->validate();
        $imageName = time() . "." . $this->image->getClientOriginalExtension();
        $this->image->storeAs("images", $imageName, "public");
        $data["image"] = "storage/images/" . $imageName;

        Project::create($data);

        $this->resetExcept("categories");
        $this->dispatch("createModelToggle");
        $this->dispatch("dataRefresh")->to(DataProjects::class);
    }

    public function render()
    {
        return view('admin.livewire.projects.create-projects');
    }
}
