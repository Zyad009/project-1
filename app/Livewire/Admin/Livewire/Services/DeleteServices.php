<?php

namespace App\Livewire\Admin\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteServices extends Component
{
    public $service, $name;
    protected $listeners = ["serviceDelete"];

    public function serviceDelete($id)
    {
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->dispatch("deleteModelToggle");
    }

    public function submit()
    {
        $this->service->delete();
        $this->reset("service");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("dataRefresh")->to(DataServices::class);
    }
    
    public function render()
    {
        return view('admin.livewire.services.delete-services');
    }
}
