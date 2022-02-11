<x-app>
    <div class="grid grid-cols-1 gap-4">
        {{-- {{ dd($page) }} --}}
        <h1 class="font-bold text-2xl">
            {{ $page->post_title }}
        </h1>
        {!! $page->content !!}
    </div>
</x-app>
