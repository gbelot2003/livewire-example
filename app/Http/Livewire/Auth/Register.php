<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $email = '';
    public $name = '';
    public $password = '';
    public $passwordConfirmation = '';


    public function register()
    {
        $data = $this->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:3|same:passwordConfirmation'
        ]);

        $user = User::create([
            'email' => $data['email'],
            'name' => $data['name'],
            'password' => Hash::make($data['password']),
        ]);

        auth()->login($user);

        redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
