<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use App\Services\PokemonService;

class PokemonGeneration extends Component
{
    public $generations = [];
    public $selectedGeneration = '';

    public function mount(PokemonService $pokemonService)
    {
        $this->generations = $pokemonService->getGenerations();
    }

    public function updatedSelectedGeneration($value)
    {
        redirect()->route('pokemon.generation', ['generation' => $value]);
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-generation');
    }
}
