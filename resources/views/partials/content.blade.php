<article
  class="bg-white flex flex-col bg-opacity-40 shadow-lg relative overflow-hidden @if(in_array(get_post_format(),['video','audio'])) row-span-2 col-span-2 @else row-span-3 col-span-1 @endif">
  <a href="{{ get_permalink() }}">
    {!! get_the_post_thumbnail(null, in_array(get_post_format(),['video','audio']) ? 'thumbnail' : 'tall',[
    'class' => 'w-full h-auto'
    ]) !!}</a>

  @if(get_post_format()== 'video')
  <svg xmlns="http://www.w3.org/2000/svg"
    class="absolute w-32 h-32 text-gray-200 transform -translate-x-1/2 -translate-y-1/2 opacity-75 top-1/2 left-1/2"
    fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
  </svg>
  @elseif(get_post_format()== 'audio')
  <svg xmlns="http://www.w3.org/2000/svg"
    class="absolute w-32 h-32 transform -translate-x-1/2 -translate-y-1/2 opacity-75 top-1/2 left-1/2" fill="none"
    viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" />
  </svg>
  @else
  <header class="flex flex-col flex-grow p-6">
    <h2 class="mb-2 text-xl font-bold 2xl:text-2xl font-kayaksans text-blue">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    <div class="text-sm text-gray-500">{{ the_excerpt() }}</div>
    <p class="pt-6 mt-auto text-xs font-medium text-gray-500">
      <span>{{ get_the_date() }}</span>&nbsp;&nbsp;·&nbsp;&nbsp;<span>{{ App\reading_time() }} read</span></p>
  </header>
  @endif
</article>