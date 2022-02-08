@props([
    'text' => 'Default Text',
    'href' => ''
])
<h3 class="font-serif text-3xl flex items-center mb-4">
    @if ($href)<a href="{{ $href }}">@endif
    {{ $text }}
    @if ($href)<x-ui.icons.chevron-right class="text-action-light" /></a>@endif
</h3>