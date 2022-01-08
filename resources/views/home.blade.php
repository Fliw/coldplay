@extends('master')
@section('content')
<section class="hero__section set-bg" data-setbg="theme/hnband/img/hero-bg.png.webp">
	<div class="container text-white">
		<div class="hero__slider owl-carousel">
			<div class="hero__items">
				<span>Welcome to</span>
				<h2>Coldplay</h2>
				<a href="#" class="site__btn">Let's Xplore!</a>
			</div>
			<div class="hero__items">
				<span>Brought to you as FP from Muhammad Rafly</span>
				<h2>Coldplay</h2>
				<a href="#" class="site__btn">Buy tickets</a>
			</div>
		</div>
	</div>
</section>
<section class="about__section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<img src="theme/hnband/img/xabout.png.pagespeed.ic.nIXjQEB-hL.png" style="margin-top: 100px; border-radius: 50px; width: 80%;" alt="">
			</div>
			<div class="col-lg-6" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
				<div class="about__text">
					<span>About us</span>
					<h2>Coldplay</h2>
					<p>Coldplay are a British rock band formed in London in 1996. The band consists of vocalist, rhythm guitarist, and pianist Chris Martin, lead guitarist Jonny Buckland, bassist Guy Berryman, drummer Will Champion and creative director Phil Harvey.</p>
					<a href="#" class="site__btn">Contact us</a>
				</div>
			</div>
		</div>
	</div>
	<section class="discography__section set-bg" data-setbg="img/discography-bg.png">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title">
						<div class="sub-title">Our Discogaphy</div>
						<h2>newest album</h2>
					</div>
				</div>
				<div class="col-lg-4 text-left text-lg-right pt-2">
					<a href="#" class="site__btn mb-5"><i class="fa fa-apple"></i> Buy on itunes</a>
				</div>
			</div>
			<div class="row">
				
				@foreach($data['album'] as $album)
				<a href="/album/{{$album->id}}">
				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="album_card">
						<div class="album__pic" style="width:250px;height:250px">
							<img src="../../theme/hnband/img/albums/1.jpg" alt="" data-pagespeed-url-hash="88755842"
								onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<div class="album__title">
								<div class="album_title_inner">
									<h4>{{$album->title}}</h4>
									<p>Released {{Carbon\Carbon::parse($album->release)->format('Y')}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
				@endforeach
			</div>
		</div>
	</section>
</section>
<section class="player__section" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
	<div class="container-fluid player-one-style p-0">
		<div id="jquery_jplayer_2" class="jp-jplayer"></div>
		<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
			<div class="jp-type-playlist">
				<div class="row m-0">
					<div class="col-lg-6 p-0">
						<div class="player_left" id="player__thumb">
							<div class="player_left_inner">
								<div class="row">
									<div class="col-lg-5 col-sm-4">
										<div class="track-info">
											<h5>Sweet But Psycho</h5>
											<p>Ava Max</p>
										</div>
									</div>
									<div class="col-lg-7 col-sm-8 text-right">
										<div class="conterols">
											<div class="jp-gui jp-interface">
												<div class="jp-controls">
													<button class="jp-shuffle" tabindex="0"><i class="fa fa-random"
															aria-hidden="true"></i></button>
													<button class="jp-previous" tabindex="0"><i
															class="fa fa-step-backward"></i></button>
													<button class="jp-play" tabindex="0"><i class="fa fa-play"
															aria-hidden="true"></i></button>
													<button class="jp-next" tabindex="0"><i
															class="fa fa-step-forward"></i></button>
													<div class="jp-volume-controls">
														<button class="jp-mute" tabindex="0"><i
																class="fa fa-volume-up"
																aria-hidden="true"></i></button>
														<div class="jp-volume-bar">
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
													<div class="jp-time-holder">
														<div class="jp-current-time" role="timer" aria-label="time">
															&nbsp;</div> /
														<div class="jp-duration" role="timer" aria-label="duration">
															&nbsp;</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6  p-0">
						<div class="player_right">
							<div class="section-title">
								<div class="sub-title">Latest Music</div>
								<h2>Free to Listen from coldplay!</h2>
							</div>
							<div class="jp-playlist audio-playlist">
								<ul>
									<li>&nbsp;</li>
								</ul>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or
								update your <a href="https://get.adobe.com/flashplayer/" target="_blank">Flash
									plugin</a>.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="video__section set-bg" data-setbg="img/video-overlay.png">
	<div class="container">
		<div class="section-title text-center pb-3">
			<div class="sub-title">Our Documentary</div>
			<h2>More from our insight</h2>
		</div>
		<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
			<div class="jp-type-playlist video-player">
				<div class="row">
					<iframe width="1904" height="838" src="https://www.youtube.com/embed/IiHojR7M8zM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="gallery__page">
	<div class="container">
		<div class="row m-0">
			<div class="col-lg-6 p-0" >
				<a href="../../theme/hnband/img/gallery/1.jpg" class="gallery__item">
					<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/1.jpg" alt="" data-pagespeed-url-hash="692768302"
						onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					<i class="fa fa-search-plus"></i>
				</a>
			</div>
			<div class="col-lg-6 p-0">
				<div class="row m-0">
					<div class="col-md-6 p-0">
						<a href="../../theme/hnband/img/gallery/2.jpg" class="gallery__item">
							<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/2.jpg" alt=""
								data-pagespeed-url-hash="987268223"
								onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<i class="fa fa-search-plus"></i>
						</a>
					</div>
					<div class="col-md-6 p-0">
						<a href="../../theme/hnband/img/gallery/3.jpg" class="gallery__item">
							<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/3.jpg" alt=""
								data-pagespeed-url-hash="1281768144"
								onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<i class="fa fa-search-plus"></i>
						</a>
					</div>
				</div>
				<a href="../../theme/hnband/img/gallery/4.jpg" class="gallery__item">
					<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/4.jpg" alt="" data-pagespeed-url-hash="1576268065"
						onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					<i class="fa fa-search-plus"></i>
				</a>
			</div>
			<div class="col-lg-6 p-0">
				<div class="row m-0">
					<div class="col-md-6 p-0">
						<a href="../../theme/hnband/img/gallery/5.jpg" class="gallery__item">
							<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/5.jpg" alt=""
								data-pagespeed-url-hash="1870767986"
								onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<i class="fa fa-search-plus"></i>
						</a>
						<a href="../../theme/hnband/img/gallery/6.jpg" class="gallery__item">
							<img src="../../theme/hnband/img/gallery/6.jpg" alt=""
							data-aos="zoom-out-down" data-pagespeed-url-hash="2165267907"
								onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<i class="fa fa-search-plus"></i>
						</a>
					</div>
					<div class="col-md-6 p-0">
						<a href="../../theme/hnband/img/gallery/7.jpg" class="gallery__item">
							<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/7.jpg" alt=""
								data-pagespeed-url-hash="2459767828"
								onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
							<i class="fa fa-search-plus"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 p-0">
				<a href="../../theme/hnband/img/gallery/8.jpg" class="gallery__item">
					<img data-aos="zoom-out-down" src="../../theme/hnband/img/gallery/8.jpg" alt="" data-pagespeed-url-hash="2754267749"
						onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					<i class="fa fa-search-plus"></i>
				</a>
			</div>
		</div>
	</div>
</div>
<section class="shows__section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="section-title">
					<div class="sub-title">Upcoming Shows</div>
					<h2>Our Next EVENTS</h2>
				</div>
			</div>
		</div>
		@foreach($data['events'] as $event)
		<div class="show__item" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
			<div class="show__date">
				<h2>{{ Carbon\Carbon::parse($event->date)->format('d') }}</h2>
				<p>{{ Carbon\Carbon::parse($event->date)->format('M') }}</p>
			</div>
			<div class="show__title">
				<h4>{{$event->title}}</h4>
				<p>{{$event->description}}</p>
			</div>
			<div class="show__location">
				<p><i class="fa fa-map-marker"></i> {{$event->location}} </p>
			</div>
			<div class="show__time">
				<p><i class="fa fa-clock-o"></i>{{Carbon\Carbon::parse($event->time)->format('h:i')}}</p>
			</div>
		</div>
		@endforeach
	</div>
</section>
@endsection