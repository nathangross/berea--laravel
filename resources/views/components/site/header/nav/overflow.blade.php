@props(['page' => $page, 'theme' => $theme])
{{-- Overflow Menu --}}
<div x-data="{ overflow: false }" class="relative hidden lg:flex items-center">
    <x-ui.button.icon.reverse :theme="$theme" x-show="!overflow" x-on:click="overflow = true">more_horiz</x-ui.button.icon.reverse>
    <x-ui.button.icon.reverse :theme="$theme" x-show="overflow" x-on:click="overflow = false">close</x-ui.button.icon.reverse>
    <div x-show="overflow" x-on:click.outside="overflow = false"
        class="absolute flex flex-col bg-brand-blue rounded px-4 py-2 top-16">

        {{-- Navigation - Primary --- config.php --}}
        @foreach ($page->navigation->primary as $item)
            @if ($loop->index >= 4)
                <x-nav.primary.link href="{{ $item->slug }}" :theme="$theme">
                    {{ $item->title }}
                </x-nav.primary.link>
            @endif
        @endforeach

    </div>
</div>