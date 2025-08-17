<div>
    <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle text-white navbar-text" href="#" role="button" id="dropdownTypes" data-bs-toggle="dropdown" aria-expanded="false">
                Generations
            </a>
            
            <ul class="dropdown-menu pokemon-dropdown" aria-labelledby="dropdownTypes">
                @foreach ($generations as $generation)
                <li>
                    <a href="#" class="dropdown-item text-capitalize" wire:click.prevent="$set('selectedGeneration', '{{ $generation }}')">
                        {{ $generation }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
