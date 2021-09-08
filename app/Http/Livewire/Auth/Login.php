<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;


    public function userLogin()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:100',
        ]);
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('error', 'Email address or Password incorrect');
        }
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
