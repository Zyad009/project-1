<?php

namespace App\Livewire\Admin\Livewire\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;

class DataSubscribers extends Component
{

    use WithPagination;

    public $search;

    protected $listeners = ["refreshData" => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.livewire.subscribers.data-subscribers' , ["data" => Subscriber::where("email" , "LIKE" ,"%".$this->search."%")->paginate(10)]);
    }
}
