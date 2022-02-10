@if ($menu)
    <ul class="flex items-center space-x-4 xl:space-x-6 2xl:space-x-8">
        @foreach ($menu->items as $item)
            @if ($loop->index < 1)
                <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                    <a class="button button--primary" href="{{ $item->slug }}">
                        {{ $item->instance()->title }}
                    </a>
                </li>
            @endif
            @if ($loop->index >= 1)
                <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                    <a class="button button--tertiary" href="{{ $item->slug }}">
                        {{ $item->instance()->title }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
@endif
