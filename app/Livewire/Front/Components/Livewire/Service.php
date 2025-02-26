<?php

namespace App\Livewire\Front\Components\Livewire;

use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component
{
    public $count;

    public function render()
    {
        return view('front.components.livewire.service' , ["services" => ModelsService::take($this->count ?? 6)->get()]);
    }
}
