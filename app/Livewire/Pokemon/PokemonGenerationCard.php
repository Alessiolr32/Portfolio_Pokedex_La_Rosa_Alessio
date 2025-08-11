<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonGenerationCard extends Component
{
    public $pokemon;
    
    public function render()
    {
        return view('livewire.pokemon.pokemon-generation-card');
    }
}
