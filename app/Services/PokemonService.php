<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PokemonService
{
    private function fetch(string $url, ?string $cacheKey = null, int $ttl = 86400): array
    {
        $cacheKey = $cacheKey ?? md5($url);

        return Cache::remember($cacheKey, $ttl, function () use ($url) {
            $response = Http::get($url);

            if ($response->failed()) {
                abort(404, "Risorsa non trovata: {$url}");
            }

            return $response->json();
        });
    }

    public function getAll(): array
    {
        return $this->fetch(
            'https://pokeapi.co/api/v2/pokemon?limit=1025', 'all_pokemons'        
        )['results'];
    }

    public function getByIdOrName($id): array
    {
        return $this->fetch(
            "https://pokeapi.co/api/v2/pokemon/{$id}", "pokemon_{$id}"            
        );
    }

    public function getByType(string $type): array
    {
        $data = $this->fetch(
            "https://pokeapi.co/api/v2/type/{$type}", "type_{$type}"           
        );

        return collect($data['pokemon'])->map(fn($item) => 
        [
            'id' => basename(rtrim($item['pokemon']['url'], '/')),
            'name' => $item['pokemon']['name'],
        ])->sortBy('id')->values()->toArray();
    }

    public function getByGeneration(string $generation): array
    {
        $data = $this->fetch(
            "https://pokeapi.co/api/v2/generation/{$generation}", 
            "generation_{$generation}"            
        );

        $pokemons = collect($data['pokemon_species'])->map(fn($item) => 
        [
            'id' => basename(rtrim($item['url'], '/')),
            'name' => $item['name'],
        ])->sortBy('id')->values()->toArray();

        return 
        [
            'pokemons' => $pokemons,
            'region' => $data['main_region']['name'] ?? null,
        ];
    }

    public function getTypes(): array
    {
        $data = $this->fetch('https://pokeapi.co/api/v2/type', 'all_types');
        return collect($data['results'])->pluck('name')->toArray();
    }

    public function getGenerations(): array
    {
        $data = $this->fetch('https://pokeapi.co/api/v2/generation', 'all_generations');
        return collect($data['results'])->pluck('name')->toArray();
    }

    public function getPokemonSprites($id): array
    {
        $pokemon = $this->getByIdOrName($id);
        $sprites = $pokemon['sprites'] ?? [];

        $types = 
        [
            'default' => $sprites['other']['official-artwork']['front_default'] ?? $sprites['front_default'] ?? null,
            'animated' => $sprites['other']['showdown']['front_default'] ?? null,
            'generation-v' => $sprites['versions']['generation-v']['black-white']['animated']['front_default'] ?? null,
            'front' => $sprites['front_default'] ?? null,
            'back' => $sprites['back_default'] ?? null,
            'shiny' => $sprites['front_shiny'] ?? null,
            'back_shiny' => $sprites['back_shiny'] ?? null,
        ];

        return array_filter($types);
    }
}
