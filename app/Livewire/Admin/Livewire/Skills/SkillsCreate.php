<?php

namespace App\Livewire\Admin\Livewire\Skills;

use App\Http\Requests\Livewire\Admin\Skill\LiveSkillRequest;
use App\Models\Skill;
use Livewire\Component;

use function PHPUnit\Framework\returnCallback;

class SkillsCreate extends Component
{

    public $name , $progress;

    public function getRules(){
        return (new LiveSkillRequest())->rules();
    }

    public function submit()
    {
        $data = $this->validate();
        Skill::create($data);
        $this->reset();

        $this->dispatch("createModelToggle");
        $this->dispatch("skillRefresh")->to(SkillsData::class);
    }


    public function render()
    {
        return view('admin.livewire.skills.skills-create');
    }
}
