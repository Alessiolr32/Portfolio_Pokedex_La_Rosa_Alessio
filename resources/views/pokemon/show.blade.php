<x-layout.main-layout>
    <x-slot:title>{{ ucwords($pokemon['name']) }}</x-slot:title>
    
    <section>
        <livewire:pokemon.arrows 
        :previous-pokemon="$previousPokemon" 
        :next-pokemon="$nextPokemon" 
        :pokemon="$pokemon"/>   
    </section>
    
    <div class="card card-show-item shadow rounded-4 border-0 w-75 mx-auto">
        <section>
            <img src="{{ $pokemon['sprites']['other']['official-artwork']['front_default'] }}" alt="{{ $pokemon['name'] }}" class="card-img-top rounded-top-4 pokemon-img-detail">            
            <livewire:pokemon.pokemon-sprite :sprites="collect($pokemon['sprites'])->filter(fn($sp) => is_string($sp))->toArray()" />
        </section>
        
        <div class="card-body text-center">
            <section>
                <p class="mb-1 text-muted small">
                    #{{ str_pad($pokemon['id'], 4, '0', STR_PAD_LEFT) }}
                </p>
                <h5 class="card-title fw-bold">{{ ucwords($pokemon['name']) }}</h5>
            </section>
            
            <section>
                <livewire:pokemon.pokemon-types :types="$pokemon['types']"/>               
            </section>
            
            <section>
                <livewire:pokemon.pokemon-description :pokemon="$pokemon" />
            </section>
            
            <section>
                <livewire:pokemon.pokemon-abilities :abilities="$pokemon['abilities']"/> 
            </section>
            
            <section>
                <livewire:pokemon.pokemon-stats :stats="$pokemon['stats']"/> 
            </section>
            
            <section>
                <div class="mb-3 d-flex justify-content-center">
                    <div class="audio-wrapper">
                        <audio controls>
                            <source src="{{ $pokemon['cries']['latest'] }}" type="audio/ogg"/>
                            Il tuo browser non supporta l'elemento audio.
                        </audio>
                    </div>
                </div>
            </section>
            
            <section>
                <livewire:pokemon.pokemon-moves :moves="$pokemon['moves']"/>
            </section>
            
            <section>
                <livewire:pokemon.pokemon-appearances :game_indices="$pokemon['game_indices']" />
            </section>
        </div>
        
        <div>
            <div class="d-flex justify-content-center">
                <a class="m-2 btn w-100 d-flex align-items-center justify-content-center pokemon-color-back" href="{{ route('pokemon.index') }}">
                    Back to Pokédex
                </a>
            </div>
        </div>
    </div>   
</x-layout.main-layout>
