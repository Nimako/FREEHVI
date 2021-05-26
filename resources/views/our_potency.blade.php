@extends('layouts.tempMain')
@section('content')
            
    <!-- /Sidebar -->
    <main class="page-main">
        <div class="block">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>
                    <li>/<span>Our Potency</span></li>
                </ul>
            </div>
        </div>

        <div class="block bottom-space" style="background-color:#fff;padding:30px">
            <div class="container">

                <div class="row">

                
                        <section class="col-md-12">

                            <img class="img-responsive" src="{{ asset('asset/images/banners/about-1.jpg')}}" alt="Banner" >
                            <br>

                            <p class="" style="font-size:1.2em;text-align:justify">
                                <b>Our pledge to continuously lead you to success:</b>
                                    FREEDOM HEALTH INTERNATIONAL also provides you with a multitude of vital resources and professional trainings so you will be exceedingly confident to take on the challenges on your road to financial success. In addition, your success is our sentiment! To learn more about our smart, individually-business strategies, all you need to do is get in touch with us and we will help bridge your aspirations to your success.
                                    
                            </p><br>
                        </section>


                        <section class="col-md-12">
                            <hr>

                            <img class="img-responsive" src="{{ asset('asset/images/banners/about-2.jpg')}}" alt="Banner">
                            <br>

                            <p class="" style="font-size:1.2em;text-align:justify">
                                <b>Our business prestige gets you the best price</b>
                                Our strong business network and industry know-how give you top-grade products with a real advantage a competitive price mark. As our smart customers, you get to continuously enjoy great products at great prices because of the strength and experience of a big corporation behind you.
                            </p><br>
                        </section>

                        <section class="col-md-12">
                            <hr>

                            <img class="img-responsive" src="{{ asset('asset/images/banners/about-3.jpg')}}" alt="Banner" >
                            <br>

                            <p class="" style="font-size:1.2em;text-align:justify">
                                <b>Our global connection brings you variety and choice</b>
                                Working with collaborators around the globe, FREEDOM HEALTH INTERNATIONAL is able to provide extensive solutions and originalities that meet consumers’ personal and household needs. We constantly refine and update our wide-ranging offerings to satisfy and fulfill our consumers’ needs.
                            </p>
                        </section>

                        <section class="col-md-12">
                            <hr>

                            <img class="img-responsive" src="{{ asset('asset/images/banners/about-4.jpg')}}" alt="Banner" >
                            <br>

                            <p class="" style="font-size:1.3em;text-align:justify">
                                <b>Our expertise and care ensure you enjoy safe and quality products</b>
                                With our history comes knowledge and experience. We pride ourselves as a responsible and caring company, focusing every effort to ensure the safety of all our products. In advocating healthier, safer and greener living, we make sure all our products meet stringent quality control, comply with international standards and are also human-friendly – free of harmful ingredients.
                            </p>
                        </section>
                        


                </div>

            </div>
        </div>
     

    </main>
            
	@endsection