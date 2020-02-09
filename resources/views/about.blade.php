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
                                    <h1>About page</h1>
                                    <ul class="breadcrumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active">About</li>
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
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>