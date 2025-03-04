<?php

namespace App\Livewire\Games;

use Livewire\Component;

class GamesList extends Component
{
    public $theGames = [];

    public function mount()
    {
        // Simulación de base de datos
        $this->theGames = [
            [
                'photo' => asset('images/unreveal.jpg'),
                'name' => 'Unreveal 2',
                'description' => '(Standard Edition + Starter Pass)'
            ],
            [
                'photo' => asset('images/unnamed.png'),
                'name' => 'Subway Surfers',
                "description" => ''
            ],
            [
                'photo' => asset('images/red3.jpg'),
                'name' => 'Red Dead Redemption3',
                'description' => '(Premium Pack)'
            ]
        ];
    }


    public function render()
    {
        return view('livewire.games.games-list');
    }
}
