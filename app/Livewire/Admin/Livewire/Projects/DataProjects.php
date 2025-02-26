<?php

namespace App\Livewire\Admin\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class DataProjects extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ["dataRefresh" => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.livewire.projects.data-projects', ["data" => Project::where("name", "LIKE", "%" . $this->search . "%")->paginate(10)]);
    }
}
