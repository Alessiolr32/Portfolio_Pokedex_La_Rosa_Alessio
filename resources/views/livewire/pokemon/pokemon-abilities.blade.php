<div>
    <p class="text-muted small mb-2">
        <span class="fw-semibold me-1">Abilities: </span>       
        @foreach ($abilities as $ability)
        <span class="me-1">
            {{ ucwords($ability['ability']['name']) }}
        </span>
        @endforeach        
    </p>
</div>
