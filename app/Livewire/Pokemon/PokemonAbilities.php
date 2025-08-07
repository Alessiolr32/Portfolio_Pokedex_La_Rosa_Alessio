<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonAbilities extends Component
{
    public $abilities = [];

    public function mount($abilities)
    {
        $this->abilities = $abilities;
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-abilities');
    }
}
