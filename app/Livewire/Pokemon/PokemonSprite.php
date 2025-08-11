<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonSprite extends Component
{
    public $sprites;
    public $currentSprite;
    public $defaultAnimatedSprite;
    public $activeSprite = 'default';
    
    public $spriteTypes = [];
    
    public function mount($sprites)
    {
        $this->sprites = $sprites;
        
        $this->defaultAnimatedSprite = 
        $sprites['other']['official-artwork']['front_default'] 
        ?? $sprites['front_default'];
        
        
        $this->currentSprite = $this->defaultAnimatedSprite;
        
        $types = [
            'default'     => $this->defaultAnimatedSprite,
            'animated'    => $sprites['other']['showdown']['front_default'] ?? null,
            'generation-v' => $sprites['versions']['generation-v']['black-white']['animated']['front_default'] ?? null,
            'front'       => $sprites['front_default'] ?? null,
            'back'        => $sprites['back_default'] ?? null,
            'shiny'       => $sprites['front_shiny'] ?? null,
            'back_shiny'  => $sprites['back_shiny'] ?? null,
        ];  
        
        $this->spriteTypes = array_filter($types);
    }
    
    public function changeSprite($change)
    {
        $this->activeSprite = $change;
        $this->currentSprite = $this->spriteTypes[$change] ?? $this->currentSprite;
    }
    
    public function render()
    {
        return view('livewire.pokemon.pokemon-sprite');
    }
}