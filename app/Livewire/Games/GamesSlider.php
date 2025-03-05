<?php

namespace App\Livewire\Games;

use Livewire\Component;

class GamesSlider extends Component
{
    public $theGames = [];
    public function mount()
    {
        $this->theGames = [
            [
                'id' => 1,
                'title' => 'Valorant',
                'photo' => asset('images/pruebaultimate.jpg'),
                'description' => 'lorem ipsum asdfa sdecxf sdfa wejds dslcij asdfa cxklñjie sadfñin asdfas ljigjakl sdifjasd iksda',
                'reviews' => 53

            ],
            [
                'id' => 2,
                'title' => 'Dishonored: Standard Edition',
                'photo' => asset('images/dishonored.jpg'),
                'description' => '',
                'price' => '25.00'

            ],
            [
                'id' => 3,
                'title' => 'Black Myth',
                'photo' => asset('images/blackMyth.jpg'),
                'description' => 'lorem ipsum asdfa sdecxf sdfa wejds dslcij asdfa cxklñjie sadfñin asdfas ljigjakl sdifjasd iksda',
                'price' => '40.90'

            ],
            [
                'id' => 4,
                'title' => 'Elden Ring',
                'photo' => asset('images/eldenRing.png'),
                'description' => '',
                'price' => '19.20'

            ],
        ];
    }
    public function render()
    {
        return view('livewire.games.games-slider');
    }
}
