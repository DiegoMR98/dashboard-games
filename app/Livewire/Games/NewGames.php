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
                'title' => 'Uncharted 4',
                'photo' => asset('images/unchartedwebp.jpg'),
                'description' => 'lorem ipsum asdfa sdecxf sdfa wejds dslcij asdfa cxklñjie sadfñin asdfas ljigjakl sdifjasd iksda'

            ],
            [
                'title' => 'Dishonored: Standard Edition',
                'photo' => asset('images/dishonored.jpg'),
                'description' => ''

            ],
            [
                'title' => 'Black Myth',
                'photo' => asset('images/blackMyth.jpg'),
                'description' => 'lorem ipsum asdfa sdecxf sdfa wejds dslcij asdfa cxklñjie sadfñin asdfas ljigjakl sdifjasd iksda'

            ],
            [
                'title' => 'Elden Ring',
                'photo' => asset('images/eldenRing.png'),
                'description' => ''

            ],
        ];
    }
    public function render()
    {
        return view('livewire.games.new-games');
    }
}
