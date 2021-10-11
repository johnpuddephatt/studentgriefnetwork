@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())

<img class="absolute top-0 left-0 right-0 w-full pointer-events-none max-w-none"
    src="@asset('/images/gradient-page-top.png')" />
<img class="absolute top-0 left-0 right-0 object-cover object-top w-full h-full pointer-events-none max-w-none"
    src="@asset('/images/background-lines.svg')" />


<header class=" min-h-[20em] container relative z-10 flex flex-row items-end pt-24 mx-auto mb-16 space-x-16 lg:pt-40">
    <div class="max-w-3xl 2xl:max-w-4xl">
        <h1 class="mb-16 text-5xl font-bold font-kayaksans text-blue-dark lg:text-6xl xl:text-7xl">{!!
            get_the_title()
            !!}
        </h1>
        <div class="text-xl font-bold">{{ get_post()->post_excerpt }}</div>
    </div>
    <div>
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