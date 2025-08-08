<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonSprite extends Component
{
    public $sprites;
    public $currentSprite;
    
    public function mount($sprites)
    {
        $this->currentSprite = $sprites['versions']['generation-v']['black-white']['animated']['front_default'] 
        ?? $sprites['other']['showdown']['front_default']
        ?? $sprites['front_default'];           
    }
    
    public function render()
    {
        return view('livewire.pokemon.pokemon-sprite');
    }
}
