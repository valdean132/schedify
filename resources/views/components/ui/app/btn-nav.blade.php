<a wire:navigate href="{{ $href ?? '' }}" 
    @class([
        'btn-navbar d-flex align-items-center gap-2 px-2 rounded-3 border fs-7 fw-medium text-decoration-none text-color-2 tr-1', 
        'active' => $active
    ])
    data-bs-dismiss="{{ $dismiss }}" data-bs-target="{{ $target }}"    
>
    {{ $slot }}
</a>