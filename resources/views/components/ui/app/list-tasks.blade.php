<div class="list-tasks-today h-100 d-flex flex-column border border-color border-dashed rounded-3 p-2">
    <div @class([
        'w-100 rounded-2 p-2 bg-gradient',
        $bgTitle ?? 'bg-pry'
        ])
    >
        <h5 class="fs-7 text-center text-color-1 m-0">{{ $title }}</h5>
    </div>
    <div class="list-single-tasks w-100 mt-3 flex-fill" x-sort.ghost x-sort:group="{{ $group }}">
        {{ $slot }}
    </div>
</div>