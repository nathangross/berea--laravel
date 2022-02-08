<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <x-site.head :page="$page"/>
    <body class="text-gray-900 font-sans antialiase">
        <x-site.header :page="$page" theme="dark" />
            {{ $slot }}
        <x-site.footer :page="$page" />
    </body>
</html>
