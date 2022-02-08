@props([
    'imageUrl' => '',
    'caption' => ''
])
<section {{ $attributes }}>
    @if ($imageUrl)
        <x-ui.images.caption imageUrl="{{ $imageUrl }}" caption="{{ $caption }}"  />
    @endif
    <x-layout.inner class="py-8 sm:py-12 md:py-16 lg:py-24 xl:py-32">
        {{ $slot }}
    </x-layout.inner>
</section>