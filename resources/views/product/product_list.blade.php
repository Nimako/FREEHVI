
@extends('layouts.tempMain')

@section('content')

<style>


</style>

 
	<main class="page-main" style="margin-top:3px;background-color:#ffffff">
		<div class="bloc">
			<div class="" id="menu-outer" style="background-color:#ffffff;text-align:center">
				<div class="table">
				  <ul id="horizontal-list">
					 <?php if(!empty($category)): ?>
					 <?php foreach($category as $row): ?>
				  <li><a href="{{url('product/category/'.$row->slug)}}"><?= Ucwords($row->category); ?></a></li>
					<?php endforeach; ?>
					<?php endif; ?>
				  </ul>
				</div>
			  </div><br><br>
		</div> 

		<div class="container">
			<!-- Two columns -->
			<div class="row row-table">
				<!-- Left column -->
				<?php /*<div class="col-md-2 filter-col fixed aside">
					<div class="filter-container">
						<div class="fstart"></div>
						<div class="fixed-wrapper">
							<div class="fixed-scroll">
								<div class="filter-col-header">
									<div class="title">Filters</div>
									<a href="#" class="filter-col-toggle"></a>
								</div>
								<div class="filter-col-content">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">Go!</button>
										</span>
										</div><!-- /input-group -->

									<div class="sidebar-block collapsed">
										<div class="block-title">
											<span>Sort by</span>
											<div class="toggle-arrow"></div>
										</div>
										<div class="block-content">
											<ul class="category-list">
												<li class="active"><a href="#" class="value">Product Name (A-Z)</a>
													<a href="#" class="clear"></a>
												</li>
											
											</ul>
											<div class="bg-striped"></div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						<div class="fend"></div>
					</div>
				</div> */ ?>
				<!-- /Left column -->
				<!-- Center column -->
				<div class="col-md-12 aside">
					
					<?php if(isset($cate_info)): ?>
					<ol class="breadcrumb">
					<li><a href="{{url('')}}"><small><span class="icon icon-home "></span></small></a></li>
					<li><a href="{{url('products')}}">Products</a></li>
						<li class="active"><a href=""><?= $cate_info->category; ?></a></li>
					</ol>
					<?php endif; ?>

					<div class="products-grid three-in-row product-variant-3">

					
						<?php if(!empty($list)): ?>
						<?php foreach($list as $row): ?>

					     	<div class="product-item large">
								<div class="product-item-inside">
									<div class="product-item-info">
										<!-- Product Photo -->
										<div class="product-item-photo" style="border:1px solid rgb(238, 140, 238);padding:12px">
											<a href="{{ route('products.show',sha1($row->id)) }}"> 
												<img  class="product-image-photo" src="{{asset('asset/'.$row->featured_image)}}" alt=""> 
											</a>
										</div>
										<!-- /Product Photo -->
										<div class="product-item-details text-center">
											<a title="" href="{{ route('products.show',sha1($row->id)) }}" class="product-item-link">
												<b><?= ucwords(strtolower($row->product_name)); ?></b>
											</a> 
											<p>$ <?= $row->amount_GH; ?></p>
										</div>
					
									</div>
								</div>
							</div>	
						<?php endforeach ?>
						<?php endif; ?>
					
					</div> 


				</div>
				<!-- /Center column -->
			</div>
			<div class="ymax"></div>
			<!-- /Two columns -->
		</div>
	</main>
	<!-- /Page Content -->
	@endsection