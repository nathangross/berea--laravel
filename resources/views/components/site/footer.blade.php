<footer class="bg-brand-blue text-label-light-reverse px-8 py-8">

    <div class="container mx-auto flex flex-col lg:flex-row justify-between lg:items-center">
        
        {{-- left --}}
        <div class="space-y-4 order-2 mb-8 lg:mb-0">
            <h2 class="font-serif text-3xl lg:text-4xl">A college like no other.</h2>

            <address class="not-italic">
                <h3 class="font-bold">Berea College</h3>
                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">101 Chestnut St.</span> <br>
                    <span itemprop="addressLocality">Berea</span>,
                    <span itemprop="addressRegion">KY</span>
                    <span itemprop="postalCode">40404</span> <br>
                    <span itemprop="telephone">
                        <a href="tel:859-985-3000">
                            859-985-3000
                        </a>
                    </span>
                </div>
            </address>

            <hr>

            <nav class="flex flex-col lg:flex-row lg:space-x-2">
                <x-nav.tertiary.link href="/the-great-commitments">The Great Commitments</x-nav.tertiary.link>
                <x-nav.tertiary.link>Campus Map</x-nav.tertiary.link>
                <x-nav.tertiary.link>Visit</x-nav.tertiary.link>
                <x-nav.tertiary.link>Events</x-nav.tertiary.link>
                <x-nav.tertiary.link>Careers</x-nav.tertiary.link>
            </nav>

            <hr>

            <div class="flex divide-x divide-white divide-opacity-50">
                <div class="pr-2">
                    &copy; {{ date("Y") }} Berea College
                </div>
                <div class="pl-2">
                    All rights reserved.
                </div>
            </div>
        </div>
        
        {{-- right --}}
        <div 
            class="flex flex-col lg:items-center space-y-4 
            order-1 border-b border-white pb-8 mb-8
            lg:order-2 lg:border-none lg:pb-0 lg:mb-0">

            <x-brand.logo.white />
            <h2 class="font-serif text-3xl lg:text-2xl">
                <span class="inline-block">Invest in Lives of </span>
                <span class="inline-block">Great Promise.</span>
                </h2>
            <a href="" class="button button--primary ">
                Give to Berea
            </a>

        </div>
    </div>


    {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>