<div class="position-relative {{ $class ?? '' }}">
    <div class="single-task p-3 bg-sec border border-solid border-color rounded-3 shadow user-select-none tr-1">
        <a href="" class="position-absolute top-0 start-0 w-100 h-100"></a>
        <div class="w-100">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="priority py-1 px-2 rounded-4 bd-green-300">
                    <p class="m-0 fs-9 text-green-900">Prioridade baixa</p>
                </div>
                {{-- 
                    <div class="priority py-1 px-2 rounded-4 bd-yellow-200">
                        <p class="m-0 fs-9 text-yellow-900">Prioridade média</p>
                    </div>

                    <div class="priority py-1 px-2 rounded-4 bd-red-300">
                        <p class="m-0 fs-9 text-red-900">Prioridade alta</p>
                    </div>
                --}}
                <x-phosphor-arrow-up-right width="20" class="text-white-50" />
            </div>
            <div class="w-100">
                <h6 class="text-color-1 fs-6 fw-normal mb-0 {{ $truncate ?? '' }}">Um titulo de emproviso um teste</h6>
                <p class="fs-8 text-white-50 fw-light text-truncate mb-0">Uma breve descrição para o que está por vir Um titulo de emproviso para o proximo que vira</p>
            </div>
            @if ($footer)
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <x-phosphor-dots-six-vertical width="20" class="text-white-50" />
                    <p class="fs-8 text-white-50 fw-medium m-0 d-flex align-items-center"><x-phosphor-star-fill width="13" class="text-color-main" />&nbsp;&nbsp;Diário</p>
                    {{-- 
                        <p class="fs-8 text-white-50 fw-medium m-0 d-flex align-items-center"><x-phosphor-cursor-click-fill width="13" class="text-color-main" />&nbsp;&nbsp;Pontual</p>

                        <p class="fs-8 text-white-50 fw-medium m-0 d-flex align-items-center"><x-phosphor-clock-countdown-fill width="13" class="text-color-main" />&nbsp;&nbsp;Periódico</p>
                    --}}
                </div>
            @endif
        </div>
    </div>
</div>