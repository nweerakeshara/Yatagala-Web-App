<!DOCTYPE html>
<html lang="en">
	<head>
		@extends('head')

		@section('title','Pirivena page')
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
								<h1>Pirivena Page</h1>
								<ul class="breadcrumb">
									<li><a href="/">Home</a></li>
									<li><a href="#">Pirivena</a></li>
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
            <h3>Hettachala Maha Pirivena</h3>
			<p>Hettachala Maha Pirivena started in 1891. Currently this maha pirivena provides education to both local and foriegn monks upto secondary education. Prof. Senarath Paranavithana, Ven. Baddegama Piyarathna Thero and Ven. Rabukana Siddartha Thero are the few of the well recognaized students of this pirivena.</p>
			<br>
			<h4>Academic Stuff</h4>
			<p>Parivenadipathi (principal) - Ven. Kehelwala Summangala Thero - Masters at university of Kelaniya, Shasthra Vedhi university of Keleniya.</p>
			<p>Ven. Padalangala Assaji Thero - Lecturer - Masters at university of Ruhuna,  Shasthra Vedhi university of Ruhuna, Author</p>
			<p>Mr. Sandaruwan Weerasinghe - English medium, BA, MA</p>
		</div>
		<br><br>
		<!-- FOOTER -->
			@include('footer')
		<!-- /FOOTER -->

		
	</body>
</html>
