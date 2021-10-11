@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())

<img class="absolute top-0 left-0 right-0 w-full pointer-events-none max-w-none"
    src="@asset('/images/gradient-page-top.png')" />
<img class="absolute top-0 left-0 right-0 object-cover object-top w-full h-full pointer-events-none max-w-none"
    src="@asset('/images/background-lines.svg')" />


<header
    class=" min-h-[20em] container relative z-10 flex lg:flex-row flex-col-reverse items-end pt-32 mx-auto mb-16 lg:space-x-16 xl:space-x-24  lg:pt-40">
    <div class="max-x-2xl">
        <h1 class="mb-16 text-5xl font-bold font-kayaksans text-blue-dark lg:text-6xl xl:text-7xl">{!!
            get_the_title()
            !!}
        </h1>
        <div class="text-xl font-bold">{{ get_post()->post_excerpt }}</div>
    </div>
    <div class="flex-none w-3/4 mb-12 lg:ml-auto lg:w-1/3 lg:mb-0">
        {!! get_the_post_thumbnail(null, 'tall' ,[
        'class' => 'w-full h-auto'
        ]) !!}
    </div>
</header>
<div class="relative z-10 mx-auto">
    <div class="container relative z-10 min-h-screen mx-auto pb:20 lg:pb-40">
        <div class="prose 2xl:prose-lg max-w-none page-content">
            @php(the_content())
        </div>
    </div>
</div>
@endwhile
@endsection