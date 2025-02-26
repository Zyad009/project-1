<?php

namespace App\Livewire\Admin\Livewire\Services;

use Livewire\Component;
use App\Http\Requests\Livewire\Admin\Service\LiveServicesRequest;
use App\Models\Service;

class CreateServices extends Component
{

    public $name, $description, $icon;

    public function getRules()
    {
        return (new LiveServicesRequest())->rules();
    }

    public function submit()
    {
        $data = $this->validate();
        Service::create($data);
        $this->reset();

        $this->dispatch("createModelToggle");
        $this->dispatch("dataRefresh")->to(DataServices::class);
    }

    public function render()
    {
        return view('admin.livewire.services.create-services');
    }
}
