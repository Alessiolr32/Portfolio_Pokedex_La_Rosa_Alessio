<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=1025');
        $data = json_decode($response->body());
        $pokemonList = $data->results;

        return view('homepage', ['pokemons' => $pokemonList]);
    }

    public function show($id)
    {
        $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}")->json();
        return view('pokemon.show', compact('pokemon'));
    }
}
