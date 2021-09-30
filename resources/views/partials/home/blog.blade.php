<!-- Section 1 -->
<section class="relative z-10">
  <div class="w-full py-6 mx-auto sm:py-12 md:py-24 max-w-7xl">

    @php(query_posts('posts_per_page=3'))

    <div class="flex grid grid-cols-12 gap-x-16 gap-y-16">
      @while(have_posts()) @php(the_post())
      <div class="flex flex-col items-start col-span-12 space-y-2 sm:col-span-6 xl:col-span-4">
        <a href="{{ get_permalink() }}" class="block">
          {!! get_the_post_thumbnail(null, 'tall', ['class' => 'mb-6 block overflow-hidden shadow-sm']) !!}
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