@props([
    'isActive' => false
])
<a
    {{ $attributes }}
    class="p-4 px-6 text-lg font-bold text-label-light-primary transition-color duration-300 hover:bg-black hover:bg-opacity-10
    {{ $isActive == true ? 'text-red-500' : '' }}"
>
    {{ $slot }}
</a>