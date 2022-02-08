<div class="flex flex-col space-y-2">
    {{-- Navigation - Actions --- config.php --}}
    @foreach ($page->navigation->actions as $item)
        <a href="{{ $item->slug }}" class="button
            @if ($item->type === 'primary')
                button button--primary
            @elseif ($item->type === 'tertiary')
                button button--tertiary
            @endif
        ">
            {{ $item->label }}
        </a>
    @endforeach
</div>