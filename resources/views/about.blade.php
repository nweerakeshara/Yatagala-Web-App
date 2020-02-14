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

            <br><br>

            <div class="container" style="border-radius:5px; background-color: #f2f2f2;  padding: 20px; ">
            <h3>A Brief Introduction</h3>
                <p>Yatagala rajamaha viharaya, located in galle district near unawatuna. This rajamaha viharaya has a long history dates back to 307 BCE as the oldest Buddhist temple in galle district. Yatagala rajamaha viharaya is important to Sri Lankan Buddhist due it’s historical value, location, religious and cultural importance and social services to the people of the surrounding villages done by the temple.</p>
            </div>


        <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>