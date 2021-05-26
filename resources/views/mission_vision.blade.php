@extends('layouts.tempMain')
@section('content')
            
    <!-- /Sidebar -->
    <main class="page-main">
        <div class="block">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
                    <li>/<span>Mission & Vision</span></li>
                </ul>
            </div>
        </div>

        <div class="block bottom-space" style="background-color:#fff;padding:30px">
            <div class="container">

                <div class="row">

                    <section class="col-md-12">

                      
                     <section class="col-md-6"  style="font-size:1.3em;">
                        <center><b style="color:#231B27;font-size:1.3em">Our Mission</b></center> 
                       <p style="text-align:justify"> To be Earth’s most multi-level marketing-centric company, where cherished distributors can find and discover anything about health and wealth buy online, and endeavors to offer its customers the lowest possible prices. </p>     
                       <br><br>
                       
                       <center> <b style="color:#231B27;font-size:1.3em">Our Vision</b> </center>
                       <p style="text-align:justify;"> To inspire healthier communities by connecting people to our organic products. </p>
                           
                     </section>

                     <section class="col-md-6 "  style="font-size:1.5em;">

                        <img class="img-responsive pull-right" src="{{ asset('asset/images/banners/join-us.jpeg')}}" alt="Banner" width="500">

                    </section>

                    

                    </section>

                </div>

            </div>
        </div>
     

    </main>
            
	@endsection