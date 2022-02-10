<button {{ $attributes }}
    class="icon-button 
    bg-action-light text-label-light-reverse
    hover:bg-action-light-hover transition-colors">
    <span class="material-icons ">
        {{ $slot }}
    </span>
</button>