@props([
    'heroTitle' => '',
    'heroSubtitle' => '',
    'heroImageUrl' => ''
])
<div
    class="bg-cover bg-center aspect-w-16 aspect-h-9"
    style="
        background-image: linear-gradient(0deg,
        rgba(0, 0, 0, 0.5),
        rgba(0, 0, 0, 0.5)),
        url('/assets/images/{{ $heroImageUrl }}')
    ">
    <div class="p-4 sm:p-8 md:p-12 lg:p-24 flex flex-col justify-end">
        <h1 class="text-4xl md:text-6xl font-serif text-white order-2">
            {{ $heroTitle }}
        </h1>
        @if ($heroSubtitle)
            <h2 class="font-bold uppercase text-white order-1">
                {{ $heroSubtitle }}
            </h2>
        @endif

    </div>
</div>