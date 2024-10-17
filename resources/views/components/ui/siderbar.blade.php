<div class="siderbar px-3 py-4 d-flex flex-column gap-4 h-100">
    <x-ui.logo href="/app" class="align-items-center ps-2" fs="4" size="30" />
    
    <x-ui.app.add-tasks />

    <x-ui.app.nav>
        <x-ui.app.btn-nav href="/app" active="{{ $active == '' ? true : false }}" >
            <x-phosphor-house-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Home</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="/app/tasks" active="{{ $active == 'tasks' ? true : false }}" >
            <x-phosphor-list-plus-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Tarefas</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="/app/calendar" active="{{ $active == 'calendar' ? true : false }}" >
            <x-phosphor-calendar-dots-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Calendário</p>
        </x-ui.app.btn-nav>
    </x-ui.app.nav>
    
    <div class="rounded-3 flex-fill"></div>

    <x-ui.app.nav>
        <x-ui.app.btn-nav href="/app/settings" active="{{ $active == 'settings' ? true : false }}" >
            <x-phosphor-gear-six-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Configurações</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="/app/help" active="{{ $active == 'help' ? true : false }}" >
            <x-phosphor-info class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Ajuda</p>
        </x-ui.app.btn-nav>
    </x-ui.app.nav>

    <x-ui.app.btn-profile />

    <x-ui.logout />

</div>