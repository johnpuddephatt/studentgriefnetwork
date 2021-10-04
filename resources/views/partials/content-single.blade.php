<div class="pt-32 mb-16 page-header">
  <img class="absolute top-0 left-0 right-0 w-full pointer-events-none max-w-none"
    src="@asset('/images/gradient-page-top.png')" />
  <img class="absolute top-0 left-0 right-0 object-cover object-top w-full h-full pointer-events-none max-w-none"
    src="@asset('/images/background-lines.svg')" />
</div>
<article @php(post_class('relative z-10 container mx-auto max-w-5xl mb-36'))>
  <header
    class="flex flex-col-reverse items-end justify-between w-full pt-24 pb-12 mb-12 space-x-8 border-b lg:flex-row">
    <div class="text-sm lg:text-base">
      <p class="mb-6 font-bold text-blue-lighter">Student Experience
        <time class="text-blue-light" class="updated" datetime="{{ get_post_time('c', true) }}">
          &nbsp; {{ get_the_date() }}
        </time>
      </p>
      <h1 class="mb-12 text-5xl font-bold lg:text-6xl entry-title xl:text-7xl font-kayaksans text-blue-dark">
        {!! $title !!}
      </h1>
      @if($post->post_excerpt)
      <div class="mt-16 text-lg font-semibold">
        {!! $post->post_excerpt !!}
      </div>
      @endif
    </div>
    <div class="w-3/4 mb-12 ml-auto lg:w-1/3 lg: lg:mb-0 mt-flex-none">
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