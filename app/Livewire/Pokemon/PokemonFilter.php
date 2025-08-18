<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use App\Services\PokemonService;

class PokemonFilter extends Component
{
    public $types = [];
    public $selectedType = '';

    public function mount(PokemonService $pokemonService)
    {
        $this->types = $pokemonService->getTypes();
    }

    public function updatedSelectedType($value)
    {
        redirect()->route('pokemon.filter', ['type' => $value]);
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-filter');
    }
}
