<?php

namespace App\Livewire\Chats;

use Livewire\Component;

class ChatGroup extends Component
{
    public $groups = [1,2,3];
    public function render()
    {
        return view('livewire.chats.chat-group');
    }
}
