<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonAppearances extends Component
{
    public $game_indices = [];

    public function mount($game_indices)
    {
        $this->game_indices = $game_indices;
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-appearances');
    }
}
