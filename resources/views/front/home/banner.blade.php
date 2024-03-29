<section class="banner banner-height relative flex justify-center items-center bg-blue-main bg-cover">
    @if(app()->getLocale() === 'en')
        @include('svgs.logos.Eng_Estate', ['classes' => 'text-cream-light h-20 md:h-32 fadeUpAfterLoad'])
    @else
        @include('svgs.logos.Ch_Estate', ['classes' => 'text-cream-light h-20 md:h-32 fadeUpAfterLoad'])
    @endif
    <a href="#" data-banner-jump="" class="absolute bottom-0 hidden md:inline text-cream-light hover:text-gold"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50px" height="50px" class="fill-current"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z"></path></svg></a>
</section>
