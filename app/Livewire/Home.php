<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public $user;

    public function mount()
    {
        $this->user = json_encode(Auth::user());
    }

    public function render()
    {
        return view('home');
    }
}
