<?php

use App\Libs\Session;
use App\Helpers\Format;

require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/components/navbar.php';
require_once __DIR__ . '/inc/footer.php';
?>


<div class="page-content">
    <!--banner-->
    <div class="dz-bnr-inr" style="background-image:url(<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/background/bg-shape.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Giỏ hàng</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php url('') ?>"> Home</a></li>
                        <li class="breadcrumb-item">Giỏ hàng</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <!-- contact area -->
    <section class="content-inner shop-account">
        <!-- Product -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table check-tbl">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th></th>
                                    <th>Giá </th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $subtotal  =  0;

                                if (is_array($data['carts']) || is_object($data['carts'])) : ?>
                                    <?php foreach ($data['carts'] as $cart) : ?>
                                        <?php $subtotal += $cart['quantity'] * $cart['promotion_price'] ?>

                                        <tr>
                                            <td class="product-item-img"><img src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $cart['product_image']  ?>" alt="/"></td>
                                            <td class="product-item-name"><?php echo $cart['product_name']; ?>

                                            </td>
                                            <td class="product-item-price">
                                                <?php Format::currency($cart['promotion_price']) ?>
                                            </td>
                                            <td class="product-item-quantity">
                                                <div class="quantity btn-quantity style-1 me-3">
                                                    <input type="text" value="<?php echo $cart['quantity']; ?>" name="demo_vertical2" id="demo_vertical2_<?php echo $cart['id']  ?>">
                                                </div>
                                            </td>
                                            <td class="product-item-totle">
                                                <?php Format::currency($cart['promotion_price'] * $cart['quantity']) ?>
                                            </td>
                                            <td class="product-item-close"><a href="<?php echo url('cart/delete/' . $cart['id']); ?>"><i class="ti-close"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="6">No items in the cart.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>



                            <script>
                                function postData() {
                                    var inputs = document.querySelectorAll('input[name="demo_vertical2"]');
                                    var inputsArray = Array.from(inputs).reduce(function(arr, input) {
                                        if (input.id) {
                                            var idNumber = input.id.replace('demo_vertical2_',
                                                ''); // Lấy số sau "demo_vertical2_"
                                            arr.push({
                                                value: input.value,
                                                id: idNumber
                                            });
                                        }
                                        return arr;
                                    }, []);
                                    console.log(inputsArray)

                                    var formData = new FormData();
                                    formData.append('inputsArray', JSON.stringify(inputsArray));

                                    // Tạo một yêu cầu HTTP POST và gửi formData đến đường dẫn 'cart/update'
                                    var request = new XMLHttpRequest();
                                    request.open('POST', 'cart/update');
                                    request.send(formData);

                                    // Hiển thị thông báo sau khi yêu cầu được gửi đi
                                    request.onload = function() {
                                        if (request.status === 200) {
                                            location.reload();
                                        } else {
                                            alert('Đã xảy ra lỗi khi gửi dữ liệu.');
                                        }
                                    };
                                }
                            </script>
                            </script>
                        </table>
                    </div>
                    <div class="row shop-form m-t30">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-0">
                <form id="cate_form" action="<?php url('coupon/check_coupon') ?>" enctype="multipart/form-data" method="POST">

                                    <input name="coupon" required="required" type="text" class="form-control" placeholder="Coupon Code">

                                    <div class="input-group-addon">
                                        <button id="applyCouponBtn" name="submit" value="Submit" type="submit" class="btn coupon">
                                            Apply Coupon
                                        </button>
                                    </div>
                </form>
                                </div>
                             
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <a onclick="postData()" class="btn btn-grey">Cập nhập giỏ hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="title mb15">Tổng giỏ hàng</h4>
                    <div class="cart-detail">
                        <a href="javascript:void(0);" class="btn btn-outline-primary w-100 m-b20">Bank Offer 5%
                            Cashback</a>
                        <div class="icon-bx-wraper style-4 m-b15">
                            <div class="icon-bx">
                                <i class="flaticon flaticon-ship"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary font-14">FREE</span>
                                <h6 class="dz-title">Enjoy The Product</h6>
                            </div>
                        </div>
                        <div class="icon-bx-wraper style-4 m-b30">
                            <div class="icon-bx">
                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/shop-cart/icon-box/pic2.png" alt="/">
                            </div>
                            <div class="icon-content">
                                <h6 class="dz-title">Enjoy The Product</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                        </div>
                        <div class="save-text">
                            <i class="icon feather icon-check-circle"></i>
                            <span class="m-l10">You will save ₹504 on this order</span>
                        </div>
                        <table>
                            <tbody>
                                <tr class="total">
                                    <td>
                                        <h6 class="mb-0">Total</h6>
                                    </td>
                                    <td class="price text-success">

                                        <?php Format::currency($subtotal) ?>
                                    </td>
                                </tr>
                                <tr class="total">
                                    <td>
                                        <h6 class="mb-0">Mã giảm giá</h6>
                                    </td>
                                    <td class="price text-danger">

                                       - <?php  Format::currency( Session::get('coupon')) ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?php url('checkout') ?>" class="btn btn-secondary w-100">PLACE ORDER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product END -->
    </section>
    <!-- contact area End-->

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
                    <p class="copyright-text">© 2023 <a href="https://hugebinary.com/">HugeBinary</a> Theme. All Rights
                        Reserved.</p>
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


</body>