<div class="main-content d-flex flex-column bg-sec rounded-3 overflow-hidden">
    <div class="w-100 p-3 border-bottom border-color d-flex align-items-center">
        <a class="btn btn-main p-1 lh-1" href="{{ url()->previous() }}" wire:navigate data-bs-toggle="tooltip" 
            data-bs-title="Voltar a página anterior" 
            data-bs-placement="bottom">
            <x-fluentui-chevron-left-24 width="25" />
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/app/tasks" wire:navegate data-bs-toggle="tooltip" 
            data-bs-title="Visualizar todas as terafas" 
            data-bs-placement="bottom" 
            class="text-color-sec text-decoration-none">Tarefas</a>
        &nbsp;<span class="text-secondary">/</span>&nbsp;
        <p class="text-color-2 mb-0">Titulo da página</p>
    </div>

    <div class="w-100 flex-fill d-flex overflow-y-auto position-relative">
        <div class="w-100 px-4 pt-3 overflow-y-auto text-color-1 mt-5">
            <form action="">
                <div class="mb-3">
                    <div class="input-group input-task">
                        <textarea type="text" 
                            class="form-control form-control-lg fs-5 bg-sec border-0 text-color-1 tr-1" 
                            required 
                            id="title" 
                            placeholder="Nome da Tarefa">Título da página</textarea>
                    </div>
                    <div class="input-group input-task">
                        <textarea type="text" 
                            class="form-control form-control-lg fs-7 bg-sec border-0 text-color-2 tr-1" 
                            required 
                            id="description" 
                            placeholder="Descrição"
                            rows="auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab nemo a reprehenderit mollitia itaque quod aliquid magni aliquam modi deserunt temporibus, autem facere voluptatum fuga ducimus. Libero quia quae dolorum.</textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <div data-bs-toggle="tooltip" data-bs-title="Adicionar tarefa" data-bs-placement="top">
                        <button type="button" class="btn btn-main lh-1">Atualizar&nbsp;<x-phosphor-paper-plane-right-fill width="20" class="text-color-1" /></button>
                    </div>
                </div>
            </form>
            <div class="w-100 mt-4 border-top border-color">
                <div class="w-100 py-2 ps-2 border-bottom border-color d-flex gap-1 align-items-center">
                    <span class="text-color-2 lh-1"><x-fluentui-chevron-right-24-o width="20" /></span>
                    <h4 class="fs-7 text-color-2 fw-medium mb-0">Comentários&nbsp;<span class="text-color-3 fw-normal">3</span></h4>
                </div>
                <div class="w-100 pt-2">
                    <div class="text-color-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illum obcaecati ab, odit impedit qui perferendis expedita totam dignissimos ipsum reprehenderit error adipisci quas nihil fugit cumque autem quidem distinctio.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illum obcaecati ab, odit impedit qui perferendis expedita totam dignissimos ipsum reprehenderit error adipisci quas nihil fugit cumque autem quidem distinctio.
                        

                    </div>
                    <div class="w-100 bg-sec position-sticky bottom-0 pb-3 pt-1">
                        <button class="btn-comment btn w-100 bg-sec d-flex justify-content-between fs-8 border border-color text-color-3 px-3">
                            Comentar <x-fluentui-comment-multiple-24-o width="20" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 position-absolute top-0 start-0 bg-ter p-4 py-2 border-bottom border-color d-flex gap-2">
            <div class="" data-bs-toggle="tooltip" data-bs-title="Informe o tipo da tarefa" data-bs-placement="top">
                <button class="btn-option border border-color rounded-2 bg-sec text-color-2 lh-1 p-2 tr-1"
                    data-bs-toggle="dropdown" 
                    type="button"
                    role="button" 
                    aria-expanded="false"
                >
                    Informe tipo da tarefa <x-fluentui-chevron-down-24-o width="20" />
                </button>
                <ul class="dropdown-menu bg-sec shadow border border-color p-0">
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Pessoal</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Trabalho</button></li>
                    <li class="dropdown-divider mb-0 border-color"></li>
                    <div class="input-group p-2">
                        <input type="text" class="form-control fs-6 bg-pry border-color text-color-1" placeholder="+ Adicione novo tipo">
                        <button class="input-group-text btn-main tr-1 text-color-2 border-0"><x-phosphor-paper-plane-right-fill width="20" /></button>
                    </div>
                </ul>
            </div>
            <div class="" data-bs-toggle="tooltip" data-bs-title="Informe a recorrência" data-bs-placement="top">
                <button class="btn-option border border-color rounded-2 bg-sec text-color-2 lh-1 p-2 tr-1"
                    data-bs-toggle="dropdown" 
                    type="button"
                    role="button" 
                    aria-expanded="false"
                >
                    <x-fluentui-calendar-clock-20-o width="20" />
                </button>
                <ul class="dropdown-menu bg-sec shadow border border-color p-0">
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Pontual</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Periódico</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Diário</button></li>
                </ul>
            </div>
            <div class="" data-bs-toggle="tooltip" data-bs-title="Informe os dias da semana" data-bs-placement="top">
                <button class="btn-option border border-color rounded-2 bg-sec text-color-2 lh-1 p-2 tr-1"
                    data-bs-toggle="dropdown" 
                    type="button"
                    role="button" 
                    aria-expanded="false"
                >
                    <x-fluentui-calendar-week-numbers-20-o width="20" />
                </button>
                <ul class="dropdown-menu bg-sec shadow border border-color p-0">
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Segunda-feira</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Terça-feira</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Quarta-feira</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Quinta-feira</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Sexta-feira</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Sábado</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Domingo</button></li>
                </ul>
            </div>
            <div class="" data-bs-toggle="tooltip" data-bs-title="Informe a data de inicio e fim da tarefa" data-bs-placement="top">
                <button class="btn-option border border-color rounded-2 bg-sec text-color-2 lh-1 p-2 tr-1"
                    data-bs-toggle="dropdown" 
                    type="button"
                    role="button" 
                    aria-expanded="false"
                >
                    <x-fluentui-calendar-ltr-20-o width="20" />
                </button>
                <div class="dropdown-menu bg-sec shadow border border-color p-2 input-calendar">
                    <div>
                        <label for="inicio" class="mb-1 fs-7 text-secondary fw-medium">Início</label>
                        <input type="date" class="form-control fs-6 bg-sec border-color text-color-1" name="" id="inicio">
                    </div>
                    <div class="mt-2">
                        <label for="fim" class="mb-1 fs-7 text-secondary fw-medium">Fim</label>
                        <input type="date" class="form-control fs-6 bg-sec border-color text-color-1" name="" id="fim">
                    </div>
                </div>
            </div>
            <div class="" data-bs-toggle="tooltip" data-bs-title="Informe a prioridade" data-bs-placement="top">
                <button class="btn-option border border-color rounded-2 bg-sec text-color-2 lh-1 p-2 tr-1"
                    data-bs-toggle="dropdown" 
                    type="button"
                    role="button" 
                    aria-expanded="false"
                >
                    <x-phosphor-flag width="20" />
                </button>
                <ul class="dropdown-menu bg-sec shadow border border-color p-0">
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Prioridade Baixa</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Prioridade Média</button></li>
                    <li><button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2">Prioridade Alta</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>


