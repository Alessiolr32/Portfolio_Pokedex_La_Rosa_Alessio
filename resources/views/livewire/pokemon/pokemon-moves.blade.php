<div>
    <div class="d-flex justify-content-center flex-wrap align-items-center flex-column m-1 p-1">
        <span class="me-1 mb-2 text-muted"><span class="fw-semibold">Moves:</span></span>
        <ul class="list-unstyled scroll-list mb-0 d-flex flex-wrap justify-content-center gap-2">
            @foreach ($moves as $move)
            <li class="rounded-4 px-2 border bg-light">
                {{ ucwords($move['move']['name']) }}
            </li>
            @endforeach
        </ul>
    </div>
</div>
