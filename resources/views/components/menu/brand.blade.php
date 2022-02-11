@if ($menu)
    <nav>
        <ul class="px-4 py-2 hidden lg:flex justify-end space-x-4 bg-brand-blue text-label-light-reverse">
            @foreach ($menu->items as $item)
                <li>
                    {{-- {{ dd($item) }} --}}
                    <x-nav.tertiary.link href="{{ route('page.show', $item->instance()) }}">
                        {{ $item->instance()->title }}
                    </x-nav.tertiary.link>
                </li>
            @endforeach
        </ul>
    </nav>
@endif
