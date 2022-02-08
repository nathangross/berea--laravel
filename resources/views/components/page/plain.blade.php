<x-app

>

    <x-layout.hero
        heroTitle="{{ $page->title }}"
        heroSubtitle="{{ $page->subtitle }}"
        heroImageUrl="{{ $page->image }}"
    />

    <x-layout.inner>
        <x-layout.prose>
            @yield('content')
        </x-layout.prose>
    </x-layout.inner>

</x-app>