<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use App\Services\PokemonService;

class PokemonSearched extends Component
{
    public $search = '';

    public function filterPokemons(PokemonService $pokemonService)
    {
        $name = strtolower(trim($this->search));

        if (empty($name)) {
            return;
        }

        $name = str_replace(' ', '-', $name);

        try {
            $pokemonService->getByIdOrName($name);
            return redirect()->route('pokemon.show', ['id' => $name]);
        } catch (\Exception $error) {
            $this->addError('search', 'Pokémon non trovato');
        }
    }

    public function render()
    {
        return view('livewire.pokemon.pokemon-searched');
    }
}
