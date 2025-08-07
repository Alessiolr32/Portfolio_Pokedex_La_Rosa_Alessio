<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class Arrows extends Component
{
    public $previousPokemon;
    public $nextPokemon;
    public $pokemon;

    public function render()
    {
        return view('livewire.pokemon.arrows');
    }
}
