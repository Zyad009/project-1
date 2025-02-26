<?php

namespace App\Livewire\Admin\Livewire\Messages;

use App\Models\Message;
use Livewire\Component;

class ShowMessages extends Component
{
    public $name , $email , $subject , $message;
    protected $listeners = ["messageShow"];

    public function messageShow($id)
    {
        $record = Message::find($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->subject = $record->subject;
        $this->message = $record->message;
        $record->update(["status" => "1"]);
        $this->dispatch("dataRefresh")->to(DataMessages::class);
        $this->dispatch("showModelToggle");
    }

    public function render()
    {
        return view('admin.livewire.messages.show-messages');
    }
}
