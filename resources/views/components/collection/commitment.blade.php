<x-page.secondary
    heroTitle="{{ $page->title }}"
    heroSubtitle="The Great Commitments"
    heroImageUrl="the-great-commitments/{{ $page->heroImageUrl }}"

>
    <div class=" ">
        <x-slot name="sideNav">
            <x-nav.secondary.link
                href=""
                x-on:click.prevent="view = 'load'"
            >
                The Commitment
            </x-nav.secondary.link>
            <x-nav.secondary.section>Learn more</x-nav.secondary.section>
            @foreach ($page->secondaryPages as $item)
                <x-nav.secondary.link
                    href=""
                    {{-- isActive="true" --}}
                    {{-- ::class="[view === 'Past and Present'] ? 'p-4 px-6 text-lg font-bold text-label-light-primary transition-color duration-300 hover:bg-black hover:bg-opacity-10' : 'text-blue-500' " --}}
                    x-on:click.prevent="view = '{{ $item['title'] }}'"
                >
                    {{ $item['title'] }}
                </x-nav.secondary.link>
            @endforeach
        </x-slot>

        <main class="py-8 sm:py-12 md:py-16 lg:py-24 xl:py-32">

            <div class="text-brand-blue prose prose-2xl">
                <p>{{ $page->commitment }}</p>
            </div>

            <x-layout.prose>

                <figure class="space-y-8">
                    <blockquote class="text-xl">
                        {{ $page->quote }}
                        <figcaption>
                            {{ $page->quotee }}
                        </figcaption>
                    </blockquote>
                </figure>

                <div x-show="view === 'load' ">
                    {!! $page !!}
                </div>

                <div x-show="view === 'Past and Present' ">
                    @include('the-great-commitments/educational-opportunity/past-and-present')
                </div>

                <div x-show="view === 'Moving Forward' ">
                    @include('the-great-commitments/educational-opportunity/moving-forward')
                </div>
                <div x-show="view === 'Julie Jent' ">
                    @include('the-great-commitments/educational-opportunity/julie-jent')
                </div>

                <div x-show="view === 'Shanita Jackson' ">
                    @include('the-great-commitments/educational-opportunity/shanita-jackson')
                </div>

            </x-layout.prose>
        </main>

    </div>

</x-page.secondary>