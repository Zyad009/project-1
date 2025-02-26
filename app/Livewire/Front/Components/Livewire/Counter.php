<?php

namespace App\Livewire\Front\Components\Livewire;

use App\Models\Counter as ModelsCounter;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('front.components.livewire.counter' , ["counters" => ModelsCounter::take(4)->get() ]);
    }
}
