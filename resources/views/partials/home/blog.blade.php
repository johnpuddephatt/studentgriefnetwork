<!-- Section 1 -->
<section class="relative z-10">
  <div class="container py-12 mx-auto md:py-24 ">

    @php(query_posts('posts_per_page=3'))

    <div class="flex grid grid-cols-3 gap-x-16 gap-y-16">
      @while(have_posts()) @php(the_post())
      <div class="flex flex-col items-start col-span-3 space-y-2 lg:col-span-1">
        <a href="{{ get_permalink() }}" class="block">
          {!! get_the_post_thumbnail(null, 'tall', ['class' => 'w-5/6 lg:w-full mb-6 block overflow-hidden shadow-sm'])
          !!}
        </a>
        <h2 class="text-xl font-bold font-kayaksans text-blue-dark md:text-2xl"><a href="{{ get_permalink() }}">{{
            the_title() }}</a></h2>
        <div class="text-sm text-gray-500 lg:text-base">{{ the_excerpt() }}</div>
        <p class="pt-2 text-xs font-medium"> <span class="mx-1">{{ get_the_date() }}</span> · <span
            class="mx-1 text-gray-600">{{ App\reading_time() }}
            read</span></p>
      </div>
      @endwhile

    </div>
  </div>
</section>