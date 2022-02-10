@if ($menu)
    <ul class="flex flex-col lg:flex-row lg:space-x-2">
        @foreach ($menu->items as $item)
            <li class="my-menu-item {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                <x-nav.tertiary.link href="{{ $item->slug }}">
                    {!! $item->instance()->title !!}
                </x-nav.tertiary.link>
            </li>
        @endforeach
    </ul>
@endif
