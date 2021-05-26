@extends('layouts.tempMain')

@section('content')





         

    <!-- /Sidebar -->

    <main class="page-main">

        <div class="block">

            <div class="container">

                <!--<ul class="breadcrumbs">

                    <li><a href="{{url('/')}}"><i class="icon icon-home"></i></a></li>

                    <li>/<span>Business Packages</span></li>

                </ul>-->

            </div>

        </div>



        <div class="block bottom-space" style="background-color:#fff;padding:30px">

            <div class="container">



                <div class="row">



                    <section class="col-md-12">



                        <center>

                            <h2>Our Business Packages</h2>

                        </center>



                        <div class="row" style="margin-bottom:20px">

                           <?php if(!empty($list)): ?>

                           <?php foreach($list as $package):  ?>

                            <div class="col-md-2">

                                <div class="box2 style2 bgcolor2 text-center" onclick="showPackage('{{$package->name}}','{{$package->url}}','{{$package->price}}')" style="cursor:pointer;border:4px solid #F7F7F7">

                                    <div class="box-icon">

                                    <img class="img-responsive packages-img"  src="{{asset("asset/images/packages/$package->image")}}">                                    

                                </div> 

                                </div><br>

                            </div>

                        <?php endforeach; ?>

                        <?php endif; ?>

                        </div>

                    </section>
                </div>
            </div>
        </div>

    </main>





    <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

        <div class="modal-dialog modal-lg" role="document">

            <div class="modal-content">

            ...

            </div>

        </div>

        </div>



  

            

	@endsection