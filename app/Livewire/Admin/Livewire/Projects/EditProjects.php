<?php

namespace App\Livewire\Admin\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Http\Requests\Livewire\Admin\Project\LiveProjectUpdateRequest;

class EditProjects extends Component
{
    use WithFileUploads;
    
    public $project, $name, $description, $image, $link, $category_id, $categories;
    public function mount()
    {
        $this->categories = Category::select(["id", "name"])->get();
    }

    protected $listeners = ["projectUpdate"];
    
    public function projectUpdate($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->link = $this->project->link;
        $this->category_id = $this->project->category_id;
        $this->resetValidation();
        $this->dispatch("editModelToggle");
    }

    public function getRules()
    {
        return (new LiveProjectUpdateRequest())->rules();
    }

    public function submit()
    {
        $newData = $this->validate();
        // check if project has image -> delete old image ->save new image
        if($this->image){
            unlink($this->project->image);
            $imageName = time() . "." . $this->image->getClientOriginalExtension();
            $this->image->storeAs("images", $imageName, "public");
            $newData["image"] = "storage/images/" . $imageName;
        }else{
            unset($newData["image"]);
        }
        $this->project->update($newData);

        $this->reset("image");
        $this->dispatch("editModelToggle");
        $this->dispatch("dataRefresh")->to(DataProjects::class);
    }
    public function render()
    {
        return view('admin.livewire.projects.edit-projects');
    }
}
