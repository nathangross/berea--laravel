@props([
    'imageUrl' => 'http://via.placeholder.com/1500x750',
    'caption' => ''
])
<figure class="relative w-full">
    <img class="w-full h-auto"
        src="{{ $imageUrl }}">
    <figcaption class="absolute bottom-0 w-full text-lg text-white p-8 bg-black bg-opacity-50"
        style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%);">
        {{ $caption }}
    </figcaption>
</figure>