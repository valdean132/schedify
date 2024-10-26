<div class="group-tasks w-100 mb-3">
    <div class="title-group mb-1 d-flex">
        <x-phosphor-hash-light width="20" class="text-white-50" />&nbsp;<h3 class="text-color-2 fw-light fs-5 mb-0">{{ $title }}</h3>
    </div>
    <div class="d-flex flex-wrap gap-2 w-100 p-2">
        {{ $slot }}
    </div>
</div>