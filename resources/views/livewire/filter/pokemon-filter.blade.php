<div>
    <input type="text" wire:model="search" placeholder="Cerca Pokémon..." class="form-control mb-3" />

    <div class="row">
        @foreach ($filteredPokemons as $pokemon)
            <div class="col-6 col-md-3 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="text-capitalize">{{ $pokemon['name'] }}</h5>
                        <a href="{{ route('pokemon.show', ['id' => basename($pokemon['url'])]) }}" class="btn btn-primary btn-sm">Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
