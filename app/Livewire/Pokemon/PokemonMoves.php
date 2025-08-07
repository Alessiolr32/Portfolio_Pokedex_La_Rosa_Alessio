<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonMoves extends Component
{
    public $moves = [];

    public function mount($moves)
    {
        $this->moves = $moves;
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-moves');
    }
}
