<section class="villa-shoutout min-section-height flex justify-center items-center">
    <div data-usher class="max-w-lg p-8 bg-opaque flex flex-col items-center mx-4 md:mx-0 my-12">
        @if(app()->getLocale() === 'en')
            @include('svgs.logos.Eng_Villa', ['classes' => 'text-green-main h-16 mb-6'])
        @else
            @include('svgs.logos.Ch_Villa', ['classes' => 'text-green-main h-16 mb-6'])
        @endif
        <p class="mb-8  text-green-main text-center">{{ trans('homepage.shoutout.content') }}</p>
        <a href="https://villa.loherb.com.tw" class="type-a1 text-blue-main hover:text-blue-main">{{ trans('homepage.shoutout.link') }} &rarr;</a>
    </div>
</section>
