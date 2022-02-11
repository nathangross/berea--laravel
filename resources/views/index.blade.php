<x-app>
    <div class="grid grid-cols-1 gap-4">
        {{-- @foreach ($posts as $post) --}}
        <h1 class="font-bold text-2xl">
            {{ $post->post_title }}
        </h1>
        {!! $post->content !!}
        {{-- @endforeach --}}
    </div>
</x-app>
