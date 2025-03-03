<?php

namespace App\Livewire\UserInterface;

use Livewire\Component;

class Saludo extends Component
{

    public $name = "Diego"; 
    public function render()
    {
        return view('livewire.user-interface.saludo');
    }
}
