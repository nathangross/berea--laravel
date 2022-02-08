@props(['href' => '#'])
<a 
    href="{{ $href }}" 
    class="flex items-center text-sm h-12 lg:h-auto
    {{-- adding left padding only since material icon has some 'visual' padding --}}
    lg:pl-3 lg:rounded
    lg:hover:bg-black lg:hover:bg-opacity-10 lg:transition-colors"
>
    {{ $slot }}
    <span class="material-icons text-action-light">
        chevron_right
    </span>
</a>
