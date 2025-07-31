<div>
    <div class="card card-item text-center rounded-3 shadow p-1">
        <a href="{{ route('pokemon.show', $index +1) }}" class="text-decoration-none text-dark">
            <img src="{{ 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/'.($index +1).'.png' }}" class="card-img-top" alt="{{ ucfirst($pokemon->name) }}">
        </a>
        
        <div class="card-body">
            <p class="mb-0 text-muted small">
                @if ($index < 10)
                #000{{ $index +1 }}
                @elseif ($index < 100)
                #00{{ $index +1 }}
                @elseif ($index < 1000)
                #0{{ $index +1 }}
                @else 
                #{{ $index +1 }}
                @endif
            </p>  
            <h6 class="card-title fw-bold mb-0">{{ ucfirst($pokemon->name) }}</h6>
        </div>
    </div>
</div>