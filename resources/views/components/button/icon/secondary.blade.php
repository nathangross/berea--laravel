<button {{ $attributes }}
    class="icon-button 
    bg-black bg-opacity-10 text-label-light-primary
    hover:text-action-light transition-colors">
    <span class="material-icons ">
        {{ $slot }}
    </span>
</button>