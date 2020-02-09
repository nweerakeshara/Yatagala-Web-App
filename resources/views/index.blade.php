<!DOCTYPE html>
<html lang="en">

<head>
	@extends('head')

	@section('title','Home page')

</head>

<body>
	<!-- HEADER -->
		<!--Navigation-->

		@include('nav')
		<!--/Navigation-->

		<!-- HOME OWL -->
		<div id="home-owl" class="owl-carousel owl-theme">
			<!-- home item -->
			<div class="home-item">
				<!-- section background -->
				<div class="section-bg" style="background-image: url(./img/background-1.jpg);"></div>
				<!-- /section background -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>Save The Children</h1>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="primary-button">View Causes</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->

			<!-- home item -->
			<div class="home-item">
				<!-- Background Image -->
				<div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
				<!-- /Background Image -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>Become A Volunteer</h1>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="primary-button">Join Us Now!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->


		<!-- home item -->
		<div class="home-item">
				<!-- Background Image -->
				<div class="section-bg" style="background-image: url(./img/background-3.jpg);"></div>
				<!-- /Background Image -->

				<!-- home content -->
				<div class="home">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="home-content">
									<h1>Become A Volunteer</h1>
									<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<a href="#" class="primary-button">Join Us Now!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /home content -->
			</div>
			<!-- /home item -->




		</div>
		<!-- /HOME OWL -->
	</header>
	<!-- /HEADER -->

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-5">
					<div class="section-title">
						<h2 class="title">Welcome to Yatagala Raja Maha Viharaya</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="about-content">
						
						<a href="#" class="primary-button">Read More</a>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-6">
					<a href="#" class="about-video">
							<i class="play-icon fa fa-play"></i>
							<img src="./img/about.jpg" alt="">
						</a>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	

				<!-- section title 
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Our Causes</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			 section title -->

				<!-- causes 
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="/single-cause">
									<img src="./img/post-1.jpg" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 87%;">
									<span>87%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="/single-cause">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="/single-cause" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				 /causes -->

				<!-- causes 
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="/single-cause">
									<img src="./img/post-2.jpg" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="/single-cause">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="/single-cause" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				 /causes -->

				<!-- causes 
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="/single-cause">
								<img src="./img/post-3.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="/single-cause">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="/single-cause" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>/
				</div>
				 /causes -->

				<!-- <div class="clearfix visible-md visible-lg"></div> -->

				<!-- causes 
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="/single-cause">
								<img src="./img/post-4.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 64%;">
									<span>64%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="/single-cause">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="/single-cause" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				 /causes -->

				<!-- causes 
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="/single-cause">
								<img src="./img/post-5.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="/single-cause">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="/single-cause" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				 /causes -->

				<!-- causes 
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="/single-cause">
								<img src="./img/post-6.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="/single-cause">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<a href="/single-cause" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				 /causes -->
			<!-- </div> -->
			<!-- /row -->
		<!-- </div> -->
		<!-- /container -->
	<!-- </div> -->
	<!-- /CAUSESS -->

	<!-- CTA -->
	<!-- <div id="cta" class="section"> -->
		<!-- background section -->
		<!-- <div class="section-bg" style="background-image: url(./img/background-1.jpg);" data-stellar-background-ratio="0.5"></div>
		/background section -->

		<!-- container -->
		<!-- <div class="container"> -->
			<!-- row -->
			<!-- <div class="row"> -->
				<!-- cta content -->
				<!-- <div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center"> -->
						<!-- <h1>Become A Volunteer</h1>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="#" class="primary-button">Join Us Now!</a>
					</div> -->
				<!-- </div> -->
				<!-- /cta content -->
			<!-- </div> -->
			<!-- /row -->
		<!-- </div> -->
		<!-- /container -->
	<!-- </div> -->
	<!-- /CTA -->

	<!-- EVENTS -->
	<div id="events" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Events</h2>
						<p class="sub-title">This section will contain details about the events that will take place at Yatagala Raja Maha Viharaya.</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- event -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="/single-event">
								<img src="./img/event-1.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="/single-event">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /event -->

				<!-- event -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="/single-event">
								<img src="./img/event-2.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="/single-event">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /event -->

				<div class="clearfix visible-md visible-lg"></div>

				<!-- event -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="/single-event">
								<img src="./img/event-3.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="/single-event">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /event -->

				<!-- event -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="/single-event">
								<img src="./img/event-4.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="/single-event">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /event -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /EVENTS -->

	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								
								<h3>Lord Buddha</h3>
								
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>No one saves us but ourselves. No one can and no one may. We ourselves must walk the path.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								
								<h3>Sir Henry Steel Olcott</h3>
								
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Everything in the world of Matter is unreal; the only reality is in the world of Spirit.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								
								<h3>Ven. Anagarika Dharmapala</h3>
								
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>To save the world from ignorance by means of wisdom and love was the object of the Buddha.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								
								<h3>Lord Buddha</h3>
								
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Love the whole world as a mother loves her only child.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /TESTIMONIAL -->

	<!-- BLOG -->
	<div id="blog" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Our Blog</h2>
						<p class="sub-title">This section will contain religious posts related to Buddhisam, Sri Lanka , Local Culture.</p>
					</div>
				</div>
				<!-- /section title -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="article">
						<div class="article-img">
							<a href="/single-blog">
								<img src="./img/post-1.jpg" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="/single-blog">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<ul class="article-meta">
								<li>12 November 2018</li>
								<li>By John doe</li>
								<li>0 Comments</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="article">
						<div class="article-img">
							<a href="/single-blog">
								<img src="./img/post-2.jpg" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="/single-blog">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
							<ul class="article-meta">
								<li>12 November 2018</li>
								<li>By John doe</li>
								<li>0 Comments</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="article">
						<div class="article-img">
							<a href="/single-blog">
								<img src="./img/post-3.jpg" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="/single-blog">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
							<ul class="article-meta">
								<li>12 November 2018</li>
								<li>By John doe</li>
								<li>0 Comments</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<!-- /blog -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->

	<!-- FOOTER -->
		@include('footer')
	<!-- /FOOTER -->

	
</body>

</html>
