<?php

namespace App\Livewire\Admin\Livewire\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    // #[Rule("required|string|email|min:3")]
    public $email ;

    // #[Rule("required|min:6")]
    public $password ;

    // #[Rule("nullable")]
    public $remember ;

public function getRules(){
        return (new LoginRequest())->rules();
}


public function updatedEmail(){
        $this->validateOnly("email");
}

public function updatedPassword(){
        $this->validateOnly("password");
}

public function submit(){
        $this->validate();
        if(!Auth::guard("admin")->attempt(["email"=>$this->email , "password"=>$this->password], $this->remember)){
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }
        $this->reset(['email', 'password', 'remember']);
        return to_route("admin.index");
}

    public function render()
    {
        return view('admin.livewire.auth.login');
    }
}
