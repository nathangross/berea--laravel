@props(['theme' => ''])
<button {{ $attributes }}
    class="icon-button
    @if ($theme == 'dark')
    bg-background-light-reverse text-action-light hover:bg-action-light-hover
    @else
    bg-background-dark-reverse text-action-light hover:bg-action-light-hover
    @endif


    transition-colors
    ">
    <span class="material-icons ">
        {{ $slot }}
    </span>
</button>