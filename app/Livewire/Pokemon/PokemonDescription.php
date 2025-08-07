<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonDescription extends Component
{
    public $pokemon;

    public function render()
    {
        return view('livewire.pokemon.pokemon-description');
    }
}
