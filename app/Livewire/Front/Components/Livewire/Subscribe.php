<?php

namespace App\Livewire\Front\Components\Livewire;

use App\Models\Subscriber;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Subscribe extends Component
{

    #[Rule('required|email|unique:subscribers,email')] 
    public $email;

    public function submit(){
        $this->validate();
        Subscriber::create([
            "email" => $this->email,
        ]);
        $this->reset("email");
        $this->dispatch("sendSuccess");

    }
    public function render()
    {
        return view('front.components.livewire.subscribe');
    }
}
