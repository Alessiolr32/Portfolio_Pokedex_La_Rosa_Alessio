<x-layout.main-layout>
    <x-slot:title>{{ ucfirst($pokemon['name']) }}</x-slot:title>
    
    <div>
        <h1 class="mb-5 text-center fw-bold">
            <div class="pokemon-title text-white px-3 py-2 rounded-3">
                <p class="mb-0">
                    @if ($pokemon['id'] < 10)
                    #000{{ $pokemon['id'] }} {{ ucfirst($pokemon['name']) }}
                    @elseif ($pokemon['id'] < 100)
                    #00{{ $pokemon['id'] }} {{ ucfirst($pokemon['name']) }}
                    @elseif ($pokemon['id'] < 1000)
                    #0{{ $pokemon['id'] }} {{ ucfirst($pokemon['name']) }}
                    @else 
                    #{{ $pokemon['id'] }} {{ ucfirst($pokemon['name']) }}
                    @endif
                </p>  
            </div>
        </h1>
    </div>
    
    <div class="card card-show-item shadow rounded-4 border-0 w-75 mx-auto">
        <section>
            <img src="{{ $pokemon['sprites']['other']['official-artwork']['front_default'] }}"alt="{{ $pokemon['name'] }}" class="card-img-top rounded-top-4 pokemon-img-detail">
        </section>
        
        <div class="card-body text-center">
            <section>
                <p class="mb-1 text-muted small">
                    @if ($pokemon['id'] < 10)
                    #000{{ $pokemon['id'] }}
                    @elseif ($pokemon['id'] < 100)
                    #00{{ $pokemon['id'] }}
                    @elseif ($pokemon['id'] < 1000)
                    #0{{ $pokemon['id'] }}
                    @else 
                    #{{ $pokemon['id'] }}
                    @endif
                </p>  
                <h5 class="card-title fw-bold">{{ ucfirst($pokemon['name']) }}</h5>
            </section>
            
            <section class="mb-2">
                <div class="mb-2">
                    @foreach ($pokemon['types'] as $type)
                    <span class="badge badge-{{ $type['type']['name'] }} me-1">
                        {{ ucfirst($type['type']['name']) }}
                    </span>
                    @endforeach
                </div>
            </section>
            
            <section>
                <p class="text-muted small mb-1">
                    <span class="fw-semibold">Height: </span>{{ $pokemon['height'] / 10 }} m
                </p>
                <p class="text-muted small mb-1">
                    <span class="fw-semibold">Weight: </span>{{ $pokemon['weight'] / 10 }} kg
                </p>
                <p class="text-muted small mb-1">
                    <span class="fw-semibold">Base Experience: </span>{{ $pokemon['base_experience'] }}
                </p>
            </section>
            
            <section>
                <p class="text-muted small mb-1">
                    <span class="fw-semibold">Abilities: </span>
                    @foreach ($pokemon['abilities'] as $i => $ability)
                    {{ ucfirst($ability['ability']['name']) }}
                    @endforeach
                </p>
            </section>
            
            <section class="d-flex justify-content-center flex-wrap align-items-center p-1 mb-4">
                <span class="text-muted small">
                    <span class="fw-semibold me-1">Base Stats:</span>
                    @foreach ($pokemon['stats'] as $stat)
                    <span class="me-1">
                        {{ ucfirst($stat['stat']['name']) }}: {{ $stat['base_stat'] }}
                    </span>
                    @endforeach
                </span>
            </section>
            
            <section class="mb-3">
                <audio controls>
                    <source src="{{ $pokemon['cries']['latest'] }}" type="audio/ogg">
                    </audio>
            </section>
                
            <section>
                <div class="d-flex justify-content-center flex-wrap align-items-center flex-column m-1 p-1">    
                    <span class="me-1 mb-2 text-muted"><span class="fw-semibold">Moves:</span></span>    
                    <ul class="list-unstyled scroll-list mb-0 d-flex flex-wrap justify-content-center gap-2">
                        @foreach ($pokemon['moves'] as $i => $move)    
                        <li class="rounded-4 px-2 border bg-light">
                            {{ ucfirst($move['move']['name']) }}    
                        </li>        
                        @endforeach    
                    </ul>        
                </div>    
            </section>        
                
            <section class="mt-4 d-flex justify-content-center flex-wrap align-items-center">    
                <span class="me-2 mt-1 text-muted"><span class="fw-semibold">Game Appearances:</span></span>    
                @foreach ($pokemon['game_indices'] as $game_index)    
                <span class="me-1 badge pokemon-color"    >
                    {{ ucfirst($game_index['version']['name']) }}    
                </span>    
                @endforeach    
            </section>    
        </div>    
            
        <div class="d-flex justify-content-center">    
            <a class="m-2 btn w-100 d-flex align-items-center justify-content-center     pokemon-color-btn" href="{{ route('pokemon.index') }}">
                Back to Pokédex    
            </a>    
        </div>    
            
    </div>    
        
</x-layout.main-layout>