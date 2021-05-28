<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('Includes.head')
  <style>
    .swiper-wrapper {
      width: 100%;
      height: 40rem !important;
    }

    .slider-image {

      opacity: .8;
      background-color: black !important;
      background-image: url('assets/slider/slider-img.jpg');
      color: black !important;
      width: 100%;
      height: 40rem !important;
      background-size: 100% 100%;
      background-repeat: no-repeat;
    }

    @media only screen and (min-width: 350px) and (max-width: 650px) {
      .swiper-wrapper {
        height: 25rem !important;
      }

      .slider-image {
        height: 25rem !important;
      }
    }

    .ribbon {
      font-size: 16px !important;
      /* This ribbon is based on a 16px font side and a 24px vertical rhythm. I've used em's to position each element for scalability. If you want to use a different font size you may have to play with the position of the ribbon elements */

      width: 50%;

      position: relative;
      color: #fff;
      text-align: center;
      padding: 1em 2em;
      /* Adjust to suit */
      margin: 2em auto 3em;
      /* Based on 24px vertical rhythm. 48px bottom margin - normally 24 but the ribbon 'graphics' take up 24px themselves so we double it. */
    }

    .ribbon:before,
    .ribbon:after {
      content: "";
      position: absolute;
      display: block;
      bottom: -1em;
      border: 1.5em solid rgb(250, 250, 250);
      z-index: -1;
    }

    .ribbon:before {
      left: -2em;
      border-right-width: 1.5em;
      border-left-color: transparent;
    }

    .ribbon:after {
      right: -2em;
      border-left-width: 1.5em;
      border-right-color: transparent;
    }

    .ribbon .ribbon-content:before,
    .ribbon .ribbon-content:after {
      content: "";
      position: absolute;
      display: block;
      border-style: solid;
      border-color: #fcfcfc transparent transparent transparent;
      bottom: -1em;
    }

    .ribbon .ribbon-content:before {
      left: 0;
      border-width: 1em 0 0 1em;
    }

    .ribbon .ribbon-content:after {
      right: 0;
      border-width: 1em 1em 0 0;
    }

  </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
  @include('Includes.nav')
  @if(Session::has('error'))
  <section class="bg-white py-20">
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
      <strong class="font-bold">{{ Session::get('error') }}!</strong>
      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20">
          <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
      </span>
    </div>
  </section>
  @endif

  @if(Session::has('success'))
  <section class="bg-white py-20">
    <div class="bg-red-100 border border-green-400 text-grey-900 px-4 py-3 rounded relative" role="alert">
      <strong class="font-bold text-gray-900">{{ Session::get('success') }}!</strong>
      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-grey-900" role="button" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20">
          <path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
        </svg>
      </span>
    </div>
  </section>
  @endif

  @yield('content')
  @include('Includes.footer')
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0kZnRLFjz_ASoOcwRg_0ukkdxrC8JGNc&callback=initMap&libraries=&v=weekly"
    async></script>

  <script>
    $('.autoplay').slick({
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1800,
});
		
  </script>
  <script>
    function initMap() {
  // The location of Uluru
  const uluru = { lat: 12.9122358, lng: 77.6378511 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    scaleControl: true,
    zoom: 10,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
  </script>

  <!-- jQuery if you need it-->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

  <script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function () {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 10) {
        header.classList.add("bg-white");
        navaction.classList.remove("bg-white");
        navaction.classList.add("gradient");
        navaction.classList.remove("text-gray-800");
        navaction.classList.add("text-white");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
      } else {
        header.classList.remove("bg-white");
        navaction.classList.remove("gradient");
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script>
  <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;
    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }
    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>

</body>

</html>