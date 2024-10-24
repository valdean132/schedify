<div class="main-content d-flex flex-column bg-sec rounded-3 m-2 p-4">
    <x-ui.app.title-page title="Tarefas do Dia" subtitle="# 7 tarefas" />

    <div class="w-100 flex-fill d-flex gap-3 overflow-x-auto pb-2">
        <x-ui.app.list-tasks title="Tarefas (2)" bgTitle="bg-main">
            <x-ui.app.card-task />
            <x-ui.app.card-task />
        </x-ui.app.list-tasks>

        <x-ui.app.list-tasks title="Progresso (1)" bgTitle="bg-warning">
            <x-ui.app.card-task />
        </x-ui.app.list-tasks>

        <x-ui.app.list-tasks title="Concluído (4)" bgTitle="bg-success">
            <x-ui.app.card-task />
            <x-ui.app.card-task />
            <x-ui.app.card-task />
        </x-ui.app.list-tasks>
    </div>
</div>
