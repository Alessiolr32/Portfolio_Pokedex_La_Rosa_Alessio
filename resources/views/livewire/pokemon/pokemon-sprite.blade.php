<div>
    <div class="text-center mb-5 mt-5">
        <img src="{{ $currentSprite }}" alt="Sprite Pokémon" class="card-img-top pokemon-img-detail mx-auto"/>       
    </div>
    
    <div class="d-flex justify-content-center gap-2 flex-wrap mb-1">
        @foreach ($spriteTypes as $change => $preview)
            <button wire:click="changeSprite('{{ $change }}')" 
                class="pokemon-preview-btn {{ $activeSprite === $change ? 'active-sprite' : '' }}">
                <img src="{{ $preview }}" alt="{{ $change }}" class="sprite-preview">
            </button>
        @endforeach
    </div>
</div>
