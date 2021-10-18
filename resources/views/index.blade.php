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

<div class="container relative z-10 pt-40 mx-auto mb-40 lg:pt-64">
  <h1 class="mb-8 text-5xl font-bold lg:text-6xl xl:text-7xl font-kayaksans text-blue-dark">
    {!! get_queried_object()->post_title !!}
  </h1>
  {{-- <div class="max-w-3xl pb-16 text-xl font-bold leading-relaxed">
    {!! get_queried_object()->post_content !!}
  </div> --}}
  <div class="flex flex-col gap-4 lg:gap-6 lg:flex-row">
    @php(the_post())
    @php($index = 1)
    <div class="flex flex-col flex-none lg:w-2/5">
      <div class="col-span-2 row-span-6 mt-auto lg:sticky bottom-4">
        <div class="mb-6">{!! get_queried_object()->post_content !!}</div>
        <article class="overflow-hidden bg-white bg-opacity-50 shadow-lg ">
          <a href="{{ get_permalink() }}">
            {!! get_the_post_thumbnail(null, 'tall',[
            'class' => 'w-full h-auto'
            ]) !!}</a>
          <header class="p-6">
            <h2 class="mb-2 text-lg font-bold font-kayaksans text-blue sm:text-xl lg:text-2xl xxl:text-3xl">
              <a href="{{ get_permalink() }}">
                {!! the_title() !!}
              </a>
            </h2>

            <div class="text-sm text-gray-500 lg:text-base">{{ the_excerpt() }}</div>
            <p class="pt-6 text-xs font-medium text-gray-600">
              <span>{{ get_the_date() }}</span>&nbsp;&nbsp;·&nbsp;&nbsp;<span>{{ App\reading_time() }} read</span>
            </p>
          </header>
        </article>
      </div>
    </div>
    <div class="grid grid-flow-row-dense gap-4 mt-12 lg:gap-6 lg:grid-cols-2">
      {{-- <div class="flex-col justify-center hidden col-span-2 row-span-2 pt-4 pb-8 text-lg lg:flex">
        {!! get_queried_object()->post_content !!}
      </div> --}}

      @while(have_posts()) @php(the_post())
      @php($index++)
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'], ['index' => $index])
      @endwhile
    </div>

    {!! get_the_posts_navigation() !!}
    @endsection
  </div>
</div>