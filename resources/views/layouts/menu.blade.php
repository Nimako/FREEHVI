<script id="s9-sdk" async defer content="5190eb4f2618482f8eb26fba15224702" src="//cdn.social9.com/js/socialshare.min.js"></script>	
	<div id="wrapper">
		<!-- Page -->
		
		<div class=" <?= Request::segment(1)==""?'page-wrapper':null?>">
			<!-- Header -->
			<header class="page-header variant-2 fullboxed sticky always">
				<div class="navbar" style="background-color:purple;color:#fff">
					<div class="container">
						<!-- Menu Toggle -->
						<div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a></div>
						<!-- /Menu Toggle -->
						<!-- Header Cart -->
						<div class="header-link dropdown-link header-cart variant-1">
							<a href="{{url('checkout')}}"> <i class="icon icon-cart"></i> <span class="badge">{{Cart::getContent()->count()}}</span> </a>
						
						</div>
						<!-- /Header Cart -->
						<!-- Header Links -->
						<div class="header-links">
							<!-- Header Language -->
							<div class="header-link header-select dropdown-link header-language">

								<div id="google_translate_element" class="text-white"></div>
								
								{{-- <a href="#"><img src="{{ asset('asset/images/flags/eng.png')}}" alt /></a>
								<ul class="dropdown-container">
									<li class="active">
										<a href="#"><img src="{{ asset('asset/images/flags/eng.png')}}" alt />English</a>
									</li>
									<li>
										<a href="#"><img src="{{ asset('asset/images/flags/fr.png')}}" alt />French</a>
									</li>
									
								</ul> --}}
							</div>
							<!-- /Header Language -->
						
							<!-- Header Account -->
							<?php /*<div class="header-link dropdown-link header-account">
								<a href="#"><i class="icon icon-user"></i></a>
								<div class="dropdown-container right">
									<div class="title">Registered Customers</div>
									<div class="top-text">If you have an account with us, please log in.</div>
									<!-- form -->
									<form action="#">
										<input type="text" class="form-control" placeholder="E-mail*">
										<input type="text" class="form-control" placeholder="Password*">
										<button type="submit" class="btn">Sign in</button>
									</form>
									<!-- /form -->
									<div class="title">OR</div>
									<div class="bottom-text">Create a <a href="account-create.html">New Account</a></div>
								</div>
							</div> */ ?>
							<!-- /Header Account -->
						</div>
						<!-- /Header Links -->
				
						<!-- Logo -->
						<div class="header-logo">
							<a href="{{url('')}}" title="Logo" style="color:#fff">
							<img src="{{asset('asset/images/logo.jpg')}}">
							</a>
						</div>
						<!-- /Logo -->
						<!-- Mobile Menu -->
						<div class="mobilemenu dblclick" style="background-color:purple;color:#fff">
							<div class="mobilemenu-header">
								<div class="title">MENU</div>
								<a href="#" class="mobilemenu-toggle"></a>
							</div>
							<div class="mobilemenu-content">
								<ul class="nav">
                                    <li><a href="{{url('')}}" title="">Home</a></li>
                                    <li><a href="{{url('about-us')}}" title="">About Us</a></li>	
									<li><a href="{{url('products')}}">Products</a></li>
									<li><a href="{{url('our-potency')}}" title="">Our Pontency</a></li>
									<li><a href="{{url('mission-vision')}}" title="">Mission & Vision</a></li>
									<li class=""><a href="{{url('gallery')}}">Gallery</a></li>
									<li><a href="{{url('contact-us')}}" title="">Contact Us</a></li>
                                    <li><a href="https://backoffice.freedomhint.com/" title="">Login</a></li>
								</ul>
							</div>
						</div>
						<!-- Mobile Menu -->
						<!-- Mega Menu -->
						<div class="megamenu fadein blackout">							
                            <ul class="nav">
							<li><a href="{{url('')}}" title="">Home</a></li>
							<li class="simple-dropdown">
								<a href="#" title="">About Us</a>
								<div class="sub-menu" style="max-height: 562px;">
									<ul class="category-links">
										<li>
											<a href="{{url('our-potency')}}" title="">Our Pontency</a>
											<a href="{{url('mission-vision')}}" title="">Mission & Vision</a>
										</li>
									</ul>
								</div>
							</li>
								<li class=""><a href="{{url('products')}}">Products</a></li>

								<li><a href="{{url('business-packages')}}" title="">Business Packages</a></li>


								<li class="simple-dropdown">
									<a href="#" title="">MEMBERSHIP</a>
									<div class="sub-menu" style="max-height: 562px;">
										<ul class="category-links">
											<li>
												<a href="" title="">How to Earn</a>
												<a href="" title="">Ways to Earn</a>
												<a href="" title="">Compesation</a>
											</li>
										</ul>
									</div>
								</li>

								<li class=""><a href="{{url('gallery')}}">Gallery</a></li>


								<li><a href="{{url('contact-us')}}" title="">Contact Us</a></li>

                                <li><a href="https://backoffice.freedomhint.com/" title="">Login</a></li>

							</ul>
						</div>
						<!-- /Mega Menu -->
					</div>
				</div>
			</header>
			<!-- /Header -->
            <!-- Sidebar -->
            
			<div class="sidebar-wrapper">
				<div class="sidebar-top"><a href="#" class="slidepanel-toggle"><i class="icon icon-left-arrow-circular"></i></a></div>
				<ul class="sidebar-nav">
					<li> <a href="index-2.html">HOME</a> </li>
					<li> <a href="gallery.html">GALLERY</a> </li>
					<li> <a href="blog.html">BLOG</a> </li>
					<li> <a href="category-fixed-sidebar.html">SHOP</a> </li>
					<li> <a href="faq.html">FAQ</a> </li>
					<li> <a href="contact.html">CONTACT</a> </li>
				</ul>
				<div class="sidebar-bot">
					<div class="share-button toTop">
						<span class="toggle"></span>
						<ul class="social-list">
							<li>
								<a href="#" class="icon icon-google google"></a>
							</li>
							<li>
								<a href="#" class="icon icon-fancy fancy"></a>
							</li>
							<li>
								<a href="#" class="icon icon-pinterest pinterest"></a>
							</li>
							<li>
								<a href="#" class="icon icon-twitter-logo twitter"></a>
							</li>
							<li>
								<a href="#" class="icon icon-facebook-logo facebook"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
            <!-- /Sidebar -->