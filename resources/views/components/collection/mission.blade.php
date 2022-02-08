<x-layout.section :imageUrl="$mission->imageUrl" :imageCaption="$mission->title">
    <x-layout.prose>
       {!! $mission !!}
    </x-layout.prose>
</x-layout.section>