<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;

class PokemonSprite extends Component
{
    public $sprites;
    public $currentSprite;

    public function mount($sprites)
    {
        $this->sprites = $sprites;

        if ($sprites['front_default']) {
            $this->currentSprite = $sprites['front_default'];
        } else {
            foreach ($sprites as $sprite) {
                if ($sprite) {
                    $this->currentSprite = $sprite;
                    break;
                }
            }
        }
    }

    public function change($spr)
    {
        if ($this->sprites[$spr]) {
            $this->currentSprite = $this->sprites[$spr];
        }
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-sprite');
    }
}
