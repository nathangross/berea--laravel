@if ($menu)
    <nav>
        <ul class="py-2  justify-end text-label-light-reverse">
            @foreach ($menu->items as $item)
                <li>
                    <x-nav.tertiary.link href="{{ route('page.show', $item->instance()) }}">
                        {{ $item->instance()->title }}
                    </x-nav.tertiary.link>
                </li>
            @endforeach
        </ul>
    </nav>
@endif
