<a {{ $attributes->except('class') }}
    class="font-serif text-xl lg:font-sans lg:font-bold lg:text-label-light-reverse=py-3 lg:border-b-2 lg:border-transparent lg:hover:border-action-light transition-all">
    {{ $slot }}
</a>
