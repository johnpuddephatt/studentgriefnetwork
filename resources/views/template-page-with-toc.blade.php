{{--
  Template Name: Page with table of contents
--}}

@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())

<img class="absolute top-0 left-0 right-0 w-full pointer-events-none max-w-none"
  src="@asset('/images/gradient-page-top.png')" />
<img class="absolute top-0 left-0 right-0 object-cover object-top w-full h-full pointer-events-none max-w-none"
  src="@asset('/images/background-lines.svg')" />


<div class="container relative z-10 max-w-3xl mx-auto 2xl:max-w-4xl pt-72">
  <h1 class="mb-12 text-6xl font-bold xl:text-8xl 2xl:text-9xl font-kayaksans text-blue-dark">{!! get_the_title() !!}
  </h1>
</div>


<div class="container relative z-10 max-w-3xl mx-auto mb-12 2xl:max-w-4xl">
  {!! do_shortcode('[toc]') !!}
</div>


<div class="container relative z-10 min-h-screen pb-64 prose 2xl:prose-lg max-w-none page-content">
  @php(the_content())
</div>

@endwhile
@endsection