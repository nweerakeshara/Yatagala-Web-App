<!DOCTYPE html>
<html lang="en">
    <head>

        @extends('head')

         @section('title', 'About-us page')

       

    </head>
    
    <body>
        <!--Navigation-->
            @include('nav')
        <!--/Navigation-->
        <header>
                
        
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
                                    <h1>Events Page</h1>
                                    <ul class="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li class="active">Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /page header content -->
                </div>
                <!-- /Page Header -->
            
            <!-- /HEADER -->
            </header>

            <br><br>
            @if(count($event1) > 0)
            @foreach($event1 as $event)
            <div class="article event-details" style="padding-left:20%; padding-right:20%">
							<!-- article img -->
							<div class="article-img">
								<img src="./img/post-img.jpg" alt="">
							</div>
							<!-- article img -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$event -> title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									
								</ul>
								<!-- /article meta -->

								<p>{{$event -> body}}</p>
							</div>
							<!-- /article content -->

							<!-- event-meta -->
							<ul class="event-meta">
								<li><h4>Event Details</h4></li>
								<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$event -> date_time}}</li>
								<li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$event -> location}}</li>
								
							</ul>
							<!-- /event-meta -->

							
						</div>
                        <!-- /article -->
                        @endforeach
                        @else
                            
                        @endif



                        @if(count($event2) > 0)
            @foreach($event2 as $event)
            <div class="article event-details" style="padding-left:20%; padding-right:20%">
							<!-- article img -->
							<div class="article-img">
								<img src="./img/post-img.jpg" alt="">
							</div>
							<!-- article img -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$event -> title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									
								</ul>
								<!-- /article meta -->

								<p>{{$event -> body}}</p>
							</div>
							<!-- /article content -->

							<!-- event-meta -->
							<ul class="event-meta">
								<li><h4>Event Details</h4></li>
								<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$event -> date_time}}</li>
								<li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$event -> location}}</li>
								
							</ul>
							<!-- /event-meta -->

							
						</div>
                        <!-- /article -->
                        @endforeach
                        @else
                            
                        @endif
                        



                        @if(count($event3) > 0)
            @foreach($event3 as $event)
            <div class="article event-details" style="padding-left:20%; padding-right:20%">
							<!-- article img -->
							<div class="article-img">
								<img src="./img/post-img.jpg" alt="">
							</div>
							<!-- article img -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$event -> title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									
								</ul>
								<!-- /article meta -->

								<p>{{$event -> body}}</p>
							</div>
							<!-- /article content -->

							<!-- event-meta -->
							<ul class="event-meta">
								<li><h4>Event Details</h4></li>
								<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$event -> date_time}}</li>
								<li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$event -> location}}</li>
								
							</ul>
							<!-- /event-meta -->

							
						</div>
                        <!-- /article -->
                        @endforeach
                        @else
                            
                        @endif
                        



                        @if(count($event4) > 0)
            @foreach($event4 as $event)
            <div class="article event-details" style="padding-left:20%; padding-right:20%">
							<!-- article img -->
							<div class="article-img">
								<img src="./img/post-img.jpg" alt="">
							</div>
							<!-- article img -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$event -> title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									
								</ul>
								<!-- /article meta -->

								<p>{{$event -> body}}</p>
							</div>
							<!-- /article content -->

							<!-- event-meta -->
							<ul class="event-meta">
								<li><h4>Event Details</h4></li>
								<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$event -> date_time}}</li>
								<li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$event -> location}}</li>
								
							</ul>
							<!-- /event-meta -->

							
						</div>
                        <!-- /article -->
                        @endforeach
                        @else
                            
                        @endif
                        


                        @if(count($event5) > 0)
            @foreach($event5 as $event)
            <div class="article event-details" style="padding-left:20%; padding-right:20%">
							<!-- article img -->
							<div class="article-img">
								<img src="./img/post-img.jpg" alt="">
							</div>
							<!-- article img -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$event -> title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									
								</ul>
								<!-- /article meta -->

								<p>{{$event -> body}}</p>
							</div>
							<!-- /article content -->

							<!-- event-meta -->
							<ul class="event-meta">
								<li><h4>Event Details</h4></li>
								<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$event -> date_time}}</li>
								<li><i class="fa fa-map-marker"></i><strong>Location:</strong> {{$event -> location}}</li>
								
							</ul>
							<!-- /event-meta -->

							
						</div>
                        <!-- /article -->
                        @endforeach
                        @else
                            
                        @endif
						@foreach($maxeventr as $maxevent)
                        <h3 class="article-title" style="text-align: center"><a href="/nextevent/{{$maxevent-> id}}">Next</a></h3>
                        <h3 class="article-title" style="text-align: center"><a href="/prevevent/{{$maxevent -> id}}">Prev</a></h3>
						@endforeach  
        <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>