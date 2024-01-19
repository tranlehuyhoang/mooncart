 <?php

    use App\Helpers\Format;


    ?> <header class="site-header mo-left header style-3">
     <!-- Main Header -->
     <div class="sticky-header main-bar-wraper">
         <div class="main-bar clearfix">
             <div class="container-fluid clearfix">
                 <!-- Nav Toggle Button -->
                 <button class="menu-nav-btn collapsed" data-bs-toggle="collapse" type="button"
                     data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="for-dots">
                         <span></span>
                         <span></span>
                         <span></span>
                         <span></span>
                     </span>
                     <span class="dots-close">
                         <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <rect width="20" height="2.10526"
                                 transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 22.0635 20.561)"
                                 fill="white" />
                             <rect x="6.43262" y="20.5611" width="20" height="2.10526"
                                 transform="rotate(-45 6.43262 20.5611)" fill="white" />
                         </svg>
                     </span>
                 </button>
                 <!-- Website Logo -->
                 <div class="logo-header me-5">
                     <a href="index.html">
                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/logo.png" alt="logo"
                             class="logo-dark">
                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/logo.png" alt="logo"
                             class="logo-light">
                     </a>
                 </div>
                 <!-- EXTRA NAV -->
                 <div class="extra-nav">
                     <div class="extra-cell">
                         <ul class="header-right">
                             <li class="nav-item login-link" style="
    display: flex;
    align-items: center;
