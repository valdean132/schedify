<div class="modal fade" 
    id="modalComment" 
    tabindex="-1" 
    aria-labelledby="modalComment" 
    aria-hidden="true"
    data-bs-backdrop="static"
>
    {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni sint, vero voluptatem eius nisi distinctio reiciendis dolorem ab. Necessitatibus amet libero tempora enim provident sed dolor ex rem, ea id! --}}
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-pry border border-color shadow">
            <form action="">
                <div class="p-2">
                    <div class="input-group input-comment">
                        <textarea type="text" 
                            class="form-control form-control-lg fs-7 bg-pry border-0 text-color-2" 
                            required 
                            id="description" 
                            placeholder="Comentar"
                            rows="auto"></textarea>
                    </div>
                </div>
                <div class="w-100 d-flex flex-column gap-2 my-1 px-3">
                    <div class="w-100 d-flex align-items-center gap-2 p-2 rounded-2 bg-sec">
                        <div data-bs-toggle="tooltip" data-bs-title="Remover anexo" data-bs-placement="top">
                            <button class="btn-options btn p-1 text-red-300 remove lh-1">
                                <x-fluentui-delete-20-o width="20" class="lh-1" />
                            </button>
                        </div>
                        <div class="text-truncate text-color-2 fs-7 fw-normal">o nome de um arquivo qualquer em vou colocar um nome maior pra ver se vai dá certo.html</div>
                        <div class="p-1">
                            <div class="spinner-border text-color-sec spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 d-flex align-items-center gap-2 p-2 rounded-2 bg-sec">
                        <div data-bs-toggle="tooltip" data-bs-title="Remover anexo" data-bs-placement="top">
                            <button class="btn-options btn p-1 text-red-300 remove lh-1">
                                <x-fluentui-delete-20-o width="20" class="lh-1" />
                            </button>
                        </div>
                        <div class="text-truncate text-color-2 fs-7 fw-normal">esse com um nome pequeno.html</div>
                        <div class="p-1">
                            <div class="spinner-border text-color-sec spinner-border-sm" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between border-0">
                    <div class="" data-bs-toggle="tooltip" data-bs-title="Anexar arquivo" data-bs-placement="top">
                        <input type="file" name="" id="fileComment" class="d-none">
                        <label for="fileComment" class="btn-option rounded-2 bg-pry text-color-2 lh-1 p-2 tr-1 cursor-pointer">
                            <x-tni-attach width="15" />
                        </label>
                    </div>
                    <div class="d-flex gap-2">
                        <div>
                            <button type="button" class="btn btn-secondary lh-1" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-main lh-1">Comentar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
