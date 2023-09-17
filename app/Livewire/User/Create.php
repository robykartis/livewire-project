<?php

namespace App\Livewire\User;

use Livewire\Component;

class Create extends Component
{
    public $name, $email, $password, $password_confirmation, $type;

    public function render()
    {
        return view('livewire.user.create');
    }
}
