<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PokemonGeneration extends Component
{
    public $types = [];
    public $selectedType = '';
    public $pokemonsTypes = [];

    public function mount()
    {
        $response = Http::get('https://pokeapi.co/api/v2/type');
        $this->types = collect($response->json()['results'])->pluck('name');
        $this->pokemonsTypes = [];
    }

    public function updatedSelectedType($value)
    {
        redirect()->route('pokemon.filter', ['type' => $value]);
    }
    
    public function render()
    {
        return view('livewire.pokemon.pokemon-generation');
    }
}
