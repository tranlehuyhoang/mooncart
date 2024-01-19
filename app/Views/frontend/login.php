<?php 
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/components/navbar.php';
require_once __DIR__ . '/inc/footer.php';
?>

<body>
<div class="page-wraper">
	 
	<!-- Header -->
	 
	<!-- Header End -->
	
	<div class="page-content">
		<section class="px-3">
			<div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content">
					<div class="dz-bnr-inr-entry">
						<h1>My Account</h1>
						<nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php url('') ?>"> Home</a></li>
								<li class="breadcrumb-item">My Account</li>
							</ul>
						</nav>	
					</div>
					<div class="registration-media">
						<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/registration/pic2.png" alt="/">
					</div>
				</div>
				<div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
					<div class="login-area">
						<h2 class="text-secondary text-center">Welcome Back</h2>
						<p class="text-center m-b25">welcome please login to your account</p>
						<?php 
							$errorMessage = getFlash('error');
							if ($errorMessage) {
								echo $errorMessage;
							}
							?>
						<form id="cate_form" action=""   method="POST">

							<div class="m-b30">
								<label class="label-title">Email Address</label>
								<input name="email" required="" class="form-control" placeholder="Email Address" type="email">
							</div>
							<div class="m-b15">
								<label class="label-title">Password</label>
								<input name="password" required="" class="form-control" placeholder="Password" type="password">
							</div>
							<div class="form-row d-flex justify-content-between m-b30">
								<div class="form-group">
								   <div class="custom-control custom-checkbox">
										<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
										<label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
									</div>
								</div>
								<div class="form-group">
									<a class="text-primary" href="javascript:void(0);">Forgot Password</a>
								</div>
							</div>
							<div class="text-center">
								<button type="submit"  class="btn btn-secondary btnhover text-uppercase me-2">Sign In</button>
								<a href="<?php url('auth/register') ?>" class="btn btn-outline-secondary btnhover text-uppercase">Register</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<!-- Icon Box Start -->
		<section class="content-inner py-0">
				<div class="container-fluid px-0">
					<div class="row gx-0">
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light">
								<div class="icon-bx">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/svg/icon-bx/password-check.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Filter & Discover</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">01</div>
							</div>	
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2">
								<div class="icon-bx">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/svg/icon-bx/cart.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Add to cart</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">02</div>
							</div>	
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2 bg-light">
								<div class="icon-bx">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/svg/icon-bx/discovery.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Fast Shipping</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">03</div>
							</div>	
						</div>
						<div class="col-xl-3 col-lg-3 col-sm-6">
							<div class="icon-bx-wraper style-2">
								<div class="icon-bx">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/svg/icon-bx/box-tick.svg" alt="/">
								</div>
								<div class="icon-content">
									<h5 class="dz-title">Enjoy The Product</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
								</div>
								<div class="data-text">04</div>
							</div>	
						</div>
					</div>
				</div>
			</section>
	<!-- Icon Box End -->

	</div>

	<!-- Footer -->
	<footer class="site-footer style-1">
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-4 col-sm-6">
						<div class="widget widget_about me-2">
							<div class="footer-logo logo-white">
								<a href="<?php url('') ?>"><img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/logo.svg" alt="/"></a> 
							</div>
							<ul class="widget-address">
								<li>
									<p><span>Address</span> : 451 Wall Street, UK, London</p>
								</li>
								<li>
									<p><span>E-mail</span> : example@info.com</p>
								</li>
								<li>
									<p><span>Phone</span> : (064) 332-1233</p>
								</li>
							</ul>
							<div class="subscribe_widget">
								<h6 class="title fw-medium text-capitalize">subscribe to our newsletter</h6>	
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="form-group">
										<div class="input-group mb-0">
											<input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
											<div class="input-group-addon">
												<button name="submit" value="Submit" type="submit" class="btn">
													<svg width="21" height="21" viewBox="0 0 21 21" fill="none">
														<path d="M4.20972 10.7344H15.8717" stroke="#0D775E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M10.0408 4.90112L15.8718 10.7345L10.0408 16.5678" stroke="#0D775E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-4 col-sm-6">
						<div class="widget widget_post">
							<h5 class="footer-title">Recent Posts</h5>
							<ul>
								<li>
									<div class="dz-media">
										<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/shop/product/small/1.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Wooden Water Bottles</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
								<li>
									<div class="dz-media">
										<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/shop/product/small/2.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Eco friendly bags</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
								<li>
									<div class="dz-media">
										<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/shop/product/small/3.png" alt="/">
									</div>
									<div class="dz-content">
										<h6 class="name"><a href="javascript:void(0);">Bamboo toothbrushes</a></h6>
										<span class="time">July 23, 2023</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-6">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Stores</h5>
							<ul>
								<li><a href="javascript:void(0);">New York</a></li>
								<li><a href="javascript:void(0);">London SF</a></li>
								<li><a href="javascript:void(0);">Edinburgh</a></li>
								<li><a href="javascript:void(0);">Los Angeles</a></li>
								<li><a href="javascript:void(0);">Chicago</a></li>
								<li><a href="javascript:void(0);">Las Vegas</a></li>
							</ul>   
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4 col-6">
						<div class="widget widget_services">
							<h5 class="footer-title">Useful Links</h5>
							<ul>
								<li><a href="javascript:void(0);">Privacy Policy</a></li>
								<li><a href="javascript:void(0);">Returns</a></li>
								<li><a href="javascript:void(0);">Terms & Conditions</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Latest News</a></li>
								<li><a href="javascript:void(0);">Our Sitemap</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-3 col-sm-4">
						<div class="widget widget_services">
							<h5 class="footer-title">Footer Menu</h5>
							<ul>
								<li><a href="javascript:void(0);">Instagram profile</a></li>
								<li><a href="javascript:void(0);">New Collection</a></li>
								<li><a href="javascript:void(0);">Woman Dress</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Latest News</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Top End -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row fb-inner">
					<div class="col-lg-6 col-md-12 text-start"> 
						<p class="copyright-text">© 2023 <a href="https://hugebinary.com/">HugeBinary</a> Theme. All Rights Reserved.</p>
					</div>
					<div class="col-lg-6 col-md-12 text-end"> 
						<div class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
							<span class="me-3">We Accept: </span>
							<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/'?>images/footer-img.png" alt="/">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
		
	</footer>
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>


</div>

</body>