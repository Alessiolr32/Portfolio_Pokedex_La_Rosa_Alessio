<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonCard extends Component
{
    public $pokemon;
    public $index;

    public function mount($pokemon, $index)
    {
        $this->pokemon = $pokemon;
        $this->index = $index;
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-card');
    }
}
