<div class="siderbar offcanvas-md bg-pry offcanvas-start px-3 py-4 d-flex flex-column gap-4 h-100" id="siderbar" tabindex="-1">
    <div class="d-flex justify-content-between">
        <x-ui.logo href="/app" class="align-items-center ps-2" fs="4" size="30" />
        
        <button class="d-md-none border-0 bg-transparent" type="button" data-bs-dismiss="offcanvas" data-bs-target="#siderbar" aria-label="Close">
            <x-phosphor-x-light width="30" class="text-color-2" />
        </button>
    </div>

    <div class="d-none d-md-block">
        <x-ui.app.add-tasks />
    </div>

    <x-ui.app.nav>
        <x-ui.app.btn-nav href="/app" dismiss="offcanvas" target="#siderbar" active="{{ $active == '' ? true : false }}" >
            <x-phosphor-house-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Home</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="/app/tasks" dismiss="offcanvas" target="#siderbar" active="{{ $active == 'tasks' ? true : false }}" >
            <x-phosphor-list-plus-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Tarefas</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="/app/calendar" dismiss="offcanvas" target="#siderbar" active="{{ $active == 'calendar' ? true : false }}" >
            <x-phosphor-calendar-dots-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Calendário</p>
        </x-ui.app.btn-nav>
    </x-ui.app.nav>
    
    <div class="rounded-3 flex-fill"></div>

    <x-ui.app.nav>
        <x-ui.app.btn-nav href="/app/settings" dismiss="offcanvas" target="#siderbar" active="{{ $active == 'settings' ? true : false }}" >
            <x-phosphor-gear-six-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Configurações</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="/app/help" dismiss="offcanvas" target="#siderbar" active="{{ $active == 'help' ? true : false }}" >
            <x-phosphor-info class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Ajuda</p>
        </x-ui.app.btn-nav>
    </x-ui.app.nav>

    <div class="d-none d-md-block">
        <x-ui.app.btn-profile />
    </div>

    <x-ui.logout />

</div>