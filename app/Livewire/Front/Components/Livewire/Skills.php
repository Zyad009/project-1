<?php

namespace App\Livewire\Front\Components\Livewire;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        return view('front.components.livewire.skills' , [
            "skills" => Skill::take(3)->get()
        ]);
    }
}
