@if ($menu)
    <ul class="flex flex-col lg:flex-row lg:space-x-2">
        @foreach ($menu->items as $item)
            <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                <x-nav.tertiary.link href="{{ route('page.show', $item->instance()) }}">
                    {!! $item->instance()->title !!}
                </x-nav.tertiary.link>
            </li>
        @endforeach
    </ul>
@endif
