<?php

namespace App\Livewire\Admin\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LogoutComponent extends Component
{

public function logout(){
        Auth::guard('admin')->logout();

        session()->forget("gurde.admin");

        session()->regenerateToken();

        return to_route("admin.login");
}

    public function render()
    {
        return view('admin.livewire.auth.logout-component');
    }
}
