<div>
    <div class="d-flex justify-content-center flex-wrap align-items-center p-1 mb-4">
        <span class="text-muted small">
            <span class="fw-semibold me-2">Base Stats:</span>
            @foreach ($stats as $stat)
            <span class="me-1">
                <span class="fw-semibold">
                    {{ ucwords($stat['stat']['name']) }}:
                </span>
                {{ $stat['base_stat'] }}
            </span>
            @endforeach
        </span>
    </div>
</div>
