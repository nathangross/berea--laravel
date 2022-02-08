<div class="flex items-center space-x-4 xl:space-x-6 2xl:space-x-8">
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