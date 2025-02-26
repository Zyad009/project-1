<?php

namespace App\Livewire\Admin\Livewire\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill , $name; 
    protected $listeners = ["deleteSkill"];

    public function deleteSkill($id)
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->dispatch("deleteModelToggle");
    }

    public function submit()
    {
        $this->skill->delete();
        $this->reset("skill");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("skillRefresh")->to(SkillsData::class);
    }

    public function render()
    {
        return view('admin.livewire.skills.skills-delete');
    }
}
