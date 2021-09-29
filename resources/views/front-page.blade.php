@extends('layouts.app')

@section('content')
<img class="absolute left-0 right-0 z-10 object-cover object-top w-full h-full pointer-events-none -top-96 max-w-none"
    src="@asset('/images/home-background-lines.svg')" />
@include('partials.home-hero')
@include('partials.home-blog')
@include('partials.home-newsletter')
@endsection