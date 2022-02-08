<div class="flex flex-col">
    {{-- Navigation - Primary --- config.php --}}
    @foreach ($page->navigation->primary as $item)
        <x-nav.primary.link href="{{ $item->slug }}">
            {{ $item->title }}
        </x-nav.primary.link>
    @endforeach
</div>