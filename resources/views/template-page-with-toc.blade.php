{{--
  Template Name: Page with table of contents
--}}

@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())
@include('partials.page-header')
<div class="container relative z-10 max-w-3xl mx-auto mb-12 2xl:max-w-4xl">
  {!! do_shortcode('[toc]') !!}
</div>
@includeFirst(['partials.content-page', 'partials.content'])
@endwhile
@endsection