<div class="main-content d-flex flex-column bg-sec rounded-3 p-4">
    <x-ui.app.title-page title="Suas Tarefas" subtitle="# 20 tarefas" />

    <div class="w-100 overflow-y-auto">
        <x-ui.app.group-tasks title="Pessoal">
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
        </x-ui.app.group-tasks>
        <x-ui.app.group-tasks title="Trabalho">
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
            <x-ui.app.card-task class="limit-w flex-grow-1" truncate="text-truncate" footer={{false}} />
        </x-ui.app.group-tasks>
    </div>
</div>
