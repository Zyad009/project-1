<?php

namespace App\Livewire\Admin\Livewire\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class DataCounters extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ["dataRefresh" => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.livewire.counters.data-counters' , ["data" => Counter::where("name", "LIKE", "%" . $this->search . "%")->paginate(10)]);
    }
}
