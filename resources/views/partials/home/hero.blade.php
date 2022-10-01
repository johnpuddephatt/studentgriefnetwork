{{-- <img
  class="pointer-events-none absolute left-0 right-0 -top-96 z-10 h-full w-full max-w-none object-cover object-top"
  src="@asset('/images/home-background-lines.svg')"
/> --}}

<section class="relative h-[110vh]">
  <div
    class="container relative z-10 flex h-screen flex-col justify-center space-y-8"
  >
    <h1
      class="lg:tracking-wide text-blue-dark font-kayaksans max-w-5xl text-4xl font-bold leading-tight lg:-mt-8 lg:mb-0 lg:text-5xl xl:text-6xl 2xl:text-7xl"
    >
      {!! str_replace("|", "<br class="hidden md:block" />", $siteStrapline) !!}
    </h1>

    <div class="space-y-4">
      @foreach($links as $link)

      <div
        class="font-kayaksans text-blue w-64 border-b-2 border-white py-2 text-xl lg:w-auto lg:max-w-sm lg:text-2xl"
      >
        <a
          class="flex w-full items-center justify-between"
          href="{{ get_permalink($link->ID) }}"
          ><span>{!! get_the_title($link->ID) !!}</span>
          <x-icon.arrow />
        </a>
      </div>

