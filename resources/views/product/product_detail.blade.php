            @extends('layouts.tempMain')
			@section('content')

            <!-- Page Content -->

			<main class="page-main" style="background-color:#ffffff;">

				<div class="block product-block">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								@if ($message = Session::get('success'))

								<div class="alert alert-success alert-block">

									<button type="button" class="close" data-dismiss="alert">×</button>	

										<strong style="color:gray">{{ $message }}</strong>



									<button style="margin:0px 20px 0px 190px" onclick="window.location='{{url('checkout')}}'" class="btn btn-primary btn-md" style="background-color:transparent;color:purple">PROCEED TO  CHECKOUT</button>

								</div>

								<br><br>

								@endif

							</div>



							<div class="col-md-4 col-md-offset-1">

								<!-- Product Gallery -->

								<div class="main-image">

								
									<?php if(!empty($info->featured_image)): ?>

										<img width="350px" src="{{asset('asset/'.$info->featured_image)}}" class="zoom" alt="" data-zoom-image="{{asset('asset/'.$info->featured_image)}}" />

									<?php else: ?>


									<?php endif; ?>

									<div class="dblclick-text"><span>Double click for enlarge</span></div>

								</div>	

								<!-- /Product Gallery -->

							</div>

							<div class="col-md-4">

								<div class="product-info-block classic">



									<div class="product-name-wrapper" style="margin-left:15px;color:purple">

										<h1 class="product-name" style="color:purple"><?= ucwords(strtolower($info->product_name)); ?></h1>

									</div>

									<!--<div class="product-availability">Availability: <span>In stock</span></div> -->

									<div class="product-description" style="margin-left:15px"><br>

										

										<span class="special-price"><b>Retail Price:</b> <span><b> GHS <?= !empty($info)?$info->amount_GH	:null; ?></b></span>

										<br>

										<style>

											tr td {padding:10px}

											.form-control{height: 31px;}

											.btn {height:30px;line-height:30px}

										</style>


									   <form action="{{url('product/add-to-cart')}}" method="POST">
										@csrf

										<table>
											<tr>
												<td><b>QUANTITY</b></td>
												<td>
												<br>
												<input type="hidden" name="product_id" value="<?= sha1($info->id); ?>">
												<input type="number" value="1" min="1" name="quantity" class="form-control"></td>
												<td><button class="btn btn-primary btn-md">Buy Now</button></td>

												<td><button type="submit" class="btn btn-default btn-md">Add Cart</button></td>

											</tr>

										</table>



										{{ Form::close() }}



									



									</div>





									

									<div class="tabaccordion" style="margin-top:-50px">

										<div class="container">

											<!-- Nav tabs -->

											<ul class="nav-tabs product-tab" role="tablist" style="color: purple">

												<li><a href="#Tab1" role="tab" data-toggle="tab">Details</a></li>

												<?php if(!empty($info->how_to_use)): ?>

												<li><a href="#Tab2" role="tab" data-toggle="tab">How To Use</a></li>

												<?php endif; ?>

												<?php if(!empty($info->ingredeant)): ?>

												<li><a href="#Tab3" role="tab" data-toggle="tab">Ingreeant</a></li>

												<?php endif; ?>

											</ul>

											<!-- Tab panes -->

											<div class="tab-content" style="width:800px">

												<div role="tabpanel" class="tab-pane" id="Tab1">

													<p><?= !empty($info->details)?$info->details:null; ?></p>

													<div class="table-responsive">



														<?php if(!empty($info->benefits)): ?>

														 <h4><b>Benefits</b></h4>

													    <?php endif; ?>

														

														<?= !empty($info->benefits)?$info->benefits:null; ?>	



														

													</div>

												</div>

												<div role="tabpanel" class="tab-pane" id="Tab2">



													<?= !empty($info->how_to_use)?$info->how_to_use:null; ?>	



												</div>

												<div role="tabpanel" class="tab-pane" id="Tab3">

													<div class="table-responsive">

														<?= !empty($info->ingredeant)?$info->ingredeant:null; ?>	

													</div>

												</div>

												

											</div>

										</div>

									</div>

									

								</div>

							</div>

                            

						</div>

					</div>

				</div>



            </main>

        

    @endsection

