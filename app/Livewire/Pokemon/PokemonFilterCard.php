<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonFilterCard extends Component
{
    public $pokemon;
    
    public function render()
    {
        return view('livewire.pokemon.pokemon-filter-card');
    }
}
