<?php

namespace App\Livewire\Admin\Livewire\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public $title, $progress;
    protected $listeners = ["showSkill"];

    public function showSkill($id)
    {
        $skill = Skill::find($id);
        $this->title = $skill->name;
        $this->progress = $skill->progress;
        $this->dispatch("showModelToggle");
    }
    public function render()
    {
        return view('admin.livewire.skills.skills-show');
    }
}
