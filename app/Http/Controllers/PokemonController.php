<?php

namespace App\Http\Controllers;

use App\Services\PokemonService;

class PokemonController extends Controller
{
    private PokemonService $pokemonService;

    public function __construct(PokemonService $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }

    public function index()
    {
        $pokemons = $this->pokemonService->getAll();
        return view('homepage', ['pokemons' => $pokemons]);
    }

    public function show($id)
    {
        $pokemon = $this->pokemonService->getByIdOrName($id);
        $previousPokemon = (is_numeric($id) && $id > 1) ? $id - 1 : null;
        $nextPokemon = (is_numeric($id) && $id < 1025) ? $id + 1 : null;

        return view('pokemon.show', compact('pokemon', 'previousPokemon', 'nextPokemon'));
    }

    public function filter($type)
    {
        $pokemons = $this->pokemonService->getByType($type);
        return view('pokemon.filter', compact('pokemons', 'type'));
    }

    public function generation($generation)
    {
        $data = $this->pokemonService->getByGeneration($generation);
        $pokemons = $data['pokemons'];
        $region = $data['region'] ?? null;
        return view('pokemon.generation', compact('pokemons', 'generation', 'region'));
    }
}
