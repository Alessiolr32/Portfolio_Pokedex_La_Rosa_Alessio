<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index()
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=1025');
        $dataList = json_decode($response->body());
        $pokemonList = $dataList->results;
        
        return view('homepage', ['pokemons' => $pokemonList]);
    }
    
    public function show($id)
    {
        $pokemon = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}")->json();
        
        $previousPokemon = (is_numeric($id) && $id > 1) ? $id - 1 : null;
        $nextPokemon = (is_numeric($id) && $id < 1025) ? $id + 1 : null;
        
        return view('pokemon.show', compact('pokemon', 'previousPokemon', 'nextPokemon'));
    }
    
    public function filter($type)
    {
        $response = Http::get("https://pokeapi.co/api/v2/type/{$type}");
        $dataList = $response->json();
        
        $pokemons = collect($dataList['pokemon'])->map(function ($itemPokemon) 
        {
            return [
                'id' => basename(rtrim($itemPokemon['pokemon']['url'], '/')),
                'name' => $itemPokemon['pokemon']['name'],
            ];
        });
        
        return view('pokemon.filter', compact('pokemons', 'type'));
    }
    
    public function generation($generation)
    {
        $response = Http::get("https://pokeapi.co/api/v2/generation/{$generation}");
        $dataList = $response->json();
        
        $pokemons = collect($dataList['pokemon_species'])->map(function ($itemPokemon) {
            return 
            [
                'id' => basename(rtrim($itemPokemon['url'], '/')),
                'name' => $itemPokemon['name'],
            ];
        })->sortBy('id'); 
        
        return view('pokemon.generation', compact('pokemons', 'generation'));
    }
}