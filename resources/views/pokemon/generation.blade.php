<x-layout.main-layout>
    <x-slot:title>Generation: {{ ucfirst($type) }}</x-slot:title>
    
    <h1 class="mb-5 text-center fw-bold text-white py-2 rounded-3 d-flex align-items-center justify-content-center pokemon-title">
        Pokémons Generation {{ ucfirst($type) }}
    </h1>
    
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
            @foreach ($pokemons as $pokemon)
            <livewire:pokemon.pokemon-generation-card :pokemon="$pokemon"/>
            @endforeach
        </div>
    </div>
</x-layout.main-layout>
