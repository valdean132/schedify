<header class="d-md-none d-flex justify-content-between align-items-center p-3">
    <button class="navbar-toggler" type="button" 
        data-bs-toggle="offcanvas" 
        data-bs-target="#siderbar"
        aria-controls="siderbar" >
        <x-phosphor-list-light width="30" class="text-color-1" />
    </button>

    <div class="d-flex align-items-center gap-2">
        <x-ui.app.add-tasks />

        <a wire:navigate href="/app/profile" class="profile d-flex align-items-center text-decoration-none tr-1" data-bs-toggle="tooltip" data-bs-title="Acesse seu perfil" data-bs-placement="bottom">
            <div class="d-flex justify-content-center align-items-center rounded-2 p-2 bg-sec">
                <x-phosphor-user width="25" class="text-color-2 " />
            </div>
        </a>
    </div>

</header>