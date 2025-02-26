<?php

namespace App\Livewire\Admin\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use App\Http\Requests\Livewire\Admin\Service\LiveServicesRequest;

class EditServices extends Component
{
    public $service, $name, $icon, $description;
    protected $listeners = ["serviceUpdate"];

    public function serviceUpdate($id)
    {
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->resetValidation();
        $this->dispatch("editModelToggle");
    }

    public function getRules()
    {
        return (new LiveServicesRequest())->rules();
    }

    public function submit()
    {
        $newData = $this->validate();
        $this->service->update($newData);

        $this->dispatch("editModelToggle");
        $this->dispatch("dataRefresh")->to(DataServices::class);
    }
    public function render()
    {
        return view('admin.livewire.services.edit-services');
    }
}