@endforeach
    </div>
  </div>

  <img
    class="absolute top-1/3 left-[57.5%] z-40 hidden h-auto w-64 lg:block lg:w-96"
    src="@asset('/images/birds-2.png')"
  />

  <svg
    style="background-color: hsl(210, 90%, 85%)"
    viewBox="0 0 800 640"
    preserveAspectRatio="none"
    class="absolute inset-0 h-[105vh] w-full"
  >
    <!-- BLUE -->
    <!-- <radialGradient cx="55%" cy="150%" r="150%" id="gradient4" gradientUnits="userSpaceOnUse">
       <animateTransform attributeName="gradientTransform" type="skewX" values="0;25;0" dur="20s" repeatCount="indefinite" />
      <stop offset="50%" stop-color="hsla(220, 49%, 71%,1)" />
      <stop offset="100%" stop-color="hsla(220, 49%, 71%,0)" />
    </radialGradient>  -->

    <!--   <rect x="0" y="0" width="800" height="640" fill="url(#gradient4)" transform="scaleY(200%)">
    </rect>-->

    <!--PURPLE -->

    <radialGradient
      cx="145%"
      r="100%"
      cy="40%"
      id="gradient1"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        attributeName="gradientTransform"
        type="zoom"
        values="1.2;0.85;1.2"
        dur="12s"
        repeatCount="indefinite"
      />
      <stop offset="75%" stop-color="hsla(252, 71%, 77%, 1)" />
      <stop offset="100%" stop-color="hsla(252, 71%, 77%, 0)" />
    </radialGradient>

    <rect x="0" y="0" width="800" height="640" fill="url(#gradient1)"></rect>

    <!-- pink -->

    <radialGradient
      cx="0%"
      cy="60%"
      r="50%"
      id="gradient9"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        calcMode="spline"
        keySplines="0.4 0 0.2 1; 0.4 0 0.2 1"
        attributeName="gradientTransform"
        type="scale"
        values="1.5;0.75;1.5"
        dur="20s"
        repeatCount="indefinite"
      />
      <stop offset="30%" stop-color="hsla(0, 47%, 93%,1)" />
      <stop offset="100%" stop-color="hsla(0, 47%, 93%,0)" />
    </radialGradient>

    <!-- Orange -->

    <radialGradient
      cx="0%"
      cy="10%"
      r="50%"
      id="gradient2"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        calcMode="spline"
        keySplines="0.4 0 0.2 1; 0.4 0 0.2 1"
        attributeName="gradientTransform"
        type="skewX"
        values="30;-20;30"
        dur="15s"
        repeatCount="indefinite"
      />
      <stop offset="30%" stop-color="hsla(35, 75%, 84%, 1)" />
      <stop offset="100%" stop-color="hsla(35, 75%, 84%, 0)" />
    </radialGradient>

    <!-- YELLOW -->

    <radialGradient
      cx="35%"
      r="30%"
      cy="40%"
      id="gradient2a"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        calcMode="spline"
        keySplines="0.4 0 0.2 1; 0.4 0 0.2 1"
        attributeName="gradientTransform"
        type="skewX"
        values="25;-10;25"
        dur="10s"
        repeatCount="indefinite"
      />
      <stop offset="20%" stop-color="hsla(45, 70%, 84%, 1)" />
      <stop offset="100%" stop-color="hsla(45, 70%, 84%, 0)" />
    </radialGradient>

    <radialGradient
      r="35%"
      cx="20%"
      cy="10%"
      id="gradient2b"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        calcMode="spline"
        keySplines="0.4 0 0.2 1; 0.4 0 0.2 1"
        attributeName="gradientTransform"
        type="skewX"
        values="25;-25;25"
        dur="20s"
        repeatCount="indefinite"
      />
      <stop offset="0%" stop-color="hsla(54, 94%, 94%,1)" />
      <stop offset="100%" stop-color="hsla(54, 94%, 94%,0)" />
    </radialGradient>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient9)"></rect>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient2)"></rect>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient2b)"></rect>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient2a)"></rect>

    <!-- RED -->
    <radialGradient
      calcMode="spline"
      keySplines="0.4 0 0.2 1; 0.4 0 0.2 1"
      cx="105%"
      cy="20%"
      r="40%"
      id="gradient10"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        attributeName="gradientTransform"
        type="skewY"
        values="10;25;-5;10"
        dur="17s"
        repeatCount="indefinite"
      />
      <stop offset="60%" stop-color="hsla(0, 47%, 93%,1)" />
      <stop offset="100%" stop-color="hsla(0, 47%, 93%,0)" />
    </radialGradient>

    <rect
      x="0"
      y="0"
      width="800"
      height="640"
      fill="url(#gradient10)"
      transform="scaleY(200%)"
    ></rect>

    <!-- WHITE -->
    <radialGradient
      calcMode="spline"
      keySplines="0.4 0 0.2 1; 0.4 0 0.2 1"
      cx="90%"
      cy="5%"
      r="40%"
      id="gradient3"
      gradientUnits="userSpaceOnUse"
    >
      <animateTransform
        attributeName="gradientTransform"
        type="skewY"
        values="-5;5;-5"
        dur="20s"
        repeatCount="indefinite"
      />
      <stop offset="60%" stop-color="hsla(252, 71%, 100%, 1)" />
      <stop offset="100%" stop-color="hsla(252, 71%, 100%, 0)" />
    </radialGradient>

    <rect
      x="0"
      y="0"
      width="800"
      height="640"
      fill="url(#gradient3)"
      transform="scaleY(200%)"
    ></rect>
  </svg>

  <svg
    class="parallax-child height-auto pointer-events-none absolute -bottom-40 -right-32 w-full min-w-[1024px] lg:bottom-0 lg:right-0"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 2516.84 1800"
  >
    <path
      fill="#ffffff"
      d="M2444.62,48l-32.75,69.25L2358,236.85c-10.55,11.17-28.62,31-47.72,55l-82.7,291.89,1.45,185L2065.73,992l-62.62,538.58-211.47-61.68-105.17-134.23-89.79-.41-174.27-107.1-3-29.31L1286,1126.21l-73,85.25-166.56,8.2-244.57,66L698.35,1255.2.83,1410.1V2033h2516V0Z"
      transform="translate(-0.61 -2.31)"
    />
  </svg>

  <svg
    class="parallax-child-2 height-auto pointer-events-none absolute -bottom-48 -right-32 w-full min-w-[1024px] lg:bottom-0 lg:right-0"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 2516.84 2033"
  >
    <path
      fill="none"
      stroke="#7f86f2"
      stroke-width="2px"
      d="M2516.83,13.72l-63.18,54.59L2474,185.77l-49.54,169.3s-97.73,97.72-115.94,171-1.67,122.15-1.67,122.15l1.67,214.48-163.88,224-69.24,595.46-309.83-90.36L1668.9,1468.5h-65.73l-12.71-4.62c-2-.72-49.3-18-95.83-41-30.27-15-53.61-29-71.35-42.92-35.86-28.14-48.1-56.93-50.51-80.44a163.22,163.22,0,0,0-43.78-24.59c-35.92,41.06-96.23,57.69-142.09,66.86a749,749,0,0,1-100,12.6l-4.56.22L829.27,1423l-103.83-30.54L.83,1553.3m1522.49-245.53v0Z"
      transform="translate(-0.61 -2.31)"
    />
  </svg>
</section>
