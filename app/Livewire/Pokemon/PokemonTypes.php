<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonTypes extends Component
{
    public $types = [];

    public function mount($types)
    {
        $this->types = $types;
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-types');
    }
}
