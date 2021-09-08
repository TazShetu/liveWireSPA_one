<?php

namespace App\Http\Livewire\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public function logout()
    {
        Auth::logout();
        session()->flash('success', 'You have successfully Logged out.');
        return redirect()->route('login');
    }


    public function render()
    {
        return view('livewire.partial.navbar');
    }
}
