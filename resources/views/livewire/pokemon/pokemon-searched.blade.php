<div>
    <form class="d-flex" role="search" wire:submit.prevent="filterPokemons">
        <input type="search" wire:model="search" class="form-control me-2 border-thick" placeholder="Search Pokémon" aria-label="Search">
        <button type="submit" class="btn pokemon-color-btn border-thick fw-semibold">Search</button>
    </form>
</div>
