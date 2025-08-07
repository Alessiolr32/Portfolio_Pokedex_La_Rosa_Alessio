<div>
    <h1 class="mb-5 text-center fw-bold">
        <div class="pokemon-title text-white px-3 py-2 rounded-3 d-flex align-items-center justify-content-center gap-3">            
            <div class="arrow-wrapper d-flex align-items-center justify-content-center">
                @if ($previousPokemon)
                <a href="{{ route('pokemon.show', $previousPokemon) }}" class="btn btn-outline-light rounded-circle direction-arrow" title="Pokémon precedente">
                    &lt;
                </a>
                @endif
            </div>           
            <p class="mb-0 text-nowrap">
                #{{ str_pad($pokemon['id'], 4, '0', STR_PAD_LEFT) }}
                {{ ucwords($pokemon['name']) }}
            </p>            
            <div class="arrow-wrapper d-flex align-items-center justify-content-center">
                @if ($nextPokemon)
                <a href="{{ route('pokemon.show', $nextPokemon) }}" class="btn btn-outline-light rounded-circle direction-arrow" title="Pokémon successivo">
                    &gt;
                </a>
                @endif
            </div>            
        </div>
    </h1>
</div>
