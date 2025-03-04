<?php

namespace App\Livewire;

use Livewire\Component;

class TheMenu extends Component
{
    public $itemsMenu = ["home", "glasses", "gift", "cube", "people-circle","cart", "chatbox-ellipses"];

    public function render()
    {
        return view('livewire.the-menu');
    }
}
