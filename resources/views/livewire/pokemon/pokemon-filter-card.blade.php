<div>
    <div class="col">
        <div class="card card-item text-center rounded-3 shadow p-1 d-flex flex-column">
            <a href="{{ route('pokemon.show', $pokemon['id']) }}">
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/{{ $pokemon['id'] }}.png" class="card-img-top pokemon-type-img" alt="{{ ucwords($pokemon['name']) }}">                           
            </a>
            
            <div class="card-body">
                <p class="mb-0 mt-1 text-muted small">
                    #{{ str_pad($pokemon['id'], 4, '0', STR_PAD_LEFT) }}
                </p>
                <h6 class="card-title fw-bold mb-0 text-truncate">{{ ucwords($pokemon['name']) }}</h6>
            </div>
        </div>
    </div>
</div>
