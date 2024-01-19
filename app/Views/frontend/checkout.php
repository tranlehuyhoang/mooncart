<?php

use App\Libs\Session;
use App\Helpers\Format;
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/components/navbar.php';
require_once __DIR__ . '/inc/footer.php';
?>
<script src="<?php assets('apis/getProvince.js') ?>"></script>
<script src="<?php assets('apis/getDistrict.js') ?>"></script>
<script src="<?php assets('apis/getWard.js') ?>"></script>
<script src="<?php assets('apis/getFee.js') ?>" defer></script>

<div class="page-content">
	<!--banner-->
	<div class="dz-bnr-inr" style="background-image:url(<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/background/bg-shape.jpg);">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Thanh toán</h1>
				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php url('') ?>"> Trang chủ</a></li>
						<li class="breadcrumb-item">Thanh toán</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- inner page banner End-->
	<div class="content-inner-1">
		<div class="container">
			<form id="cate_form" action="<?php url('checkout') ?>" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id'] ?>">
			
				<div class="row shop-checkout">
					<div class="col-xl-8">
						<h4 class="title m-b15">Chi tiết đơn hàng</h4>
						<div class="accordion dz-accordion accordion-sm" id="accordionFaq">

							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									 
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
									<div class="accordion-body">
										<p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
									</div>
								</div>
							</div>
						</div>
						<div class="" style="
    display: flex;
    gap: 1rem;
    grid-template-columns: 13 !important;
