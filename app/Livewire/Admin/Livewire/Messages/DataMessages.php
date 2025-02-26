<?php

namespace App\Livewire\Admin\Livewire\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class DataMessages extends Component
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
        return view('admin.livewire.messages.data-messages' , ["data" => Message::where("name", "LIKE", "%" . $this->search . "%")->paginate(10)]);
    }
}
