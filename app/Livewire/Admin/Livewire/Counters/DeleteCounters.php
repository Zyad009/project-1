<?php

namespace App\Livewire\Admin\Livewire\Counters;

use App\Models\Counter;
use Livewire\Component;
use App\Livewire\Admin\Livewire\Counters\DataCounters;

class DeleteCounters extends Component
{
    public $counter, $name;
    protected $listeners = ["counterDelete"];

    public function counterDelete($id)
    {
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->dispatch("deleteModelToggle");
    }

    public function submit()
    {
        $this->counter->delete();
        $this->reset("counter");
        $this->dispatch("deleteModelToggle");
        $this->dispatch("alertDelete");
        $this->dispatch("dataRefresh")->to(DataCounters::class);
    }

    public function render()
    {
        return view('admin.livewire.counters.delete-counters');
    }
}
