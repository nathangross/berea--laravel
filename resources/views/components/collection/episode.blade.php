<div class="grid xl:grid-cols-2 gap-8 lg:gap-16">
    @if ($episode->published === true)
        <div class="aspect-w-16 aspect-h-9">
            <iframe src="https://www.youtube.com/embed/{{ $episode->videoId }}?controls=0" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
    @else
        <div class="aspect-w-16 aspect-h-9 overflow-hidden">
            <img class="w-full h-auto" src="assets/images/episodes/{{ $episode->portrait }}" alt="">
        </div>
    @endif
    <div itemscope itemtype="https://schema.org/Person" class="space-y-8">
        <div class="space-y-1">
            <div class="text-label-light-secondary text-sm tracking-wide uppercase font-bold">A conversation with</div>
            <h3 itemprop="name" class="text-4xl font-extrabold uppercase text-label-light-primary">{{ $episode->guest }}</h3>
            <div itemprop="hasOccupation" itemscope itemtype="https://schema.org/Occupation">
                <span itemprop="name" class="text-lg text-label-light-primary">{{ $episode->guestOccupation }}</span>
            </div>
            <div itemprop="alumniOf" itemscope itemtype="https://schema.org/EducationalOrganization"class="flex divide-x font-bold">
                <div itemprop="name" class="pr-2 ">{{ $episode->guestSchool }}</div>
                <div itemprop="department" class=" px-2 text-brand-teal">{{ $episode->guestDegree }}</div>
                <div itemprop="" class=" px-2">{{ $episode->guestGraduatingYear }}</div>
            </div>
        </div>

        <x-ui.rule />

        <div class="flex gap-2 font-serif ">
            @if ($episode->published === true)
                <div class="font-bold text-8xl text-label-light-secondary">&ldquo;</div>
                <blockquote class="text-xl lg:text-2xl text-label-light-primary">
                    {{ $episode->guestQuote }}
                </blockquote>    
            @else
                <p class="text-xl lg:text-2xl text-label-light-primary">
                    {{ $episode->bio }}
                </p>
            @endif
            
        </div>

        @if ($episode->published === true)
            <div class="text-sm text-label-light-secondary">
                Published {{ date('F j, Y', $episode->date) }}
            </div>
        @endif

        {{-- <div>
            <a href="" class="button button--primary">Watch the Interview</a>
        </div> --}}

    </div>
</div>
