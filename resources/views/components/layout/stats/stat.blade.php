@props([
    'stat' => '',
    'label' => '',
    'description' => '',
])
<dl class="flex flex-col items-center text-center w-full p-8 space-y-4">
    <dt class="text-brand-blue text-4xl font-extrabold">
        {{ $stat }}
    </dt>
    <dd class="space-y-2">
        <p class="font-semibold">{{ $label }}</p>
        <p class="font-serif text-label-light-secondary">{{ $description }}</p>
    </dd>
</dl>