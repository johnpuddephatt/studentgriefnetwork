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


<div class="container relative z-10 mx-auto pt-72">
  <div class="max-w-3xl 2xl:max-w-4xl">
    <h1 class="mb-12 text-6xl font-bold xl:text-8xl 2xl:text-9xl font-kayaksans text-blue-dark">{!! get_the_title()
      !!}
    </h1>
  </div>
</div>

<div class="container relative z-10 min-h-screen pb-64 mx-auto">
  <div class="prose 2xl:prose-lg max-w-none page-content">
    @php(the_content())
  </div>

</div>

@endwhile
@endsection