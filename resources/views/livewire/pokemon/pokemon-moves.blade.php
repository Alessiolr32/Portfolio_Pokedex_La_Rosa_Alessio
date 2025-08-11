<div>
    <div class="d-flex justify-content-center flex-wrap align-items-center flex-column">
        <span class="mb-2 text-muted">
            <span class="fw-semibold">Moves:</span>
        </span>
        <ul class="list-unstyled scroll-list d-flex flex-wrap justify-content-center">
            @foreach ($moves as $move)
            <li class="fw-semibold pokemon-moves-btn">
                {{ ucwords($move['move']['name']) }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
