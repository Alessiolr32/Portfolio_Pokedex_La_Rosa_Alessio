<x-layout.main-layout>
  <x-slot:title>HomePage</x-slot:title>
  <x-layout.title />
  
  <div class="row row-cols-md-6 g-3 mx-2">
    @foreach($pokemons as $index => $pokemon)
    <x-pokemon-card :pokemon="$pokemon" :index="$index" />
    @endforeach
  </div>
  
</x-layout.main-layout>


