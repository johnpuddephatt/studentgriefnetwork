<img class="absolute left-0 right-0 z-10 object-cover object-top w-full h-full pointer-events-none -top-96 max-w-none"
  src="@asset('/images/home-background-lines.svg')" />

<section class="relative flex items-center justify-center w-full h-screen">
  <div class="relative z-10 p-8 mt-20 space-y-8">
    <h1
      class="max-w-5xl mb-16 text-5xl font-bold leading-tight tracking-wide text-center lg:text-6xl xl:text-7xl text-blue font-kayaksans">
      {!! str_replace("|", "<br>", $siteStrapline) !!}
    </h1>

    <div class="mx-6 space-y-4">
      @foreach($links as $link)
      <div class="max-w-sm py-2 mx-auto text-xl border-b-2 border-white lg:text-2xl font-kayaksans text-blue"><a
          class="flex items-center justify-between w-full" href="{{ get_permalink($link->ID) }}"><span>{!!
            get_the_title($link->ID) !!}</span>
          <x-icon.arrow /></a>
      </div>
      @endforeach
    </div>
  </div>

  <svg style="background-color: hsl(210, 90%, 85%)" viewBox="0 0 800 640" preserveAspectRatio="none"
    class="absolute inset-0 w-full h-full">
    <!-- BLUE -->
    <!-- <radialGradient cx="55%" cy="150%" r="150%" id="gradient4" gradientUnits="userSpaceOnUse">
       <animateTransform attributeName="gradientTransform" type="skewX" values="0;25;0" dur="20s" repeatCount="indefinite" />
      <stop offset="50%" stop-color="hsla(220, 49%, 71%,1)" />
      <stop offset="100%" stop-color="hsla(220, 49%, 71%,0)" />
    </radialGradient>  -->

    <!--   <rect x="0" y="0" width="800" height="640" fill="url(#gradient4)" transform="scaleY(200%)">
    </rect>-->

    <!--PURPLE -->

    <radialGradient cx="145%" r="100%" cy="40%" id="gradient1" gradientUnits="userSpaceOnUse">
      <animateTransform attributeName="gradientTransform" type="zoom" values="1.2;0.85;1.2" dur="12s"
        repeatCount="indefinite" />
      <stop offset="75%" stop-color="hsla(252, 71%, 77%, 1)" />
      <stop offset="100%" stop-color="hsla(252, 71%, 77%, 0)" />
    </radialGradient>

    <rect x="0" y="0" width="800" height="640" fill="url(#gradient1)">
    </rect>

    <!-- pink -->

    <radialGradient cx="0%" cy="60%" r="50%" id="gradient9" gradientUnits="userSpaceOnUse">
      <animateTransform calcMode="spline" keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" attributeName="gradientTransform"
        type="scale" values="1.5;0.75;1.5" dur="20s" repeatCount="indefinite" />
      <stop offset="30%" stop-color="hsla(0, 47%, 93%,1)" />
      <stop offset="100%" stop-color="hsla(0, 47%, 93%,0)" />
    </radialGradient>

    <!-- Orange -->

    <radialGradient cx="0%" cy="10%" r="50%" id="gradient2" gradientUnits="userSpaceOnUse">
      <animateTransform calcMode="spline" keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" attributeName="gradientTransform"
        type="skewX" values="30;-20;30" dur="15s" repeatCount="indefinite" />
      <stop offset="30%" stop-color="hsla(35, 75%, 84%, 1)" />
      <stop offset="100%" stop-color="hsla(35, 75%, 84%, 0)" />
    </radialGradient>

    <!-- YELLOW -->

    <radialGradient cx="35%" r="30%" cy="40%" id="gradient2a" gradientUnits="userSpaceOnUse">
      <animateTransform calcMode="spline" keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" attributeName="gradientTransform"
        type="skewX" values="25;-10;25" dur="10s" repeatCount="indefinite" />
      <stop offset="20%" stop-color="hsla(45, 70%, 84%, 1)" />
      <stop offset="100%" stop-color="hsla(45, 70%, 84%, 0)" />
    </radialGradient>

    <radialGradient r="35%" cx="20%" cy="10%" id="gradient2b" gradientUnits="userSpaceOnUse">
      <animateTransform calcMode="spline" keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" attributeName="gradientTransform"
        type="skewX" values="25;-25;25" dur="20s" repeatCount="indefinite" />
      <stop offset="0%" stop-color="hsla(54, 94%, 94%,1)" />
      <stop offset="100%" stop-color="hsla(54, 94%, 94%,0)" />
    </radialGradient>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient9)">
    </rect>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient2)">
    </rect>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient2b)">
    </rect>
    <rect x="0" y="0" width="800" height="640" fill="url(#gradient2a)">
    </rect>

    <!-- RED -->
    <radialGradient calcMode="spline" keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" cx="105%" cy="20%" r="40%" id="gradient10"
      gradientUnits="userSpaceOnUse">
      <animateTransform attributeName="gradientTransform" type="skewY" values="10;25;-5;10" dur="17s"
        repeatCount="indefinite" />
      <stop offset="60%" stop-color="hsla(0, 47%, 93%,1)" />
      <stop offset="100%" stop-color="hsla(0, 47%, 93%,0)" />
    </radialGradient>

    <rect x="0" y="0" width="800" height="640" fill="url(#gradient10)" transform="scaleY(200%)">
    </rect>



    <!-- WHITE -->
    <radialGradient calcMode="spline" keySplines="0.4 0 0.2 1; 0.4 0 0.2 1" cx="90%" cy="5%" r="40%" id="gradient3"
      gradientUnits="userSpaceOnUse">
      <animateTransform attributeName="gradientTransform" type="skewY" values="-5;5;-5" dur="20s"
        repeatCount="indefinite" />
      <stop offset="60%" stop-color="hsla(252, 71%, 100%, 1)" />
      <stop offset="100%" stop-color="hsla(252, 71%, 100%, 0)" />
    </radialGradient>

    <rect x="0" y="0" width="800" height="640" fill="url(#gradient3)" transform="scaleY(200%)">
    </rect>

    {{-- <path fill="none" stroke-width="3" stroke="white" class="path"
      d="M1630.62-406.5,1345.85,18.86l-9,70.75-102.1,139.52-1.28,2.75a541.77,541.77,0,0,1-32.24,58.44c-16.7,26-41.23,59.19-73.34,71.76a108.06,108.06,0,0,0,0,14.19,103.74,103.74,0,0,0,2.77,18.35c12.61,6.89,25.71,21,32.5,49.53,3.36,14.1,5.37,31.66,6.16,53.68,1.21,33.84-1,66.86-1.08,68.25l-.61,8.86-16.54,40.33,45,87.74L1169,914,816.88,819.18l-167.17,48.9L529.59,817.6s-23.29-21.41-69.07-27.13-125.3,31.71-125.3,31.71l-110,7.42L165.4,740.84,10.08,852.25M1130.41,408.77h0Z"
      style="transform: scale(0.8) translate(-350px, -160px)" />
    <path fill="none" stroke-width="3" stroke="white"
      d="M1630.62-406.5,1345.85,18.86l-9,70.75-102.1,139.52-1.28,2.75a541.77,541.77,0,0,1-32.24,58.44c-16.7,26-41.23,59.19-73.34,71.76a108.06,108.06,0,0,0,0,14.19,103.74,103.74,0,0,0,2.77,18.35c12.61,6.89,25.71,21,32.5,49.53,3.36,14.1,5.37,31.66,6.16,53.68,1.21,33.84-1,66.86-1.08,68.25l-.61,8.86-16.54,40.33,45,87.74L1169,914,816.88,819.18l-167.17,48.9L529.59,817.6s-23.29-21.41-69.07-27.13-125.3,31.71-125.3,31.71l-110,7.42L165.4,740.84,10.08,852.25M1130.41,408.77h0Z"
      style="opacity: 0.5; transform: scale(0.8) translate(-350px, -160px)" /> --}}

  </svg>


</section>