
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

		<div class="container" >
				
				<!-- Center column -->
				<div class="rowcol-md-10 md-offset-2">

					<p style="font-size:2.3em;margin-bottom:30px;color:#000;text-transformation:underline;font-weight:bold">Picture Gallery</p>

					<head>
					  <meta charset="utf-8">
					  <title>jQuery lightGallery demo</title>
					  <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
					  <style>
					  
						  .demo-gallery > ul {
							  margin-bottom: 0;
						  }
						  .demo-gallery > ul > li {
							  float: left;
							  margin-bottom: 15px;
							  margin-right: 0px;
							  width: 200px;
						  }
						  .demo-gallery > ul > li a {
							  border: 3px solid #FFF;
							  border-radius: 3px;
							  display: block;
							  overflow: hidden;
							  position: relative;
							  float: left;
						  }
						  .demo-gallery > ul > li a > img {
							  -webkit-transition: -webkit-transform 0.15s ease 0s;
							  -moz-transition: -moz-transform 0.15s ease 0s;
							  -o-transition: -o-transform 0.15s ease 0s;
							  transition: transform 0.15s ease 0s;
							  -webkit-transform: scale3d(1, 1, 1);
							  transform: scale3d(1, 1, 1);
							  height: 100%;
							  width: 100%;
						  }
						  .demo-gallery > ul > li a:hover > img {
							  -webkit-transform: scale3d(1.1, 1.1, 1.1);
							  transform: scale3d(1.1, 1.1, 1.1);
						  }
						  .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
							  opacity: 1;
						  }
						  .demo-gallery > ul > li a .demo-gallery-poster {
							  background-color: rgba(0, 0, 0, 0.1);
							  bottom: 0;
							  left: 0;
							  position: absolute;
							  right: 0;
							  top: 0;
							  -webkit-transition: background-color 0.15s ease 0s;
							  -o-transition: background-color 0.15s ease 0s;
							  transition: background-color 0.15s ease 0s;
						  }
						  .demo-gallery > ul > li a .demo-gallery-poster > img {
							  left: 50%;
							  margin-left: -10px;
							  margin-top: -10px;
							  opacity: 0;
							  position: absolute;
							  top: 50%;
							  -webkit-transition: opacity 0.3s ease 0s;
							  -o-transition: opacity 0.3s ease 0s;
							  transition: opacity 0.3s ease 0s;
						  }
						  .demo-gallery > ul > li a:hover .demo-gallery-poster {
							  background-color: rgba(0, 0, 0, 0.5);
						  }
						  .demo-gallery .justified-gallery > a > img {
							  -webkit-transition: -webkit-transform 0.15s ease 0s;
							  -moz-transition: -moz-transform 0.15s ease 0s;
							  -o-transition: -o-transform 0.15s ease 0s;
							  transition: transform 0.15s ease 0s;
							  -webkit-transform: scale3d(1, 1, 1);
							  transform: scale3d(1, 1, 1);
							  height: 100%;
							  width: 100%;
						  }
						  .demo-gallery .justified-gallery > a:hover > img {
							  -webkit-transform: scale3d(1.1, 1.1, 1.1);
							  transform: scale3d(1.1, 1.1, 1.1);
						  }
						  .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
							  opacity: 1;
						  }
						  .demo-gallery .justified-gallery > a .demo-gallery-poster {
							  background-color: rgba(0, 0, 0, 0.1);
							  bottom: 0;
							  left: 0;
							  position: absolute;
							  right: 0;
							  top: 0;
							  -webkit-transition: background-color 0.15s ease 0s;
							  -o-transition: background-color 0.15s ease 0s;
							  transition: background-color 0.15s ease 0s;
						  }
						  .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
							  left: 50%;
							  margin-left: -10px;
							  margin-top: -10px;
							  opacity: 0;
							  position: absolute;
							  top: 50%;
							  -webkit-transition: opacity 0.3s ease 0s;
							  -o-transition: opacity 0.3s ease 0s;
							  transition: opacity 0.3s ease 0s;
						  }
						  .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
							  background-color: rgba(0, 0, 0, 0.5);
						  }
						  .demo-gallery .video .demo-gallery-poster img {
							  height: 48px;
							  margin-left: -24px;
							  margin-top: -24px;
							  opacity: 0.8;
							  width: 48px;
						  }
						  .demo-gallery.dark > ul > li a {
							  border: 3px solid #04070a;
						  }
						  .home .demo-gallery {
							  padding-bottom: 80px;
						  }
					  </style>
				  </head>
		  
				  <div class="demo-gallery" >
					  <ul id="lightgallery" class="list-unstyled ">
		  
						<?php for($x=1;$x<=6;$x++): ?>
						
						  <li class="col-md-4" data-responsive="asset/images/gallery/<?= $x; ?>.jpg" 375, asset/images/gallery/<?= $x; ?>.jpg 480, asset/images/gallery/<?= $x; ?>.jpg 800" data-src="asset/images/gallery/<?= $x; ?>.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
							  <a href="">
							  <img width="100px" class="img-responsive" src="asset/images/gallery/<?= $x; ?>.jpg" alt="Thumb-<?= $x; ?>">
							  </a>
						  </li>
		  
						 <?php endfor; ?>
						  
					  </ul>
				  </div>
				  <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
				  <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
				  <script>
					  lightGallery(document.getElementById('lightgallery'));
				  </script>







					

				

				</div>
				<!-- /Center column -->
			<div class="ymax"></div>
		</div>
	</main>
	<!-- /Page Content -->
	@endsection