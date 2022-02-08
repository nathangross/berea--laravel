<nav class="px-4 py-2 hidden lg:flex justify-end space-x-4 ">
    {{-- Navigation - Brand --- config.php --}}
    @foreach ($page->navigation->brand as $item)
        <x-nav.tertiary.link href="{{ $item->slug }}">
            {{ $item->title }}
        </x-nav.tertiary.link>
    @endforeach
</nav>