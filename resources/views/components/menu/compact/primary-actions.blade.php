@if ($menu)
    <ul class="flex flex-col space-y-2">
        @foreach ($menu->items as $item)
            {{-- First button should be primary --}}
            @if ($loop->index < 1)
                <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                    <a class="button button--primary w-full" href="{{ route('page.show', $item->instance()) }}">
                        {{ $item->instance()->title }}
                    </a>
                </li>
            @endif

            {{-- All other buttons should be tertiary --}}
            @if ($loop->index >= 1)
                <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                    <a class="button button--tertiary w-full" href="{{ route('page.show', $item->instance()) }}">
                        {{ $item->instance()->title }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
@endif
