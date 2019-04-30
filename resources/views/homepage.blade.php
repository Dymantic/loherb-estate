@extends('base')

@section('title')
    {{ trans('homepage.meta.title') }}
@endsection

@section('head')
    @include('ogmeta', [
        'ogImage' => url('/images/estate_facebook.jpg'),
        'ogTitle' => trans('homepage.meta.title'),
        'ogDescription' => trans('homepage.meta.description')
    ])
@endsection

@section('content')
    @include('front.home.banner')
    @include('front.home.ecofriendly')
    @include('front.home.facade')
    @include('front.home.estate-management')
    @include('front.home.villa-shoutout')
    @include('front.home.nourish-the-earth')

    @include('front.partials.footer')
    @include('front.partials.nav')
<div class="fb-customerchat"
         page_id="{{ config('facebook.page_id') }}" theme_color="#0a2e64">
    </div>
<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "Corporation",
  "name": "Loherb Estate",
  "url": "https://estate.loherb.com.tw/",
  "logo": "https://estate.loherb.com.tw/images/logos/logo_main.svg",
  "description": "Estate development in Taiwan with an emphasis on ecological and environmental awareness.",
  "address": {
		"@type": "PostalAddress",
		"addressCountry": "Taiwan",
		"addressLocality": "Yilan",
		"addressRegion": "Dongshan",
		"postalCode": "269",
		"streetAddress": "372 Baofu road",
		"email": "service@loherb.com.tw",
		"telephone": "+886-3-959-5685",
		"name": "Villa Loherb"
	},
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+886-3-959-5685",
    "contactType": "customer service"
  }
}
</script>
@include('front.partials.facebook-sdk')
@endsection