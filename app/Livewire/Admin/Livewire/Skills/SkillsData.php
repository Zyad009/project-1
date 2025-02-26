<?php

namespace App\Livewire\Admin\Livewire\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ["skillRefresh" => '$refresh'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.livewire.skills.skills-data' , ["data" => Skill::where("name" , "LIKE" ,"%".$this->search."%")->paginate(10)]);
    }
}
