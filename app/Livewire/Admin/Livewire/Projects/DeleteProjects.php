<?php

namespace App\Livewire\Admin\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class DeleteProjects extends Component
{
    public $project, $name;
    protected $listeners = ["projectDelete"];

    public function projectDelete($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->dispatch("deleteModelToggle");
    }

    public function submit()
    {
        unlink($this->project->image);
        $this->project->delete();
        $this->reset("project");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("dataRefresh")->to(DataProjects::class);
    }

    public function render()
    {
        return view('admin.livewire.projects.delete-projects');
    }
}
