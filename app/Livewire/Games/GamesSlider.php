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
                'photo' => asset('images/pruebaultimateW.webp'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus distinctio,
                voluptatibus mollitia molestias suscipit quam cupiditate quasi atque? Recusandae nob corrupti ipsa est
                officiis voluptatum erroraccusamus sapiente amet.',
                'reviews' => 53

            ],
            [
                'id' => 2,
                'title' => 'Fornite',
                'photo' => asset('images/forniteW.webp'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus distinctio,
                voluptatibus mollitia molestias suscipit quam cupiditate quasi atque? Recusandae nob corrupti ipsa est
                officiis voluptatum erroraccusamus sapiente amet.',
                'reviews' => '102'

            ],
            [
                'id' => 3,
                'title' => 'Red Redemptation 3',
                'photo' => asset('images/redtemtaionW.webp'),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus distinctio,
                voluptatibus mollitia molestias suscipit quam cupiditate quasi atque? Recusandae nob corrupti ipsa est
                officiis voluptatum erroraccusamus sapiente amet.',
                'reviews' => '40'

            ]
        ];
    }
    public function render()
    {
        return view('livewire.games.games-slider');
    }
}
