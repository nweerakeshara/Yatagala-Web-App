<!DOCTYPE html>
<html lang="en">
	<head>
		@extends('head')

		@section('title','Sunday-school page')
	</head>
	<body>
			<!-- HEADER -->

				<!--Navigation-->

				@include('nav')
				<!--/Navigation-->

			<!-- Page Header -->
			<div id="page-header">
				<!-- section background -->
				<div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
				<!-- /section background -->

				<!-- page header content -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="header-content">
								<h1>Sunday school Page</h1>
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li><a href="#">Sunday school</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header content -->
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /HEADER -->
		<br><br>
		<div class="container" style="border-radius:5px; background-color: #f2f2f2;  padding: 20px; ">
			<h3>Sunday School</h3>
			<p>Sunday school which is commonly known as Dhamma school currently provide education to more than 800 students while Academic stuff consist more than 25 lecturers.</p>
			<p>Dhamma school provides education related to Buddhisam and Buddhist culture in both Sinhala medium and English medium eduction.</p>
			<br>
			<p>Current principal - Ven. Padalangala Assaji Thero - Masters at university of Ruhuna,  Shasthra Vedhi university of Ruhuna, Well reputed Author</p>
			<br>
			
		</div>>

		<br><br>
		
		<!-- FOOTER -->
			@include('footer')
		<!-- /FOOTER -->

		
	</body>
</html>
