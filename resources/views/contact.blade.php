<!DOCTYPE html>
<html lang="en">
    <head>

        @extends('head')

         @section('title', 'Contact us page')

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
                                    <h1>Contact Us page</h1>
                                    <ul class="breadcrumb">
                                        <li><a href="/">Home</a></li>
                                        <li class="active">Contact Us</li>
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
            <h3>Contact Form</h3>
            <br>
            <form action="/action_page.php">
            <label for="fname">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <br><br>
            <label for="lname">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Your Email" required>   
	        <br><br>
    
            <label for="lname">Contact Number</label><br>
            <input type="text" id="cnumber" name="cnumber" placeholder="Your Email" required>   
	        <br><br>
    
            <label for="subject">Message</label>
            <textarea id="msg" name="msg" placeholder="Write something.." required style="height:200px"></textarea>

            <input type="submit" value="Submit" style="background-color: #4CAF50;
  				color: white;  padding: 12px 20px;  border: none;  border-radius: 4px;
  				cursor: pointer;">
            </form>
            </div>


        <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>