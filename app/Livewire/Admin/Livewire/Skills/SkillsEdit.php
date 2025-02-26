<?php

namespace App\Livewire\Admin\Livewire\Skills;

use App\Models\Skill;
use Livewire\Component;
use App\Http\Requests\Livewire\Admin\Skill\LiveSkillRequest;

class SkillsEdit extends Component
{
    public $skill, $name, $progress;
    protected $listeners=["skillUpdate"];

    public function skillUpdate($id){
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->resetValidation();
        $this->dispatch("editModelToggle");
    }

    public function getRules()
    {
        return (new LiveSkillRequest())->rules();
    }

    public function submit()
    {
        $newData = $this->validate();
        $this->skill->update($newData);

        $this->dispatch("editModelToggle");
        $this->dispatch("skillRefresh")->to(SkillsData::class);
    }

    
    public function render()
    {
        return view('admin.livewire.skills.skills-edit');
    }
}
