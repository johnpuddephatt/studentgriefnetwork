<footer class="relative text-center lg:text-left">
  <img class="absolute bottom-0 left-0 w-[200%] lg:w-full max-w-none -right-96 "
    src="@asset('/images/gradient-mesh-2x.png')" />
  <div class="relative bg-opacity-50 lg:pt-24 text-blue footer-clip bg-blue-lighter lg:bg-white lg:bg-opacity-50 ">
    <div class="container py-16 pt-48 mx-auto lg:pb-6 lg:pt-32 max-w-none">
      <div class="flex flex-col gap-16 lg:gap-8 lg:flex-row">
        <div
          class="flex-none flex-grow-0 flex-shrink w-full pt-8 pb-16 pl-6 mr-auto text-3xl font-bold text-center font-kayaksans footer-logo md:w-auto">
          <div class="inline-block w-48 pl-4 text-left stroke">
            {{ $siteName }}
          </div>
        </div>
        <div class="flex-shrink w-full mt-8 ml-auto lg:mt-6 xl:w-1/6 lg:w-1/4">
          <p class="mb-3 sm:mt-3">{!! str_replace("|", "", $siteStrapline) !!}</p>

          @if(get_theme_mod('company_info'))
          <p class="mb-12 text-xs lg:mb-6 company-info">{{ get_theme_mod('company_info') }}</p>
          @endif

          <div class="flex justify-center space-x-1 md:justify-start md:space-x-3">
            @if(get_theme_mod('facebook'))
            <a rel="noopener" class="flex items-center justify-center w-10 h-10 p-2 text-[#c6cfe3] rounded-full bg-blue"
              aria-label="Facebook link" href="{{ get_theme_mod('facebook') }}" target="_blank">
              <x-icon.facebook />
            </a>
            @endif

            @if(get_theme_mod('twitter'))
            <a rel="noopener" aria-label="Twitter link"
              class="flex items-center justify-center w-10 h-10 p-2 text-[#c6cfe3] rounded-full bg-blue"
              href="{{ get_theme_mod('twitter') }}" target="_blank">
              <x-icon.twitter />
            </a>
            @endif

            @if(get_theme_mod('youtube'))
            <a rel="noopener" aria-label="Youtube link"
              class="flex items-center justify-center w-10 h-10 p-2 text-[#c6cfe3] rounded-full bg-blue"
              href="{{ get_theme_mod('youtube') }}" target="_blank">
              <x-icon.youtube />
            </a>
            @endif

            @if(get_theme_mod('instagram'))
            <a rel="noopener" aria-label="Instagram link"
              class="flex items-center justify-center w-10 h-10 p-2 ml-1 text-[#c6cfe3] rounded-full bg-blue"
              href="{{ get_theme_mod('instagram') }}" target="_blank">
              <x-icon.instagram />
            </a>
            @endif

            @if(get_theme_mod('linkedin'))
            <a rel="noopener" aria-label="LinkedIn link"
              class="flex items-center justify-center w-10 h-10 p-2 text-[#c6cfe3] rounded-full bg-blue"
              href="{{ get_theme_mod('linkedin') }}" target="_blank">
              <x-icon.linkedin />
            </a>
            @endif
          </div>


        </div>
        @if(!empty($footerNavigation))
        <div class="flex-shrink w-full lg:mt-6 md:-ml-6 lg:ml-0 xl:w-1/6 lg:w-1/5 md:w-1/2">
          {!! $footerNavigation !!}
        </div>
        @endif

      </div>
    </div>
  </div>
</footer>