">
							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">Tên</label>
									<input name="firstname" required="" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group m-b25">
									<label class="label-title">Họ</label>
									<input name="lastname" required="" class="form-control">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="m-b25">
								<label class="label-title">Tỉnh thành</label>
								<div class=" ">
									<select class="  w-100" name="city" id="province_list">

									</select>
								</div>
							</div>
						</div>
						<script>

						</script>
						<div class="col-md-12">
							<div class="m-b25">
								<label class="label-title">Quận huyện*</label>
								<div class=" ">
									<select class=" w-100" id="district_list">

									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="m-b25">
								<label class="label-title">Phường*</label>
								<div class=" ">
									<select class=" w-100" id="ward_list">

									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group m-b25">
								<label class="label-title">Địa chỉ* </label>
								<input name="address" required="" class="form-control m-b15" placeholder="Địa chỉ nhận hàng">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group m-b25">
								<label class="label-title">Số điện thoại *</label>
								<input name="phone" required="" class="form-control">
							</div>
						</div>


						<div class="col-md-12 m-b25">
							<div class="form-group">
								<label class="label-title">Ghi chú (optional)</label>
								<textarea id="comments" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control" name="comment" cols="90" rows="5" required="required"></textarea>
							</div>
						</div>
					</div>
					<div class="col-xl-4 side-bar">
						<h4 class="title m-b15">Chi tiết đơn hàng</h4>
						<div class="order-detail sticky-top">
							<?php
							 $subtotal  =  0;
							if (isset($_SESSION['carts']) && (is_array($_SESSION['carts']) || is_object($_SESSION['carts']))) : ?>
								<?php foreach ($data['carts'] as $cart) :  ?>
							 <?php $subtotal += $cart['quantity'] * $cart['promotion_price'] ?>

									<div class="cart-item style-1">
										<div class="dz-media">
											<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/shop-cart/pic1.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h6 class="title mb-0"><?php echo $cart['product_name'] ?> x <?php echo $cart['quantity']?></h6>
											<span class="price">
										  <?php Format::currency( $cart['quantity'] *  $cart['promotion_price'])?> 

											</span>
										</div>
									</div>
								<?php endforeach; ?>
							<?php else : ?>
								<li>
									No items in the cart.
								</li>
							<?php endif; ?>

							<input type="hidden" id="total_amount" name="total_amount" value="">

							<table>
								<tbody>
									<tr class="subtotal" >
										<td>Subtotal</td>
										<td class="price" id="subtotal_text"><?php Format::currency($subtotal)?></td>
									</tr>
									<tr class="title">
										<td>
											<h6 style="display: flex; justify-content:space-between; align-items: center;" class="title font-weight-500">Phí vận chuyển 
												<img src="https://pito.vn/wp-content/uploads/2022/12/Logo-Giao-hang-nhanh-moi.webp" width="30px" alt="">
												
											</h6>
											<span class="font-italic" style="font-style: italic; color: gray; font-size: small;">Api giao hàng nhanh </span>
										</td>
										<td></td>
									</tr>
									<tr class="shipping">
										<td>

											<div class="custom-control custom-checkbox">

												<label class="form-check-label" for="flexRadioDefault2">
													Giao nhanh:
												</label>
												<input hidden type="text" id="shipping_cost_input" name="shipping_price" value="" id="flexRadioDefault2">

											</div>
										</td>
										<td style="color:red" class="price" id="shipping_cost">*vui lòng chọn địa chỉ</td>
									</tr>
									<tr class="shipping">
										<td>

											<div class="custom-control custom-checkbox">

												<label class="form-check-label" for="flexRadioDefault2">
													Mã giảm giá :
												</label>

											</div>
										</td>
										<td style="color:green" class="price" id="shipping_cost">
										- <?php  Format::currency( Session::get('coupon')) ?></td>
										<input type="hidden" id="discount_input" name="discount" value="<?php echo Session::get('coupon')?>">
									 
									</tr>
									<tr class="total">
										<td>Total</td>
										<td class="price" id="total_price_text"><?php Format::currency( $subtotal - Session::get('coupon')   )?> </td>

									</tr>
								</tbody>
							</table>

							<div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
								<div class="accordion-item">
									<div class="accordion-header" id="heading1">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation" aria-expanded="true" aria-controls="collapse1">
											<input class="form-check-input radio" type="radio" name="payment_method" value="momo" id="flexRadioDefault3">
											<label class="form-check-label" for="flexRadioDefault3">
												Ví Momo
											</label>
											<img src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png" width="30px" alt="">
										</div>
									</div>
									 
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading1">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation" aria-expanded="true" aria-controls="collapse1">
											<input class="form-check-input radio" type="radio" name="payment_method" value="vietinbank" id="flexRadioDefault10">
											<label class="form-check-label" for="flexRadioDefault10">
												VietinBank
											</label>
											<img src="https://i.pinimg.com/564x/0e/33/49/0e3349ab85ae5ebf604df3cb380f9c8f.jpg" width="30px" alt="">

										</div>
									</div>
									<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading2">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation" aria-expanded="true" aria-controls="collapse2">
											<input class="form-check-input radio" checked type="radio" name="payment_method" value="cash" id="flexRadioDefault5">
											<label class="form-check-label" for="flexRadioDefault5">
												Thanh toán khi nhận hàng
											</label>
										</div>
									</div>
									<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<div class="accordion-header" id="heading3">
										<div class="accordion-button collapsed custom-control custom-checkbox" data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation" aria-expanded="true" aria-controls="collapse3">
											<input class="form-check-input radio" type="radio" name="payment_method" value="paypal" id="flexRadioDefault4">
											<label class="form-check-label" for="flexRadioDefault4">
												Paypal
											</label>
											<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/payment.jpg" alt="/">
											<a href="javascript:void(0);">What is PayPal?</a>
										</div>
									</div>
									<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
										<div class="accordion-body">
											<p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
								</div>
							</div>
							<p class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:void(0);">privacy policy.</a></p>
							<div class="form-group">
								<div class="custom-control custom-checkbox d-flex m-b15">
									<input type="checkbox" class="form-check-input" id="basic_checkbox_3">
									<label class="form-check-label" for="basic_checkbox_3">I have read and agree to the website terms and conditions </label>
								</div>
							</div>
							<button type="submit" class="btn btn-secondary w-100">PLACE ORDER</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Icon Box Start -->
	<section class="content-inner py-0">
		<div class="container-fluid px-0">
			<div class="row gx-0">
				<div class="col-xl-3 col-lg-3 col-sm-6">
					<div class="icon-bx-wraper style-2 bg-light">
						<div class="icon-bx">
							<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/password-check.svg" alt="/">
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
							<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/cart.svg" alt="/">
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
							<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/discovery.svg" alt="/">
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
							<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/box-tick.svg" alt="/">
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
							<a href="<?php url('') ?>"><img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/logo.svg" alt="/"></a>
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

					</div>
				</div>
				<div class="col-xl-3 col-md-4 col-sm-6">
					<div class="widget widget_post">
						<h5 class="footer-title">Recent Posts</h5>
						<ul>
							<li>
								<div class="dz-media">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/1.png" alt="/">
								</div>
								<div class="dz-content">
									<h6 class="name"><a href="javascript:void(0);">Wooden Water Bottles</a></h6>
									<span class="time">July 23, 2023</span>
								</div>
							</li>
							<li>
								<div class="dz-media">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/2.png" alt="/">
								</div>
								<div class="dz-content">
									<h6 class="name"><a href="javascript:void(0);">Eco friendly bags</a></h6>
									<span class="time">July 23, 2023</span>
								</div>
							</li>
							<li>
								<div class="dz-media">
									<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/3.png" alt="/">
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
						<img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/footer-img.png" alt="/">
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
<div id="loading_overlay">
	<div id="loading_spinner"></div>
</div>
<style>
	#loading_overlay {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.5);
		display: none;
		justify-content: center;
		align-items: center;
		z-index: 9999;
	}

	.loading_spinner {
		border: 4px solid #f3f3f3;
		border-top: 4px solid #3498db;
		border-radius: 50%;
		width: 32px;
		height: 32px;
		animation: spin 1s linear infinite;
	}

	@keyframes spin {
		0% {
			transform: rotate(0deg);
		}

		100% {
			transform: rotate(360deg);
		}
	}

	.loading_show_1 {
		display: block !important;
	}

	.loading_overlay.hidden {
		display: none;
	}
</style>

</body>