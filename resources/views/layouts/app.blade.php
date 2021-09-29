<svg hidden>
  <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
    <path
      d="M0.614,0.168 l0.079,-0.131,0.091,0.127,0.126,-0.05 L0.957,0,0.997,0.053 V1 H-0.003 V0.371 l0.167,-0.083 L0.331,0.497 l0.051,-0.06,0.115,-0.048,0.021,-0.169 m-0.107,0.121,0,0">
    </path>
  </clipPath>
</svg>


<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div class="relative">
  @include('partials.header')

  <main id="main" class="min-h-screen">
    @yield('content')
  </main>

  @include('partials.footer')
</div>