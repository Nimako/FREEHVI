@extends('layouts.tempMain')


@section('content')



<style>

    .box-title {color: purple}

    .box-text{color: purple}

    </style>



    <!-- Page Content -->

    <main class="page-main">



        <div class="block fullwidth full-nopad bottom-space">

            <div class="container">

                <!-- Main Slider -->

                <div class="mainSlider" data-thumb="true" data-thumb-width="230" data-thumb-height="100">

                    <div class="sliderLoader">Loading...</div>

                    <!-- Slider main container -->

                    <div class="swiper-container">

                        <div class="swiper-wrapper">

                            <!-- Slides -->

                            <div class="swiper-slide" data-thumb="{{ asset('asset/images/slider/slider1.jpg')}}" data-href="#" data-target="_blank">

                                <!-- _blank or _self ( _self is default )-->

                                <div class="wrapper">

                                    <figure><img src="{{ asset('asset/images/slider/slider1.jpg')}}" alt=""></figure>

                                    <div class="text2-1 animate" data-animate="flipInY" data-delay="0">  </div>

                                    <div class="text2-2 animate" data-animate="bounceIn" data-delay="500"> </div>

                                    <div class="text2-3 animate" data-animate="bounceIn" data-delay="1000">  </div>

                                    <div class="text2-4 animate" data-animate="rubberBand" data-delay="1500">  </div>

                                    <div class="text2-5 animate" data-animate="hinge" data-delay="2000">  </div>

                                </div>

                            </div>

                            <div class="swiper-slide" data-thumb="{{ asset('asset/images/slider/slider2.jpg')}}">

                                <div class="wrapper">

                                    <figure><img src="{{ asset('asset/images/slider/slider2.jpg')}}" alt=""></figure>

                                    <div class="text3-1 animate" data-animate="bounceInDown" data-delay="0">  </div>

                                    <div class="text3-2 animate" data-animate="bounceInDown" data-delay="500">  </div>

                                    <div class="text3-3 animate" data-animate="bounceInDown" data-delay="1000">  </div>

                                    <div class="text3-4 animate" data-animate="bounceIn" data-delay="1500">  </div>

                                    <div class="text3-5 animate" data-animate="bounceIn" data-delay="2000">  </div>

                                    <a href="#" class="text3-6 animate" data-animate="rubberBand" data-delay="2500">  </a>

                                </div>

                            </div>



                            <div class="swiper-slide" data-thumb="{{ asset('asset/images/slider/slider3.jpg')}}">

                                <div class="wrapper">

                                    <figure><img src="{{ asset('asset/images/slider/slider3.jpg')}}" alt=""></figure>

                                </div>

                            </div>

                        </div>

                        <!-- pagination -->

                        <div class="swiper-pagination"></div>

                        <!-- pagination thumbs -->

                        <div class="swiper-pagination-thumbs">

                            <div class="thumbs-wrapper">

                                <div class="thumbs"></div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- /Main Slider -->

            </div>

        </div>

        <div class="block">

            <div class="container">

                <!-- Wellcome text -->

                <div class="text-center bottom-space">

                    <center>

                    

                    <h1 style="color:purple">At Freedom Health Int. Vision We Do Things with the Smarter Techniques

                    </h1>

                    <div class="line-divider"></div>

                    <p class="custom-color-alt" style="font-size:1.3em">It embodies the whole of our business culture from caring for our loyal consumers to equipping our members with ingenious means to excel. As you entrust your shopping needs in our hands, you enjoy incomparable value on every purchase of our wide-ranging, world-class products. We further empower you with our uniquely crafted business model so you could achieve an unpresedented financial edge, simply because you choose the smarter way to shop with us!

                    </p>

                    </center>

                </div>

                <!-- /Wellcome text -->

            </div>

        </div>

        <div class="block">

            <div class="container">

                <center>

                    <h2>Our Business Packages</h2>

                </center>



                <div class="row" style="margin-bottom:20px">

                    <div class="col-md-3">

                        <div class="box2 style2 bgcolor2 text-center row">

                            <h3 class="box-title">CONSUMER</h3>

                            <div class="box-icon">

                            <img class="img-responsive packages-img"  src="{{asset('asset/images/packages/consumer.jpg')}}">

                            </div> 

                        </div>

                    </div>

                    

                    <div class="col-sm-3">

                        <div class="box2 style2 bgcolor2 text-center" style="border:4px solid #F7F7F7">

                            <h3 class="box-title">MEMBER</h3>

                            <div class="box-icon">

                                <img class="img-responsive packages-img" src="{{asset('asset/images/packages/member.jpg')}}">

                            </div> 									

                        </div>

                    </div>

                



                    <div class="col-sm-3">

                        <div class="box2 style2 bgcolor2 text-center">

                            <h3 class="box-title">ASSOCIATE</h3>

                            <div class="box-icon">

                                <img class="img-responsive packages-img" src="{{asset('asset/images/packages/associate.jpg')}}">

                                </div> 									

                        </div>

                    </div>

                    



                    <div class="col-sm-3">

                        <div class="box2 style2 bgcolor2 text-center ">

                            <h3 class="box-title">EXECUTIVE</h3>

                            <div class="box-icon">

                                <img class="img-responsive packages-img" src="{{asset('asset/images/packages/executive.jpeg')}}">

                            </div> 									

                        </div>

                    </div>



                </div>



                <div class="col-md-12" style="margin-top:30px;margin-bottom:30px">

                    <center><a class="btn btn-danger" href="{{url('business-packages')}}">See more</a></center>

                </div>



             



            </div>

        </div>



        <div class="block bottom-space" style="padding:30px;margin-top:80px">

            

            <div class="container">

                <div class="row">



                    <section class="col-md-6">



                        <center>

                            <h2>QUALITY PRODUCTS WITH A DIFFERENCE</h2>

                        </center>

                        <p style="font-size:1.4em;text-align:justify">

                            <b>Innovative and Human-friendly</b><br>

                            FREEDOM HEALTH INTERNATIONAL VISION provide an extensive range of quality and innovative products made possible by our global team of leading researchers and collaborative partners dedicated to delivering excellence. Our doctrine of doing things the smarter way extends deeper as we are equally committed to secure the environment. Safe products for you and safe practices for the environment – that is our unwavering pledge!                            

                        </p>

                    </section>



                    <section class="col-md-6">



                        <img class="img-responsive" src="{{ asset('asset/images/banners/products.jpeg')}}" alt="Banner" width="550px">

 

                     </section>

                </div>

            </div>

        </div>



        <div class="block bottom-space" style="background-color:#fff;padding:30px">

            

            <div class="container">



                <div class="row">



                    <div class="col-md-6">

                        <img class="img-responsive" src="{{ asset('asset/images/banners/join-us.jpeg')}}" alt="Banner" width="550px">



                    </div>



                    <div class="col-md-6">



                        <center>

                            <h2>JOIN NOW</h2>

                        </center>

                        <p style="font-size:1.2em;text-align:center">

                            Be a Smart distributor, Smart Earner or be your own boss with FREEDOM HEALTH INTERNATIONAL VISION. We thrive in providing you the best - whatever your needs may be. Start your journey towards financial freedom today!

                        </p>

                        <center>

                            <button class="btn btn-bg btn-primary" style="background-color:purple">Sign Up Now</button>

                        </center>

                        

                    </div>

                </div>



                </div>

            </div>

        </div>

        <div class="block bottom-space">

            <div class="container">

                <div class="row">

                    

                </div>



            </div>

        </div>



        

    

    </main>

    <!-- /Page Content -->

    

@endsection