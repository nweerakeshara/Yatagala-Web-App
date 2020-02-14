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
									<h1>2300 years old </h1>
									<p class="lead">2300 years old Yatagala Raja Maha Viharaya is a Buddhist place of worship that has been recipient of Royal Patronage from Three Kings of Sri Lanka.</p>
									
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
									<h1>Eighteen Temples</h1>
									<p class="lead">In the past eighteen temples were under the administration of the Viharadipathi of Yatagala Temple and the custodianship of Sithulpawwa Raja Maha Vihara and MagulMaha Vihara were also bestowed to Yatagala.</p>
									
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
									<h1>Services to People</h1>
									<p class="lead">Equipped with a Cyber Education Center, Pirivena, Dhamma School and an active Dhayaka Sabhawa. </p>
									
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
						<p class="sub-title">Yatagala Rajamaha Viharaya has a long history that dates back to 307 BCE as the oldest Buddhist temple in Galle district.</p>
					</div>
					<div class="about-content">
						
						<a href="/about" class="primary-button">Read More</a>
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
				@foreach($maxeventr as $event)
				<!-- event -->
				<div class="col-md-6">
				
					<div class="event">
						<div class="event-img">
							<a href="/single-event">
								<img src="./img/event-1.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							
							<h3><a href="/single-event">{{$event -> title}}</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> {{$event -> date_time}}</li>
								<li><i class="fa fa-map-marker"></i>{{$event -> location}}</li>
							</ul>
							
							<p>{{substr($event -> body, 0, 105)}}</p>
						</div>
							
					</div>
				</div>
				<!-- /event -->
				@endforeach
				
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


				@foreach($maxpostr as $post)

				<!-- blog -->
				<div class="col-md-4">
				
					<div class="article">
						<div class="article-img">
							<a href="/single-blog">
								<img src="./img/post-1.jpg" alt="">
							</a>
						</div>
						<div class="article-content">
							<h3 class="article-title"><a href="/single-blog">{{$post -> title}}</a></h3>
							<ul class="article-meta">
								<li>{{$post -> created_at}}</li>
								<li>{{$post -> author}}</li>
								
							</ul>
							<p>{{substr($post -> body, 0, 105)}}</p>
						</div>
						
					</div>
				</div>
				<!-- /blog -->
				@endforeach
				
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
