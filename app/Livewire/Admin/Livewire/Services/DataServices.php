<?php

namespace App\Livewire\Admin\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class DataServices extends Component
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
        return view('admin.livewire.services.data-services' , ["data" => Service::where("name", "LIKE", "%" . $this->search . "%")->paginate(10)]);
    }
}
