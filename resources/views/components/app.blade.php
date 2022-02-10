{{-- @props(['theme' => '']) --}}
<!DOCTYPE html>
<html lang="en">
<x-site.head />

<body class="text-gray-900 font-sans antialiase">
    <x-site.header />
    {{ $slot }}
    <x-site.footer />
</body>

</html>
