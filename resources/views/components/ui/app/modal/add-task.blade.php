<div class="modal fade" 
    id="addTask" 
    tabindex="-1" 
    aria-labelledby="addTaskLabel" 
    aria-hidden="true"
    data-bs-backdrop="static"
>
    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni sint, vero voluptatem eius nisi distinctio reiciendis dolorem ab. Necessitatibus amet libero tempora enim provident sed dolor ex rem, ea id! --}}
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-pry shadow">
            <form action="">
                <div class="p-2">
                    <div class="input-group input-task">
                        <textarea type="text" 
                            class="form-control form-control-lg fs-6 bg-pry border-0 text-color-1" 
                            required 
                            id="title" 
                            placeholder="Nome da Tarefa"></textarea>
                    </div>
                    <div class="input-group input-task">
                        <textarea type="text" 
                            class="form-control form-control-lg fs-7 bg-pry border-0 text-color-2" 
                            required 
                            id="description" 
                            placeholder="Descrição"
                            rows="auto"></textarea>
                    </div>
                </div>

                <div class="mb-3 p-2 px-3">
                    <div class="border-bottom border-color mb-2">
                        <h6 class="fs-6 text-color-2 fw-normal mb-1 ms-2">Opções</h6>
                    </div>
                    <div class="input-group d-flex gap-2">
                        <div class="" data-bs-toggle="tooltip" data-bs-title="Informe a recorrência" data-bs-placement="top">
                            <button class="btn-option border border-color rounded-2 bg-pry text-color-2 lh-1 p-2 tr-1"
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
                            <button class="btn-option border border-color rounded-2 bg-pry text-color-2 lh-1 p-2 tr-1"
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
                            <button class="btn-option border border-color rounded-2 bg-pry text-color-2 lh-1 p-2 tr-1"
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
                            <button class="btn-option border border-color rounded-2 bg-pry text-color-2 lh-1 p-2 tr-1"
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
                
                <div class="modal-footer justify-content-between">
                    <div class="" data-bs-toggle="tooltip" data-bs-title="Informe o tipo da tarefa" data-bs-placement="top">
                        <button class="btn-option border border-color rounded-2 bg-pry text-color-2 lh-1 p-2 tr-1"
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
                    <div class="d-flex gap-2">
                        <div data-bs-toggle="tooltip" data-bs-title="Fechar modal" data-bs-placement="top">
                            <button type="button" class="btn btn-secondary lh-1 p-1" data-bs-dismiss="modal"><x-phosphor-x-light width="25" class="text-color-2" /></button>
                        </div>
                        <div data-bs-toggle="tooltip" data-bs-title="Adicionar tarefa" data-bs-placement="top">
                            <button type="button" class="btn btn-main lh-1 p-1"><x-phosphor-paper-plane-right-fill width="25" class="text-color-1" /></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>