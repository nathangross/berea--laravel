@props(['theme' => ''])
<a
    {{-- href="{{ $href }}"  --}}
    {{ $attributes }}
    class="font-serif text-xl
    @if ($theme == 'dark')
        lg:text-label-light-reverse
    @else
        lg:text-label-light-primary
    @endif
    lg:font-sans lg:font-bold
    py-3
    lg:border-b-2 lg:border-transparent lg:hover:border-action-light transition-all"
>
    {{ $slot }}
</a>