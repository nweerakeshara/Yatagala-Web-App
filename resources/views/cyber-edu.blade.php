<!DOCTYPE html>
<html lang="en">
    <head>

        @extends('head')

         @section('title', 'Cyber-education-center page')

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
                                    <h1>Cyber Eduction Center page</h1>
                                    <ul class="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li class="active">Cyber Eduction Center</li>
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
                <h3>Cyber Education Center - Hettachala Maha Pirivena</h3>
                <h4>Hettachala Maha Pirivena Provides Following Courses,</h4>
                <ul>
                    <li>
                        <h5>for Advance Level,</h5>
                        <ul>
                            <li>Sinhala</li>
                            <li>English</li>
                            <li>Pali</li>
                            <li>Sanskrit</li>
                            <li>Buddha Dharmaya</li>
                            <li>Political</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <h5>for Prachina Medium Level,</h5>
                        <ul>
                            <li>Sinhala</li>
                            <li>Pali</li>
                            <li>Sanskrit</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <h5>for Prachina Final Level,</h5>
                        <ul>
                            <li>Sinhala</li>
                            <li>Pali</li>
                            <li>Sanskrit</li>
                        </ul>
                    </li>
                    <br>
                </ul>  
            </div>
            <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>