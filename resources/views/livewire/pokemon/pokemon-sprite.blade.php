<div>
    <div class="text-center mb-2">
        <img src="{{ $currentSprite }}" alt="Sprite Pokémon" class="img-fluid pokemon-img-detail mb-2"/>       
        <div class="d-flex justify-content-center flex-wrap gap-2">
            @foreach($sprites as $key => $url)
            <button wire:click="change('{{ $key }}')" class="btn btn-sm pokemon-show-btn">
                {{ $loop->index + 1 }}
            </button>
            @endforeach
        </div>
    </div>
</div>
