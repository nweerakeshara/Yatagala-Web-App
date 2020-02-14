<!DOCTYPE html>
<html lang="en">
    <head>

        @extends('head')

         @section('title', 'About-us page')

         <style>

        #msg, #cnumber, #name,  #email {
             width: 100%;
             padding: 12px;
             border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }


        </style>

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
                                    <h1>About page</h1>
                                    <ul class="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li class="active">Posts Page</li>
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

            <br><br>
            @if(count($postlist) > 0)
            @foreach($postlist as $post)
                    <div class="article event-details" style="padding-left:20%; padding-right:20%">
							<!-- article img -->
							<div class="article-img">
								<img src="./img/post-img.jpg" alt="">
							</div>
							<!-- article img -->

							<!-- article content -->
							<div class="article-content">
								<!-- article title -->
								<h2 class="article-title">{{$post -> title}}</h2>
								<!-- /article title -->

								<!-- article meta -->
								<ul class="article-meta">
									
								</ul>
								<!-- /article meta -->

								<p>{{$post -> body}}</p>
							</div>
							<!-- /article content -->

							<!-- event-meta -->
							<ul class="event-meta">
								<li><h4>Post Details</h4></li>
								<li><i class="fa fa-clock-o"></i><strong>Date:</strong> {{$post -> 	created_at }}</li>
                                <li><i class="fa fa-map-marker"></i><strong>Author:</strong> {{$post -> author }}</li>
                                <li><i class="fa fa-map-marker"></i><strong>Posted By:</strong> {{$post -> user_id }}</li>
								
							</ul>
							<!-- /event-meta -->

							
						</div>
                        <!-- /article -->
                        @endforeach
                        @else
                            
                        @endif





        <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>