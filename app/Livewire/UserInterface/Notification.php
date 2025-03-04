<?php

namespace App\Livewire\UserInterface;

use Livewire\Component;

class Notification extends Component
{
    public $notifications = ["Primera notificacion", "segunda notificación"];
    public function render()
    {
        return view('livewire.user-interface.notification');
    }
}
