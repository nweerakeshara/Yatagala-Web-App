<!DOCTYPE html>
<html lang="en">
    <head>

        @extends('head')

         @section('title', 'Organizations page')

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
                                    <h1>Organizations page</h1>
                                    <ul class="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li class="active">Organizations</li>
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
            <div class="container" style="border-radius:5px; background-color: #f2f2f2;  padding: 20px; ">
                <h3>Co-operate Organizations</h3>
                <ul>
                    <li>Young Buddist Society</li>
                    <li>Upasaka Upasika Society</li>
                    <li>Kulagana Society</li>
                    <li>Sithul Pawwa Esala Maha Dhansal Society</li>
                    <li>Dahamma School Development Society</li>
                </ul>
            </div>
            <br><br>
            <div class="container" style="border-radius:5px; background-color: #f2f2f2;  padding: 20px; ">
                <h3>Dhayaka Sabhawa</h3>
                <ul>
                    <li>President - Wing commander Keerthi Kanahara Arachchi</li>
                    <li>Secretry - Mr. Keerthi Kalahe</li>
                    <li>Tresurar - Mr. Saman Jayaneththi</li>
                </ul>
            </div>
            <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>