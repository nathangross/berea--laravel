<nav class="px-4 py-2 hidden lg:flex justify-end space-x-4 ">
    {{-- Navigation - Brand --- config.php --}}
    @foreach ($menu->items as $item)
        <x-nav.tertiary.link href="{{ $item->slug }}">
            {{ $item->instance()->title }}
        </x-nav.tertiary.link>
    @endforeach
</nav>