">
                                 <?php
                                    if (isset($_SESSION['user'])) {
                                    ?>
                                 <a class="nav-link">
                                     Xin chào,
                                     <?php echo $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] ?>

                                 </a>
                                 <a href="<?php url('auth/logout') ?>" style="display: flex; align-items: center">
                                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         fill="red" height="14px" width="14px" version="1.1" id="Capa_1"
                                         viewBox="0 0 384.971 384.971" xml:space="preserve">
                                         <g>
                                             <g id="Sign_Out">
                                                 <path
                                                     d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03    C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03    C192.485,366.299,187.095,360.91,180.455,360.91z" />
                                                 <path
                                                     d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279    c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179    c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z" />
                                             </g>
                                             <g>
                                             </g>
                                             <g>
                                             </g>
                                             <g>
                                             </g>
                                             <g>
                                             </g>
                                             <g>
                                             </g>
                                             <g>
                                             </g>
                                         </g>
                                     </svg>
                                 </a>
                                 <?php
                                    } else {
                                    ?>
                                 <a class="nav-link" href="<?php url('auth/login') ?>">
                                     Đăng Nhập
                                 </a>
                                 <?php
                                    }
                                    ?>

                             </li>
                             <li class="nav-item wishlist-link">
                                 <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                     data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                     <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M2.64119 10.4097C1.74702 7.61808 2.79202 4.42724 5.72285 3.48308C7.26452 2.98558 8.96619 3.27891 10.2479 4.24308C11.4604 3.30558 13.2245 2.98891 14.7645 3.48308C17.6954 4.42724 18.747 7.61808 17.8537 10.4097C16.462 14.8347 10.2479 18.2431 10.2479 18.2431C10.2479 18.2431 4.07952 14.8864 2.64119 10.4097Z"
                                             stroke="var(--white)" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                         <path d="M13.5813 6.32781C14.473 6.61614 15.103 7.41197 15.1788 8.34614"
                                             stroke="var(--white)" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                     </svg>
                                 </a>
                             </li>
                             <li class="nav-item cart-link">
                                 <a href="javascript:void(0);" class="nav-link cart-btn" data-bs-toggle="offcanvas"
                                     data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                     <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M1.08374 2.61947C1.08374 2.27429 1.36356 1.99447 1.70874 1.99447H3.29314C3.91727 1.99447 4.4722 2.39163 4.67352 2.98239L5.06379 4.1276H15.4584C17.6446 4.1276 19.4168 5.89981 19.4168 8.08593V11.5379C19.4168 13.7241 17.6446 15.4963 15.4584 15.4963H9.22182C7.30561 15.4963 5.66457 14.1237 5.32583 12.2377L4.00967 4.90953L3.49034 3.3856C3.46158 3.30121 3.3823 3.24447 3.29314 3.24447H1.70874C1.36356 3.24447 1.08374 2.96465 1.08374 2.61947ZM5.36374 5.3776L6.55614 12.0167C6.78791 13.3072 7.91073 14.2463 9.22182 14.2463H15.4584C16.9542 14.2463 18.1668 13.0337 18.1668 11.5379V8.08593C18.1668 6.59016 16.9542 5.3776 15.4584 5.3776H5.36374Z"
                                             fill="var(--white)" />
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M8.16479 17.8278C8.16479 17.1374 8.72444 16.5778 9.4148 16.5778H9.42313C10.1135 16.5778 10.6731 17.1374 10.6731 17.8278C10.6731 18.5182 10.1135 19.0778 9.42313 19.0778H9.4148C8.72444 19.0778 8.16479 18.5182 8.16479 17.8278Z"
                                             fill="var(--white)" />
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M14.8315 17.8278C14.8315 17.1374 15.3912 16.5778 16.0815 16.5778H16.0899C16.7802 16.5778 17.3399 17.1374 17.3399 17.8278C17.3399 18.5182 16.7802 19.0778 16.0899 19.0778H16.0815C15.3912 19.0778 14.8315 18.5182 14.8315 17.8278Z"
                                             fill="var(--white)" />
                                     </svg>
                                     <span class="badge badge-circle"><?php echo $_SESSION['cartsCount'] ?? 0  ?></span>
                                 </a>
                             </li>
                             <li class="nav-item search-link rounded-search">
                                 <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                     data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                     <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <circle cx="10.0535" cy="10.55" r="7.49047" stroke="var(--white)"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                         <path d="M15.2632 16.1487L18.1999 19.0778" stroke="var(--white)"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Main Header End -->
     <!-- SearchBar -->
     <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
             &times;
         </button>
         <div class="container">
             <form class="header-item-search" method="post" action="<?php echo url('shop/search') ?>"
                 enctype="multipart/form-data">
                 <div class="input-group search-input">
                     <select class="default-select" style="z-index: 99 !important;">
                         <option value="0">All Categories</option>

                     </select>
                     <input type="text" class="form-control" name="search" aria-label="Text input with dropdown button"
                         placeholder="Search Product">
                     <button class="btn" type="submit">
                         <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <circle cx="10.0535" cy="10.5399" r="7.49047" stroke="#0D775E" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                             <path d="M15.2632 16.1387L18.1999 19.0677" stroke="#0D775E" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                         </svg>
                     </button>
                 </div>
                 <ul class="recent-tag">
                     <li class="pe-0"><span>Quick Search :</span></li>
                     <li><a href="<?php url('products/detail/123') ?>">Wooden Products</a></li>
                     <li><a href="<?php url('products/detail/123') ?>">Metal Products</a></li>
                     <li><a href="<?php url('products/detail/123') ?>">Baby Products</a></li>
                     <li><a href="<?php url('products/detail/123') ?>">Yoga Mats</a></li>
                 </ul>
             </form>
             <div class="row">
                 <div class="col-xl-12">
                     <h5 class="mb-3">You May Also Like</h5>
                     <div class="swiper category-swiper2">
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/1.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Wooden Water
                                                 Bottles</a></h6>
                                         <h6 class="price">$40.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/3.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Bamboo
                                                 toothbrushes</a></h6>
                                         <h6 class="price">$30.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/4.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Eco friendly
                                                 bags</a></h6>
                                         <h6 class="price">$35.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/2.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Wooden Cup</a>
                                         </h6>
                                         <h6 class="price">$20.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/5.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Bamboo
                                                 toothbrushes</a></h6>
                                         <h6 class="price">$70.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/6.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Eco friendly
                                                 bags</a></h6>
                                         <h6 class="price">$45.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/7.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                 Bottles</a></h6>
                                         <h6 class="price">$40.00</h6>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="shop-card">
                                     <div class="dz-media">
                                         <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/4.png"
                                             alt="image">
                                     </div>
                                     <div class="dz-content">
                                         <h6 class="title"><a href="<?php url('products/detail/123') ?>">Paper Bags</a>
                                         </h6>
                                         <h6 class="price">$60.00</h6>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- SearchBar -->

     <!-- Sidebar cart -->
     <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
             &times;
         </button>
         <div class="offcanvas-body">
             <div class="product-description">
                 <div class="dz-tabs">
                     <ul class="nav nav-tabs center" id="myTab" role="tablist">
                         <li class="nav-item" role="presentation">
                             <button class="nav-link active" id="shopping-cart" data-bs-toggle="tab"
                                 data-bs-target="#shopping-cart-pane" type="button" role="tab"
                                 aria-controls="shopping-cart-pane" aria-selected="true">Shopping Cart
                                 <span class="badge badge-light"><?php echo $_SESSION['cartsCount']  ?></span>
                             </button>
                         </li>
                         <li class="nav-item" role="presentation">
                             <button class="nav-link" id="wishlist" data-bs-toggle="tab" data-bs-target="#wishlist-pane"
                                 type="button" role="tab" aria-controls="wishlist-pane" aria-selected="false">Wishlist
                                 <span class="badge badge-light"><?php echo $_SESSION['wishlistsCount']  ?></span>
                             </button>
                         </li>
                     </ul>
                     <div class="tab-content pt-4" id="dz-shopcart-sidebar">
                         <div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel"
                             aria-labelledby="shopping-cart" tabindex="0">
                             <div class="shop-sidebar-cart">
                                 <ul class="sidebar-cart-list">
                                     <?php
                                        $subtotal  =  0;
                                        if (isset($_SESSION['carts']) && (is_array($_SESSION['carts']) || is_object($_SESSION['carts']))) : ?>
                                     <?php foreach ($_SESSION['carts'] as $cart) :  ?>
                                     <?php $subtotal += $cart['quantity'] * $cart['promotion_price'] ?>
                                     <li>
                                         <div class="cart-widget">
                                             <div class="dz-media me-3">
                                                 <img src="<?php echo ASSETS_URL_ROOT . '/public/upload/' . $cart['product_image']; ?>"
                                                     alt="">
                                             </div>
                                             <div class="cart-content">
                                                 <h6 class="title"><a
                                                         href="product-thumbnail.html"><?php echo $cart['product_name']; ?></a>
                                                 </h6>
                                                 <div class="d-flex align-items-center">
                                                     <div class="btn-quantity light quantity-sm me-3">
                                                         <input type="text" value="<?php echo $cart['quantity']; ?>"
                                                             name="demo_vertical2">
                                                     </div>
                                                     <h6 class="dz-price text-primary mb-0">
                                                         <?php Format::currency($cart['promotion_price']) ?>
                                                     </h6>
                                                 </div>
                                             </div>
                                             <a href="<?php echo url('cart/delete/' . $cart['id']); ?>"
                                                 class="dz-close">
                                                 <i class="ti-close"></i>
                                             </a>
                                         </div>
                                     </li>
                                     <?php endforeach; ?>
                                     <?php else : ?>
                                     <li>
                                         No items in the cart.
                                     </li>
                                     <?php endif; ?>
                                 </ul>
                                 <div class="cart-total">
                                     <h5 class="mb-0">Subtotal:</h5>
                                     <h5 class="mb-0">
                                         <?php Format::currency($subtotal) ?>
                                     </h5>
                                 </div>
                                 <div class="mt-auto">
                                     <div class="shipping-time">
                                         <div class="dz-icon">
                                             <i class="flaticon flaticon-ship"></i>
                                         </div>
                                         <div class="shipping-content">
                                             <h6 class="title pe-4">Congratulations , you've got free shipping!</h6>
                                             <div class="progress">
                                                 <div class="progress-bar progress-animated border-0"
                                                     style="width: 75%;" role="progressbar">
                                                     <span class="sr-only">75% Complete</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <a href="<?php url('checkout') ?>"
                                         class="btn btn-light btn-block m-b20">Checkout</a>
                                     <a href="<?php url('cart') ?>" class="btn btn-secondary btn-block">View Cart</a>
                                 </div>
                             </div>
                         </div>
                         <div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist"
                             tabindex="0">
                             <div class="shop-sidebar-cart">
                                 <ul class="sidebar-cart-list">

                                     <?php
                                        if (is_array($_SESSION['wishlists']) || is_object($_SESSION['wishlists'])) : ?>
                                     <?php foreach ($_SESSION['wishlists'] as $wishlist) : ?>

                                     <li>
                                         <div class="cart-widget">
                                             <div class="dz-media me-3">
                                                 <img src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo $wishlist['product_image']  ?>"
                                                     alt="">
                                             </div>
                                             <div class="cart-content">
                                                 <h6 class="title"><a
                                                         href="product-thumbnail.html"><?php echo $wishlist['product_name']; ?></a>
                                                 </h6>
                                                 <div class="d-flex align-items-center">
                                                     <h6 class="dz-price text-primary mb-0">
                                                         <?php Format::currency($wishlist['promotion_price']) ?>
                                                     </h6>
                                                 </div>
                                             </div>
                                             <a href="<?php echo url('wishlist/delete/' . $wishlist['id']); ?>"
                                                 class="dz-close">
                                                 <i class="ti-close"></i>
                                             </a>
                                         </div>
                                     </li>
                                     <?php endforeach; ?>
                                     <?php else : ?>
                                     <tr>
                                         <td colspan="6">No items in the cart.</td>
                                     </tr>
                                     <?php endif; ?>
                                 </ul>
                                 <div class="mt-auto">
                                     <a href="shop-wishlist.html" class="btn btn-secondary btn-block">Check Your
                                         Favourite</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Sidebar cart -->
 </header>
 <div class="header-menu navbar-collapse collapse" id="navbarNavDropdown">
     <div class="row h-100">
         <div class="col-lg-3">
             <div class="header-nav h-100  nav-dark">
                 <ul class="nav navbar-nav dark-nav">
                     <li class="">
                         <a href="<?php url('') ?>"><span>Trang Chủ</span></a>

                     </li>
                     <li class="">
                         <a href="<?php url('shop') ?>"><span>Sản phẩm</span></a>

                     </li>
                     <li class=""><a href="<?php url('blog') ?>"><span>Tin tức</span></a>

                     </li>
                     <li class=" "><a href="<?php url('about') ?>"><span>Giới thiệu</span></a>

                     </li>
                     <li><a href="<?php url('contact') ?>">Liên hệ</a></li>
                 </ul>
             </div>
         </div>
     </div>
     <div class="right-social-menu">
         <ul>
             <li>
                 <a href="javascript:void(0);">example@info.com</a>
             </li>
             <li>
                 <a href="javascript:void(0);">+91 123 456 7890</a>
             </li>
         </ul>
         <ul>
             <li>
                 <a target="_blank" href="javascript:void(0);">Instagram</a>
             </li>
             <li>
                 <a target="_blank" href="javascript:void(0);">Facebook</a>
             </li>
             <li>
                 <a target="_blank" href="javascript:void(0);">twitter</a>
             </li>
         </ul>
     </div>
     <div class="footer-menu">
         <p class="mb-0">© 2023 HugeBinary Theme. All Rights Reserved.</p>
     </div>


 </div>