@props([
    'theme' => ''
])

<header class="w-full relative z-30 px-safe " x-data="{ open: false }">
    <div class="bg-brand-blue text-label-light-reverse">
        <x-menu.brand />
    </div>
    <div class="
        @if ($theme == 'dark')
            bg-black bg-opacity-85
        @else
            text-label-light-primary
        @endif
        "
    >
    {{-- <div class="bg-white bg-opacity-85"> --}}
        <div class="relative px-4 flex items-center justify-between ">
            <nav class="flex items-center space-x-4 xl:space-x-6 2xl:space-x-8 py-4">
                <a class="" href="/">
                    @if ($theme == 'dark')
                        <x-brand.wordmark.white />
                    @else
                        <x-brand.wordmark.blue />
                    @endif

                </a>
                <div class="hidden lg:flex space-x-4 xl:space-x-6 2xl:space-x-8">
                    {{-- <x-site.header.nav.actions /> --}}
                    {{-- <x-site.header.nav.primary :theme="$theme" /> --}}
                    {{-- <x-site.header.nav.overflow :theme="$theme"/> --}}
                </div>
            </nav>
            <div class="lg:hidden space-x-4">
                <x-ui.button.icon.primary x-on:click="open = ! open">
                    menu
                </x-ui.button.icon.primary>
            </div>
        </div>
    </div>
    {{-- <x-site.header.nav.mobile /> --}}
</header>