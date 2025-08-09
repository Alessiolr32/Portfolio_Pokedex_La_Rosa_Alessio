<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PokemonSearched extends Component
{
    public $search = '';
    public $pokemon = null;
    
    public function filterPokemons()
    {
        $name = strtolower(trim($this->search));

        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}");
        if ($response->successful()) {
            return redirect()->route('pokemon.show', ['id' => $name]);
        }
    }
    
    public function render()
    {
        return view('livewire.pokemon.pokemon-searched');
    }
}
