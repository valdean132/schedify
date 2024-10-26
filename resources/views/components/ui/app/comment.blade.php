<div class="comment-single mb-1 w-100 border tr-1 rounded-2 p-3 d-flex">
    <div>
        <div class="rounded-circle shadow-sm me-2 bg-ter d-flex align-items-center justify-content-center text-color-3 fs-8" style="width: 30px; height: 30px;">1</div>
    </div>
    <div class="" style="width: calc(100% - (30px + .5rem))">
        <div class="d-flex justify-content-between align-items-center mb-1 w-100">
            <span class="fs-9 text-color-3">Ontem 12:17 AM</span>
            <div class="btns-options">
                <div data-bs-toggle="tooltip" data-bs-title="Opções" data-bs-placement="top">
                    <button class="btn-options btn p-1 text-color-3 lh-1"
                        data-bs-toggle="dropdown" 
                        type="button"
                        role="button" 
                        aria-expanded="false"
                    ><x-phosphor-dots-three-outline-light width="20" /></button>
                    <ul class="dropdown-menu bg-sec shadow border border-color p-2">
                        <li>
                            <button type="button" 
                                class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2 px-2"
                                data-bs-toggle="modal"
                                data-bs-target="#modalComment"
                            >
                                <x-fluentui-text-bullet-list-square-edit-20-o width="20" class="lh-1" />&nbsp;Editar
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-color-2 px-2">
                                <x-fluentui-copy-20-o width="20" class="lh-1" />&nbsp;Copiar texto
                            </button>
                        </li>
                        <li class="dropdown-divider border-color"></li>
                        <li>
                            <button type="button" 
                                class="dropdown-item btn-option bg-sec rounded-2 tr-1 text-red-300 px-2 remove"
                                data-bs-toggle="modal"
                                data-bs-target="#modalRemove"
                            >
                                <x-fluentui-delete-20-o width="20" class="lh-1" />&nbsp;Excluir
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100">
            <div class="text-color-2 fs-8 fw-normal">Um breve comentario que se deve ser falado conforme o que foi escrito e que deve ser quardado vamos estender mais um pouco para ver como fica</div>
            <div class="mw-100 d-flex gap-2 overflow-x-auto">
                <div class="file-single rounded-3 overflow-hidden bg-ter position-relative cursor-pointer mt-3 mb-2" style="width: 100px; min-width: 100px; height: 100px">
                    <img src="https://images.pexels.com/lib/api/pexels-white.png" class="object-fit-cover h-100" alt="">
                    <button class="w-100 h-100 position-absolute bg-ter top-0 start-0 opacity-0 text-color-1 cursor-pointer border-0 tr-1">
                        <x-phosphor-eye width="30" />
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>