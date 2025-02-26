<?php

namespace App\Livewire\Admin\Livewire\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class DeleteSubscribers extends Component
{
    public $email, $record;

    protected $listeners = ["deleteSubscribers"];

    public function  deleteSubscribers($id){
        $this->record = Subscriber::find($id);
        $this->email = $this->record->email;
        $this->dispatch("deleteModelToggle");
    }

    public function submit(){
        $this->record->delete();
        $this->reset("record");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("refreshData")->to(DataSubscribers::class);
    }




    public function render()
    {
        return view('admin.livewire.subscribers.delete-subscribers');
    }
}
