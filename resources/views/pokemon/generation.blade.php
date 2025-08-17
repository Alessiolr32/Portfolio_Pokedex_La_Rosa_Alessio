<x-layout.main-layout>
    <x-slot:title>{{ ucfirst($generation) }}</x-slot:title>
    
    <h1 class="mb-5 text-center fw-bold text-white py-2 rounded-3 d-flex align-items-center justify-content-center pokemon-title">
        Pokémons {{ ucfirst($generation) }}
    </h1>
    
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
            @foreach ($pokemons as $pokemon)
                <livewire:pokemon.pokemon-generation-card :pokemon="$pokemon" :wire:key="$pokemon['id']"/>
            @endforeach
        </div>
    </div>
    
</x-layout.main-layout>
