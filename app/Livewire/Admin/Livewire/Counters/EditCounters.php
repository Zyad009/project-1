<?php

namespace App\Livewire\Admin\Livewire\Counters;

use App\Models\Counter;
use Livewire\Component;
use App\Http\Requests\Livewire\Admin\Counters\LiveCountersRequest;

class EditCounters extends Component
{
    public $counter, $name, $icon , $count;
    protected $listeners = ["counterUpdate"];

    public function counterUpdate($id)
    {
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->resetValidation();
        $this->dispatch("editModelToggle");
    }

    public function getRules()
    {
        return (new LiveCountersRequest())->rules();
    }

    public function submit()
    {
        $newData = $this->validate();
        $this->counter->update($newData);

        $this->dispatch("editModelToggle");
        $this->dispatch("dataRefresh")->to(DataCounters::class);
    }

    public function render()
    {
        return view('admin.livewire.counters.edit-counters');
    }
}
