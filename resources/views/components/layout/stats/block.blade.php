@props(['title' => ''])

<div class="bg-gray-100 p-12 justify-center ">
    <div class="text-center">

        <h2 class="font-serif text-3xl mb-8">{{ $title }}</h2>
        <div class="flex flex-col lg:flex-row">
            {{ $slot }}
        </div>
    </div>
</div>