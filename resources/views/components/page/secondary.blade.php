@props([
    'heroTitle' => '',
    'heroSubtitle' => '',
    'heroImageUrl' => '',
    'sideNav' => '',
    'collection' => '',
])
<x-app>

    <x-layout.hero
        heroTitle="{{ $heroTitle }}"
        heroSubtitle="{{ $heroSubtitle }}"
        heroImageUrl="{{ $heroImageUrl }}"
    />

    <div class="mx-4 md:ml-24 md:mr-0" x-data="{ view: 'load' }">
        <div class="grid md:grid-cols-12 gap-8">

            {{-- Main --}}
            <div class="order-2 md:col-span-8 md:order-1">
                {{ $slot }}
            </div>

            {{-- Side Nav --}}
            <div class="order-1 md:col-span-4 md:order-2">
                <nav class="flex flex-col bg-gray-200 divide-y divide-gray-300 sticky top-0">
                    {{ $sideNav }}
                </nav>
            </div>

        </div>
    </div>

</x-app>