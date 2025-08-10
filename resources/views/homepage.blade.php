<x-layout.main-layout>
  <x-slot:title>HomePage</x-slot:title>
  <x-layout.title/>
  
  <div class="container">
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
      @foreach($pokemons as $index => $pokemon)
      <livewire:pokemon.pokemon-card :pokemon="$pokemon" :index="$index" :key="$index" />
      @endforeach
    </div>
  </div>
  
</x-layout.main-layout>
