<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use App\Services\PokemonService;

class PokemonSprite extends Component
{
    public $pokemonId;
    public $sprites = [];
    public $currentSprite;
    public $defaultAnimatedSprite;
    public $activeSprite = 'default';

    public $spriteTypes = [];

    public function mount($pokemonId, PokemonService $pokemonService)
    {
        $this->pokemonId = $pokemonId;

        $this->sprites = $pokemonService->getPokemonSprites($pokemonId);

        $this->defaultAnimatedSprite = $this->sprites['default'] ?? $this->sprites['front'] ?? null;

        $this->currentSprite = $this->defaultAnimatedSprite;

        $this->spriteTypes = $this->sprites;
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
