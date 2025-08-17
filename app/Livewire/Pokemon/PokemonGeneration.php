<?php

namespace App\Livewire\Pokemon;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PokemonGeneration extends Component
{
    public $generations = [];
    public $selectedGeneration = '';

    public function mount()
    {
        $response = Http::get('https://pokeapi.co/api/v2/generation');
        $this->generations = collect($response->json()['results'])->pluck('name');
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
