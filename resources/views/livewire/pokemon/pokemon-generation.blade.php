<div class="nav-link p-0 m-0 d-flex align-items-center">
    <div class="dropdown d-inline-block">
        <a class="nav-link dropdown-toggle text-white p-0 m-0" href="#" role="button" id="dropdownGenerations" data-bs-toggle="dropdown" aria-expanded="false">
            Generations
        </a>

        <ul class="dropdown-menu pokemon-dropdown" aria-labelledby="dropdownGenerations">
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
