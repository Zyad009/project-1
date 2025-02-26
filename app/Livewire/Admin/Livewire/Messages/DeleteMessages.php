<?php

namespace App\Livewire\Admin\Livewire\Messages;

use App\Models\Message;
use Livewire\Component;

class DeleteMessages extends Component
{
    public $message, $name;
    protected $listeners = ["messageDelete"];

    public function messageDelete($id)
    {
        $this->message= Message::find($id);
        $this->name = $this->message->name;
        $this->dispatch("deleteModelToggle");
    }

    public function submit()
    {
        $this->message->delete();
        $this->reset("message");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("dataRefresh")->to(DataMessages::class);
    }
    
    public function render()
    {
        return view('admin.livewire.messages.delete-messages');
    }
}
