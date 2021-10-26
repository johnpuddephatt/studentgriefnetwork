<svg hidden>
  <clipPath id="torn-corner-1" clipPathUnits="objectBoundingBox">
    <path d="M0.443,0,0.367,0.022 L0.327,0.084,0.231,0.115 H0.159 L0.101,0.186,0,0.259 V1 H1 V0 H0.465"></path>
  </clipPath>
  <clipPath id="torn-corner-2" clipPathUnits="objectBoundingBox">
    <path d="M0.557,1 L0.633,0.978,0.673,0.916,0.769,0.885 H0.841 L0.899,0.814,1,0.741 V0 H0 V1 H1"></path>
  </clipPath>
  <clipPath id="torn-corner-3" clipPathUnits="objectBoundingBox">
    <path d="M0.419,0.906 L0.42,0.966,0.487,1 H1 V0 H0 V1 H0.021 L0.043,1,0.162,0.953,0.246,0.952,0.334,0.89">
    </path>
  </clipPath>
</svg>


<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<div class="relative @if(is_home()) parallax-container @endif">
  @include('partials.header')

  <main id="main" class="min-h-screen">
    @yield('content')
  </main>

  @include('partials.footer')
</div>