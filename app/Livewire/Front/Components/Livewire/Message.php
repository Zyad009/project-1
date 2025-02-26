<?php

namespace App\Livewire\Front\Components\Livewire;

use App\Http\Requests\Livewire\Front\MessageFrontRequest;
use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{
    public $name, $email, $subject, $message;

    public function getRules(){
        return (new MessageFrontRequest())->rules();
    }

    public function submit(){
        $data = $this->validate();
        ModelsMessage::create($data);
        $this->reset();
        $this->dispatch("sendSuccess");
    }

    public function render()
    {
        return view('front.components.livewire.message');
    }
}
