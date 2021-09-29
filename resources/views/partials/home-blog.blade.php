<!-- Section 1 -->
<section class="relative z-10">
  <div class="w-full py-6 mx-auto sm:py-12 md:py-24 max-w-7xl">

    {{-- @php(the_post())
    <div class="flex flex-col items-center sm:px-5 md:flex-row">
      <div class="w-full md:w-1/2">
        <a href="#_" class="block">
          {!! get_the_post_thumbnail(null, 'thumbnail', ['class' => 'object-cover w-full h-full rounded-lg max-h-64
          sm:max-h-96']) !!}
        </a>
      </div>
      <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
        <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
          <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">{{ the_title() }}</a></h1>
    <p class="pt-2 text-sm font-medium">by <a href="#_"
        class="mr-1 underline">{{ get_the_author_meta('display_name') }}</a> · <span
        class="mx-1">{{ get_the_date() }}</span> · <span class="mx-1 text-gray-600">{{ App\reading_time() }}
        read</span></p>
  </div>
  </div>
  </div> --}}

  @php(query_posts('posts_per_page=3'))

  <div class="flex grid grid-cols-12 gap-x-12 gap-y-16">
    @while(have_posts()) @php(the_post())
    <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
      <a href="{{ get_permalink() }}" class="block">
        {!! get_the_post_thumbnail(null, 'tall', ['class' => 'mb-2 overflow-hidden shadow-sm']) !!}
      </a>
      <h2 class="text-lg font-bold font-kayaksans text-blue sm:text-xl md:text-2xl"><a
          href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
      <p class="text-sm text-gray-500">{{ the_excerpt() }}</p>
      <p class="pt-2 text-xs font-medium"> <span class="mx-1">{{ get_the_date() }}</span> · <span
          class="mx-1 text-gray-600">{{ App\reading_time() }}
          read</span></p>
    </div>
    @endwhile

  </div>
  </div>
</section>