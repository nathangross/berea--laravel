<header class="w-full relative z-30 px-safe " x-data="{ open: false }">

    {{-- Brand (Tertiary) Navigation --}}
    <x-menu.brand />

    <div class="relative px-4 flex items-center justify-between">
        <nav class="flex items-center space-x-4 xl:space-x-6 2xl:space-x-8 py-4">

            {{-- Berea Logo --}}
            <a class="" href="{{ route('home') }}">
                <x-brand.wordmark.blue />
                <span class="sr-only">
                    {{-- {{ $siteName }} --}}
                </span>
            </a>

            <div class="hidden lg:flex items-center space-x-4 xl:space-x-6 2xl:space-x-8">

                {{-- Call to Action Buttons --}}
                <x-menu.primary-actions />

                {{-- Primary Site Navigation --}}
                <x-menu.primary />

            </div>
        </nav>
        <div class="lg:hidden flex space-x-4">
            <x-button.icon.secondary x-on:click="open = ! open">menu</x-button.icon.secondary>
        </div>
    </div>

    {{-- Compact Navigation - for smaller screens --}}
    <nav x-show="open" x-on:click.outside="open = false"
        x-on:resize.window="open = window.outerWidth > 1024 ? false : open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-64"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-64" x-cloak
        class="absolute top-0 w-full h-screen  bg-brand-blue text-label-light-reverse">

        <div class="flex flex-col px-4">

            <div class="flex justify-between py-4">
                <a class="" href="{{ route('home') }}">
                    <x-brand.wordmark.white />
                    <span class="sr-only">
                        {{-- {{ $siteName }} --}}
                    </span>
                </a>
                <x-button.icon.reverse x-on:click="open= false">close</x-button.icon.reverse>
            </div>
            {{-- Call to Action Buttons --}}
            <x-menu.compact.primary-actions />

            {{-- Primary Site Navigation --}}
            <x-menu.compact.primary />
        </div>

        <div class="flex flex-col px-4 bg-black bg-opacity-10 h-full">
            {{-- Navigation - Brand --- config.php --}}
            <x-menu.compact.brand />
        </div>
    </nav>
</header>
