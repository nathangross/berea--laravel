<x-app>
    <div class="aspect-video overflow-hidden">
        <div class="w-full h-full bg-cover" style="background-image: url('{{ $post->acf->image('hero_image')->url }}')">
            <div class="flex flex-col h-full w-full justify-end bg-gradient-to-t from-black/50 p-8">
                <div class="prose prose-invert prose-lg">
                    <h2 class="">
                        {{ $post->acf->text('hero_title') }}
                    </h2>
                    <div class="">
                        {{ $post->acf->text('hero_body') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4">
        {!! $post->content !!}
    </div>
</x-app>
