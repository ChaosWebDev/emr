<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $username, $password, $remember = false;
    public $message = null;
    public $displayMessage = false;

    protected $rules = [
        'username' => ['required', 'string'],
        'password' => ['required', 'string']
    ];

    public function login()
    {
        $this->validate();

        if (!Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)) {
            $this->message = 'Invalid username or password!';
            $this->displayMessage = true;
            return;
        }

        return redirect()->intended('/');
    }

    public function render()
    {
        return view('pages.login');
    }
}
