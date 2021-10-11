<img class="absolute top-0 left-0 right-0 w-full pointer-events-none max-w-none"
  src="@asset('/images/gradient-page-top.png')" />
<img class="absolute top-0 left-0 right-0 object-cover object-top w-full h-full pointer-events-none max-w-none"
  src="@asset('/images/background-lines.svg')" />

<article @php(post_class('relative z-10 container mx-auto max-w-7xl mb-20 lg:mb-40'))>
  <header
    class="flex flex-col-reverse items-end justify-between w-full pt-32 pb-12 mb-12 border-b lg:space-x-16 xl:space-x-24 lg:pt-40 lg:flex-row">
    <div class="max-x-2xl">
      <p class="mb-6 text-sm font-bold lg:text-base text-blue-lighter">Student Experience
        <time class="text-blue-light" class="updated" datetime="{{ get_post_time('c', true) }}">
          &nbsp; {{ get_the_date() }}
        </time>
      </p>
      <h1 class="mb-12 text-5xl font-bold lg:text-6xl entry-title xl:text-7xl font-kayaksans text-blue-dark">
        {!! $title !!}
      </h1>
      @if($post->post_excerpt)
      <div class="mt-16 text-xl font-bold">
        {!! $post->post_excerpt !!}
      </div>
      @endif
    </div>
    <div class="flex-none w-3/4 mb-12 lg:ml-auto lg:w-1/3 lg:mb-0">
      {!! get_the_post_thumbnail(null, 'tall' ,[
      'class' => 'w-full h-auto'
      ]) !!}
    </div>
  </header>

  <div class="w-full mx-auto prose 2xl:prose-lg post-content max-w-none">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>

  {{-- @php(comments_template()) --}}
</article>