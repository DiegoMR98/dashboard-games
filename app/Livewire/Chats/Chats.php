<?php

namespace App\Livewire\Chats;

use Livewire\Component;

class Chats extends Component
{
    public $users = [1,2,3,4,5,6];


    public function render()
    {
        return view('livewire.chats.chats');
    }
}
