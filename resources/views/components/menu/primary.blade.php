@if ($menu)
    <ul class="flex items-center space-x-4 xl:space-x-6 2xl:space-x-8">
        @foreach ($menu->items as $item)
            {{-- TODO: #1 Make primary navigation overflow value configurable in theme --}}
            @if ($loop->index < 4)
                <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                    <x-nav.primary.link href="{{ $item->slug }}">
                        {!! $item->instance()->title !!}
                    </x-nav.primary.link>
                </li>
            @endif
        @endforeach
    </ul>

    <ul x-data="{ overflow: false }" class="relative hidden lg:flex">
        <x-button.icon.secondary x-show="!overflow" x-on:click="overflow = true">
            more_horiz
            <span class="sr-only">More</span>
        </x-button.icon.secondary>
        <x-button.icon.secondary x-show="overflow" x-on:click="overflow = false">
            close
            <span class="sr-only">Close</span>
        </x-button.icon.secondary>
        <li x-show="overflow" x-on:click.outside="overflow = false"
            class="absolute flex flex-col bg-gray-200 shadow-lg rounded px-4 py-2 top-16">

            {{-- Navigation - Primary --- config.php --}}
            @foreach ($menu->items as $item)
                @if ($loop->index >= 4)
                    <x-nav.primary.link href="{{ $item->slug }}">
                        {{ $item->instance()->title }}
                    </x-nav.primary.link>
                @endif
            @endforeach

        </li>
    </ul>
@endif
