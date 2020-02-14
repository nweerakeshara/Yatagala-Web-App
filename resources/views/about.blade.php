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
                <p>Yatagala Raja Maha Viharaya dates back to 307 BCE is a Buddhist place of worship that has been recipient of Royal Patronage from Three Kings of Sri Lanka. It was established during the reign of King Devanam Piyatissa of the Anuradhapura period, when one of the first saplings from the revered Sri Maha Bodhi Tree was planted here.</p>
                <p>It is said that, King Parakrama Bahu the Second of the Dambadeniya period ordered his Minister Devapathiraja to build the 18 riyan reclining Buddha astute in the cave of the gigantic rock outcrop, which infact gave the name.</p>
                <p>During the days of the last King of Sri Lanka, King Sri Vikrama Rajasinghe of Kandy the temple was bestowed with Nindagam or gift of land and many other valuable gifts, which are todate in the custody of the Viharadipathi of the Temple. During the time of British Colonial Rule, the incumbent Chief Priest cultivated a strong friendship with Govner Marshall and one of the Buddhist Schools established then was named after him and still bears the name.</p>
                <p>In the past eighteen temples were under the administration of the Viharadipathi of Yatagala Temple and the custodianship of Sithulpawwa Raja Maha Vihara and MagulMaha Vihara were also bestowed to Yatagala.</p>
                <p>In more recent times Yatagala was declared a Sacred Area and development work was initiated to restore it to past glory.</p>
                <p>Whilst the State developed the infrastructure facilities, the Dayakas of the temple came forward with donations to put up a Golden Fence around the Bodhi Tree and also installed a Samadhi Buddah statue under the majestic bo tree. The Cavern formed by four huge granite boulders was also turned into a Meditation Hall and granite Samadhi Buddha Statue was installed inside.</p>
                <p>Our service to the people includes a Cyber Education Center, Pirivena, Dhamma School and an active Dhayaka Sabhawa.</p>
            </div>


        <br><br>
        <!--Footer-->
            @include('footer')
        <!--/Footer-->
    </body>

</html>