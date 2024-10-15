<div class="siderbar px-3 py-4 d-flex flex-column gap-4">
    <x-ui.logo href="/app" class="align-items-center ps-2" fs="4" size="30" />
    
    <x-ui.app.btn-profile />

    <x-ui.app.nav>
        <x-ui.app.btn-nav class="active" href="">
            <x-phosphor-house-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Home</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="tasks">
            <x-phosphor-list-plus-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Tarefas</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="calendar">
            <x-phosphor-calendar-dots-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Calendário</p>
        </x-ui.app.btn-nav>
    </x-ui.app.nav>
    
    <div class="rounded-3 flex-fill"></div>

    <x-ui.app.nav>
        <x-ui.app.btn-nav href="settings">
            <x-phosphor-gear-six-thin class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Configurações</p>
        </x-ui.app.btn-nav>

        <x-ui.app.btn-nav href="help">
            <x-phosphor-info class="text-color-1" width="20" />
            <p class="m-0 flex-fill">Help</p>
        </x-ui.app.btn-nav>
    </x-ui.app.nav>

    <x-ui.logout />
</div>