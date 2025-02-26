<?php

namespace App\Livewire\Admin\Livewire\Settings;

use App\Http\Requests\Livewire\Admin\Setting\LiveSettingRequest;
use App\Models\Setting;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class UpdateSettings extends Component
{
    use LivewireAlert;
    public $settings;
    protected $listeners = ['alert-success' => 'showAlert'];

    public function mount()
    {
        $this->settings = Setting::find(1);
    }

    public function getRules()
    {
        return (new LiveSettingRequest())->rules();
    }

    public function updated(){
        $this->validate();
    }

    public function submit()
    {
        $this->validate();

        if ($this->settings->isDirty()) {
            $this->settings->save();
            $this->dispatch("alertUpdate");
            // $this->alert("success","test");
        }
    }

    public function render()
    {
        return view('admin.livewire.settings.update-settings');
    }
}
