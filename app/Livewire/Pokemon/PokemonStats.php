<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonStats extends Component
{
    public $stats = [];

    public function mount($stats)
    {
        $this->stats = $stats;
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-stats');
    }
}
