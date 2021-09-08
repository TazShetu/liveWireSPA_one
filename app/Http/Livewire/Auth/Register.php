<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{

    public $name;
    public $email;
    public $password;
    public $confirmPassword;


    public function registerStore()
    {
        $this->validate([
            'name' => 'required|string|min:3|max:30',
            'email' => 'required|email|max:50|unique:mysql.users,email',
            'confirmPassword' => 'required',
            'password' => 'required|min:8|max:100|same:confirmPassword',
        ]);
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->save();
        session()->flash('success', 'You have successfully Registered.');
        return redirect()->route('login');
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
