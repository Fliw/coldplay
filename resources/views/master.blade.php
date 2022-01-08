<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Coldplay Website</title>
    <meta name="description" content="Hnband Music Event HTML Template">
    <meta name="keywords" content="music, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="{{ URL::asset('css/ont-awesome.min.css_slicknav.min.css_owl.carousel.min.css_Mcc.kRoBgzSj5O.css.pagespeed.cf.DbKDQOeDEu_0irbvb8b56jrivnihqyqtf.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('theme/hnband/css/A.style.css.pagespeed.cf.ssIyG5m6Ss.css') }}" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    @yield('css')
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>

<body style="background-color: black;">
    @include('components.header')
    @yield('content')

    @include('components.footer')
    <script src="{{ URL::asset('theme/hnband/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script
        src="{{ URL::asset('script/jquery.slicknav.min.js_owl.carousel.min.js_jquery.magnific-popup.min.js.pagespeed.jc.2Wh3jC71jZ_ppt84j4y8nc3mu5ou8yy3w.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_m9XWrh8X1Q);
    </script>
    <script>
        eval(mod_pagespeed_fm7xBejDLe);
    </script>
    <script>
        eval(mod_pagespeed_2bBlE3UyXw);
    </script>
    <script src="{{ URL::asset('theme/hnband/js/main.js') }}"></script>
    <script
        src="{{ URL::asset('theme/hnband/js/jquery.jplayer.min.js_jplayer_playlist.min.js.pagespeed.jc.-Rlk2OnpU_.js') }}">
    </script>
    <script>
        eval(mod_pagespeed_7ZVYtmI3sB);
    </script>
    <script>
        eval(mod_pagespeed_Y1n78ZSMRl);
    </script>
    <script src="{{ URL::asset('theme/hnband/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ URL::asset('theme/hnband/js/audioInit-1.js') }}"></script>
    <script src="{{ URL::asset('theme/hnband/js/videoInit.js') }}"></script>
    <script defer src="beacon.min.js"
        data-cf-beacon='{"rayId":"6c86d3a43ea58723","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'>
    </script>
    <center>
        <font size="2">This is the free demo result. For a full version of this website, please go to <a
                href="https://www6.waybackmachinedownloader.com/website-downloader-online/scrape-all-files/">Website
                Downloader</a></font>
    </center>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        AOS.init();
        var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: false,
        slidesPerView: "auto",
		spaceBetween: 50,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
    @yield('script')
</body>

</html>
