<div>
    <div class="mt-5 d-flex justify-content-center flex-wrap align-items-center">  
        <span class="me-2 mb-1 text-muted">
            <span class="fw-semibold">Game Appearances:</span>
        </span>
        @foreach ($game_indices as $game_index)
        <span class="badge pokemon-show-btn me-2 mb-1">
            {{ ucwords($game_index['version']['name']) }}
        </span>
        @endforeach
    </div>
</div>
