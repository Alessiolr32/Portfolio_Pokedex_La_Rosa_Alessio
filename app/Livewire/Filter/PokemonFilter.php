<?php

namespace App\Http\Livewire\Filter;

use Livewire\Component;

class PokemonFilter extends Component
{
    public $pokemons = [];
    public $search = '';

    public function mount($pokemons)
    {
        $this->pokemons = $pokemons;
    }

    public function render()
    {
        $filtered = collect($this->pokemons)->filter(
            fn($pokemon) => str_contains(strtolower($pokemon['name']), strtolower($this->search))
        );

        return view('livewire.filter.pokemon-filter', ['filteredPokemons' => $filtered]);
    }
}
