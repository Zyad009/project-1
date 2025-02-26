<?php

namespace App\Livewire\Admin\Livewire\Counters;

use Livewire\Component;
use App\Http\Requests\Livewire\Admin\Counters\LiveCountersRequest;
use App\Models\Counter;

class CreateCounters extends Component
{

    public $name, $count , $icon;

    public function getRules()
    {
        return (new LiveCountersRequest())->rules();
    }

    public function submit()
    {
        $data = $this->validate();
        Counter::create($data);
        $this->reset();

        $this->dispatch("createModelToggle");
        $this->dispatch("dataRefresh")->to(DataCounters::class);
    }

    public function render()
    {
        return view('admin.livewire.counters.create-counters');
    } 
}
