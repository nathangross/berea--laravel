@props(['page' => $page, 'theme' => $theme])
<div class="flex items-center space-x-4 xl:space-x-6 2xl:space-x-8 ">
    {{-- Navigation - Primary --- config.php --}}
    @foreach ($page->navigation->primary as $item)
        @if ($loop->index < 4)
            <x-nav.primary.link href="{{ $item->slug }}" :theme="$theme">
                {{ $item->title }}
            </x-nav.primary.link>
        @endif
    @endforeach
</div>