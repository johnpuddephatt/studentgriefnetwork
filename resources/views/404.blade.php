@extends('layouts.app')

@section('content')
<div class="min-h-full">
  @if (! have_posts())
  <x-alert type="warning">
    {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
  </x-alert>

  {!! get_search_form(false) !!}
  @endif
</div>
@endsection