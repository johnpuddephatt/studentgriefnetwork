@extends('layouts.app')

@section('content')

<img class="absolute top-0 left-0 right-0 w-full pointer-events-none max-w-none"
  src="@asset('/images/gradient-mesh-2.png')" />
<img class="absolute top-0 left-0 right-0 object-cover object-top w-full h-full pointer-events-none max-w-none"
  src="@asset('/images/background-lines.svg')" />

@if (! have_posts())
<x-alert type="warning">
  {!! __('Sorry, no results were found.', 'sage') !!}
</x-alert>

{!! get_search_form(false) !!}
@endif

<div class="container relative z-10 pt-64 mx-auto mb-72">
  <h1 class="pt-6 mb-12 text-6xl font-bold xl:text-8xl 2xl:text-9xl font-kayaksans text-blue-dark">
    {!! get_queried_object()->post_title !!}
  </h1>
  <div class="flex flex-row gap-8">
    @php(the_post())
    @php($index = 1)
    <div class="flex flex-col flex-none w-1/2 mt-14">
      <article class="sticky col-span-2 row-span-6 mt-auto overflow-hidden bg-white bg-opacity-50 shadow-lg bottom-8">
        <a href="{{ get_permalink() }}">
          {!! get_the_post_thumbnail(null, 'tall',[
          'class' => 'w-full h-auto'
          ]) !!}</a>
        <header class="p-6">
          <h2 class="mb-2 text-lg font-bold font-kayaksans text-blue sm:text-xl md:text-2xl xl:text-3xl">
            <a href="{{ get_permalink() }}">
              {!! the_title() !!}
            </a>
          </h2>

          <p class="text-sm text-gray-500">{{ the_excerpt() }}</p>
          <p class="pt-6 text-xs font-medium text-gray-600">
            <span>{{ get_the_date() }}</span>&nbsp;&nbsp;·&nbsp;&nbsp;<span>{{ App\reading_time() }} read</span>
          </p>
        </header>

      </article>
    </div>
    <div class="grid grid-flow-row-dense grid-cols-2 gap-8">
      <div class="flex flex-col justify-center col-span-2 row-span-2 pt-4 pb-8 text-lg">
        {!! get_queried_object()->post_content !!}
      </div>

      @while(have_posts()) @php(the_post())
      @php($index++)
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'], ['index' => $index])
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}
    @endsection
  </div>
</div>