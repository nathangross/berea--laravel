@props(['icon' => ''])
<div
    {{ $attributes }}
    class="text-sm font-bold uppercase text-label-light-secondary p-1 px-6 bg-black bg-opacity-5 flex flex-row items-center space-x-1"
>
    <div>
        <x-ui.icons.material class="text-lg">{{ $icon }}</x-ui.icons.material>
    </div>
    <div>
        {{ $slot }}
    </div>
</div>