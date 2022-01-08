@extends('master')
@section('css')
<style>
    .swiper {
	width: 100%;
	padding-top: 50px;
	padding-bottom: 50px;
  }

  .swiper-slide {
	background-position: center;
	background-size: cover;
	width: 300px;
	height: 200px;
  }

  .swiper-slide img {
	display: block;
	width: 100%;
  }
</style>
@endsection
@section('content')
    <div class="col-lg-12 text-center" style="margin-top:150px">
        <div class="section-title">
            <div class="sub-title">Our Album</div>
            <h2>{{ $album->title }}</h2>
            <br>
            <iframe style="border-radius:50px" width="900px" height="450px" src="https://www.youtube.com/embed/LxalT5pksxY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0"></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="300" height="300" src="https://www.youtube.com/embed/fjJVc0AhynY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <section class="albums__page" style="color:white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="album-title">AVAILABLE ON</h3>
                    <div class="avablable__links">
                        <a href="#"><img src="../../theme/hnband/img/xitune.png.pagespeed.ic.T1RcPbEBE4.png" alt=""
                                data-pagespeed-url-hash="2855680131"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                        <a href="#"><img src="../../theme/hnband/img/xgoogle-play.png.pagespeed.ic.9R7B34SYBq.png" alt=""
                                data-pagespeed-url-hash="1990478050"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="album-text">
                        <h3 class="album-title">ABOUT ALBUM</h3>
                        <p>{{ $album->description }}</p>
                        <ul>
                            <li><i class="fa fa-calendar"></i>{{ $album->release }}</li>
                            <li><i class="fa fa-music"></i>{{ $album->genre }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
