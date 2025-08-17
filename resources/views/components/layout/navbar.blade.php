<nav class="navbar navbar-expand-lg pokemon-color shadow mb-5 rounded-bottom-3">
    <div class="container-fluid">
        <a href="/">
            <img class="navbar-icon me-3" src="/International_Pokémon_logo.svg.png" alt="Pokémon Logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">                
            </span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                
                <li class="nav-item">
                    <a class="nav-link text-white navbar-text" aria-current="page" href="/">Pokédex</a>
                </li>
                
                <li class="nav-item d-flex align-items-center me-1">
                    <livewire:pokemon.pokemon-filter />
                </li>
                
                <li class="nav-item d-flex align-items-center">
                    <livewire:pokemon.pokemon-generation />
                </li>
            </ul>
            
            <div class="d-flex align-items-center">
                <livewire:pokemon.pokemon-searched />   
            </div>
        </div>
    </div>
</nav>
