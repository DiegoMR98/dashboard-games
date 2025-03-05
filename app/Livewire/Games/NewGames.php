<?php

namespace App\Livewire\Games;

use Livewire\Component;

class NewGames extends Component
{
    public $newGames = [];
    public function mount()
    {
        $this->newGames = [
            [
                'id' => 1,
                'title' => 'Uncharted 4',
                'photo' => asset('images/unchartedwebp.jpg'),
                'description' => 'lorem ipsum asdfa sdecxf sdfa wejds dslcij asdfa cxklñjie sadfñin asdfas ljigjakl sdifjasd iksda',
                'price' => '20.00'

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
        return view('livewire.games.new-games');
    }
}
