<div>
    <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle text-white navbar-text" href="#" role="button" id="dropdownTypes" data-bs-toggle="dropdown" aria-expanded="false">
                Types
            </a>
                        
            <ul class="dropdown-menu pokemon-dropdown" aria-labelledby="dropdownTypes">
                @foreach ($types as $type)
                <li>
                    <a href="#" class="dropdown-item text-capitalize" wire:click.prevent="$set('selectedType', '{{ $type }}')">
                        {{ $type }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
