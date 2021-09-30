<header class="absolute top-0 left-0 z-20 w-full bg-transparent">
  <div class="flex flex-row w-full px-12 py-10 mx-auto lg:items-center">
    <a href="{{ home_url('/') }}" class="flex-none text-3xl font-bold text-blue-dark stroke font-kayaksans">
      {{ $siteName }}
    </a>

    @if(!empty($primaryNavigation))
    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 ml-auto menu-open lg:hidden" fill="none"
      viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    <nav
      class="nav fixed inset-0 transform translate-x-[100%] lg:translate-x-0 ml-auto p-12 lg:p-0 lowercase bg-white lg:bg-transparent lg:static flex flex-col justify-end lg:flex-row text-blue">
      <svg xmlns="http://www.w3.org/2000/svg" class="absolute z-30 w-10 h-10 menu-close lg:hidden right-12 top-12"
        fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
      {!! $primaryNavigation !!}
    </nav>
    @endif
  </div>
</header>