<nav x-show="open" x-on:click.outside="open = false" x-on:resize.window="open = window.outerWidth > 1024 ? false : open"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-x-64"
    x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform translate-x-64" x-cloak
    class="absolute top-0 w-full h-screen  bg-brand-blue text-label-light-reverse">
    <div class="flex flex-col px-4">
        <div class="flex justify-between py-4">
            <a class="" href=""><x-brand.wordmark.white /></a>
            <x-ui.button.icon.reverse x-on:click="open= false">close</x-ui.button.icon.reverse>
        </div>
        <x-site.header.nav.mobile.actions :page="$page" />
        <x-site.header.nav.mobile.primary :page="$page" />
    </div>

    <div class="flex flex-col px-4 bg-black bg-opacity-10 h-full">
        {{-- Navigation - Brand --- config.php --}}
        @foreach ($page->navigation->brand as $item)
        <x-nav.tertiary.link href="{{ $item->slug }}">
            {{ $item->title }}
        </x-nav.tertiary.link>
        @endforeach
    </div>
</nav>