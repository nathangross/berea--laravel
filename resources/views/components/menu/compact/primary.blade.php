@if ($menu)
    <ul class="flex flex-col space-y-6 my-6">
        @foreach ($menu->items as $item)
            <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                <x-nav.primary.link href="{{ route('page.show', $item->instance()) }}">
                    {!! $item->instance()->title !!}
                </x-nav.primary.link>
            </li>
        @endforeach
    </ul>
@endif
