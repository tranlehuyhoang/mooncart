<?php

use App\Helpers\Format;
 
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/components/navbar.php';
require_once __DIR__ . '/inc/footer.php';
?>

<div class="page-content">
    <!--banner-->
    <div class="dz-bnr-inr style-1"
        style="background-image:url(<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/background/bg-shape.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1><?php echo isset($data['search']) ? "Tìm kiếm sản phẩm: " . $data['search'] : "Sản phẩm"; ?></h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php url('') ?>"> Trang chủ</a></li>
                        <li class="breadcrumb-item">Sản phẩm</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="content-inner-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="sticky-xl-top">
                        <a href="javascript:void(0);" class="panel-close-btn">
                            <svg width="35" height="35" viewBox="0 0 51 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.748 12.5L12.748 37.5" stroke="white" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.748 12.5L37.748 37.5" stroke="white" stroke-width="1.25"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="shop-filter mt-xl-2 mt-0">
                            <aside>
                                <div class="d-flex align-items-center justify-content-between m-b30">
                                    <h6 class="title mb-0 fw-normal">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"
                                            width="20" height="20">
                                            <g id="Layer_29" data-name="Layer 29">
                                                <path
                                                    d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                </path>
                                                <path
                                                    d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                                </path>
                                                <path
                                                    d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                                </path>
                                            </g>
                                        </svg>
                                        Filter
                                    </h6>
                                </div>
                                <div class="widget widget_search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzSearch" required="required" type="search"
                                                class="form-control" placeholder="Search Product">
                                            <div class="input-group-addon">
                                                <button name="submit" value="Submit" type="submit" class="btn">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                                            stroke="#0D775E" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M17.5 17.5L13.875 13.875" stroke="#0D775E"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title">Price</h6>
                                    <div class="price-slide range-slider">
                                        <div class="price">
                                            <div class="range-slider style-1">
                                                <div id="slider-tooltips" class="mb-3"></div>
                                                <span class="example-val" id="slider-margin-value-min"></span>
                                                <span class="example-val" id="slider-margin-value-max"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="widget widget_categories">
                                    <h6 class="widget-title">Category</h6>
                                    <ul>
                                        <li class="cat-item cat-item-26"><a href="javascript:void(0);">Yoga Mats</a>
                                            (15)</li>
                                        <li class="cat-item cat-item-36"><a href="javascript:void(0);">Yoga
                                                Accessories</a> (22)</li>
                                        <li class="cat-item cat-item-43"><a href="javascript:void(0);">Reusable Bags</a>
                                            (10)</li>
                                        <li class="cat-item cat-item-27"><a href="javascript:void(0);">Water Bottles</a>
                                            (3)</li>
                                        <li class="cat-item cat-item-40"><a href="javascript:void(0);">Bamboo
                                                Toothbrushes</a> (8)</li>
                                        <li class="cat-item cat-item-40"><a href="javascript:void(0);">Fitness
                                                Trackers</a> (2)</li>
                                        <li class="cat-item cat-item-40"><a href="javascript:void(0);">Home Fitness
                                                Equipment</a> (7)</li>
                                    </ul>
                                </div>

                                <div class="widget widget_tag_cloud">
                                    <h6 class="widget-title">Tags</h6>
                                    <div class="tagcloud">
                                        <a href="javascript:void(0);">Mats </a>
                                        <a href="javascript:void(0);">Accessories</a>
                                        <a href="javascript:void(0);">Bottles</a>
                                        <a href="javascript:void(0);">Bottles</a>
                                        <a href="javascript:void(0);">Trackers</a>
                                        <a href="javascript:void(0);">Bags</a>
                                        <a href="javascript:void(0);">Cup</a>
                                        <a href="javascript:void(0);">Toothbrushes</a>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm font-14 btn-primary btn-sharp">RESET</a>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="filter-wrapper">
                        <div class="filter-left-area">
                            <ul class="filter-tag">
                                <li>
                                    <a href="javascript:void(0);" class="tag-btn">Bottle
                                        <i class="icon feather icon-x tag-close"></i>
                                    </a>
                                </li>
                            </ul>
                            <span>Showing 1–5 Of 50 Results</span>
                        </div>
                        <div class="filter-right-area">
                            <a href="javascript:void(0);" class="panel-btn">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20"
                                    height="20">
                                    <g id="Layer_28" data-name="Layer 28">
                                        <path
                                            d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                        </path>
                                        <path
                                            d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z">
                                        </path>
                                        <path
                                            d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z">
                                        </path>
                                    </g>
                                </svg>
                                Filter
                            </a>
                            <div class="form-group">
                                <select class="default-select">
                                    <option>Default sorting</option>
                                    <option>1 Day</option>
                                    <option>1 Week</option>
                                    <option>3 Weeks</option>
                                    <option>1 Month</option>
                                    <option>3 Months</option>
                                </select>
                            </div>
                            <div class="form-group Category">
                                <select class="default-select">
                                    <option>Categories</option>
                                    <option>1 Day</option>
                                    <option>1 Week</option>
                                    <option>3 Weeks</option>
                                    <option>1 Month</option>
                                    <option>3 Months</option>
                                </select>
                            </div>
                            <div class="shop-tab">
                                <ul class="nav" role="tablist" id="dz-shop-tab">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tab-list-grid" class="nav-link active" id="tab-list-grid-btn"
                                            data-bs-toggle="pill" data-bs-target="#tab-list-grid" role="tab"
                                            aria-controls="tab-list-grid" aria-selected="true">
                                            <i class="flaticon flaticon-menu"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tab-list-list" class="nav-link " id="tab-list-list-btn"
                                            data-bs-toggle="pill" data-bs-target="#tab-list-list" role="tab"
                                            aria-controls="tab-list-list" aria-selected="false">
                                            <i class="flaticon flaticon-list"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tab-list-column" class="nav-link" id="tab-list-column-btn"
                                            data-bs-toggle="pill" data-bs-target="#tab-list-column" role="tab"
                                            aria-controls="tab-list-column" aria-selected="false">
                                            <i class="flaticon flaticon-blocks"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 tab-content shop-" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tab-list-grid" role="tabpanel"
                                aria-labelledby="tab-list-grid-btn">
                                <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
                                    <?php
									$subtotal  =  0;

									if (is_array($data['products']) || is_object($data['products'])) : ?>
                                    <?php foreach ($data['products'] as $product) : ?>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img style="
    height: 300px;
    object-fit: contain;
" src="<?php echo ASSETS_URL_ROOT . '/public/upload/' ?><?php echo isset($product['product_image']) && $product['product_image'] !== '' ? $product['product_image'] : 'empty-img.png'; ?>"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a
                                                        href="<?php echo url('products/detail/' . $product['id']); ?>"><?php echo $product['name']; ?></a>
                                                </h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>

                                                        <?php Format::currency( $product['price'])?> </del>
                                                    <?php Format::currency( $product['promotion_price'])?>
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">Sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <?php else : ?>
                                    <tr>
                                        <td colspan="6">No items in the cart.</td>
                                    </tr>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="tab-list-list" role="tabpanel"
                                aria-labelledby="tab-list-list-btn">

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/1.png"
                                                    alt="image">
                                                <div class="product-tag">
                                                    <span class="badge badge-secondary">Sale</span>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a
                                                                href="<?php url('products/detail/123') ?>">Wooden Water
                                                                Bottles</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a
                                                                    href="<?php url('products/detail/123') ?>">Accessories,</a>
                                                            </li>
                                                            <li><a href="<?php url('products/detail/123') ?>">Clocks</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>

                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 370 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a
                                                                reader will be distracted by the readable content of a
                                                                page when looking at its layout. The point of using
                                                                Lorem Ipsum is that it has a more-or-less normal
                                                                distribution of letters, as opposed to using 'Content
                                                                here, content here', making it look like readable
                                                                English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate">
                                                        <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                            <div class="meta-content">
                                                                <span class="price-name">Price</span>
                                                                <span class="price-num">$40.00</span>
                                                            </div>
                                                            <div class="meta-content">
                                                                <span class="color-name">Color</span>
                                                                <div class="d-flex align-items-center color-filter">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel11"
                                                                            value="#24262B" aria-label="..." checked>
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel12"
                                                                            value="#8CB2D1" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel13"
                                                                            value="#0D775E" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="<?php url('cart') ?>"
                                                                class="btn btn-secondary btn-md btn-icon">
                                                                <i
                                                                    class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                <span class="d-md-block d-none">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexCheckDefault1">
                                                                <label class="form-check-label" for="flexCheckDefault1">
                                                                    <svg width="23" height="23" viewBox="0 0 21 21"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2.64094 9.89964C1.74678 7.10798 2.79178 3.91714 5.72261 2.97298C7.26428 2.47548 8.96594 2.76881 10.2476 3.73298C11.4601 2.79548 13.2243 2.47881 14.7643 2.97298C17.6951 3.91714 18.7468 7.10798 17.8534 9.89964C16.4618 14.3246 10.2476 17.733 10.2476 17.733C10.2476 17.733 4.07928 14.3763 2.64094 9.89964Z"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M13.5811 5.81787C14.4727 6.1062 15.1027 6.90204 15.1786 7.8362"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/5.png"
                                                    alt="image">
                                                <div class="product-tag">
                                                    <span class="badge badge-secondary">Sale</span>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a
                                                                href="<?php url('products/detail/123') ?>">Bamboo
                                                                toothbrushes</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a
                                                                    href="<?php url('products/detail/123') ?>">Accessories,</a>
                                                            </li>
                                                            <li><a href="<?php url('products/detail/123') ?>">Clocks</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>

                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 255 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a
                                                                reader will be distracted by the readable content of a
                                                                page when looking at its layout. The point of using
                                                                Lorem Ipsum is that it has a more-or-less normal
                                                                distribution of letters, as opposed to using 'Content
                                                                here, content here', making it look like readable
                                                                English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate">
                                                        <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                            <div class="meta-content">
                                                                <span class="price-name">Price</span>
                                                                <span class="price-num">$55.00</span>
                                                            </div>
                                                            <div class="meta-content">
                                                                <span class="color-name">Color</span>
                                                                <div class="d-flex align-items-center color-filter">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel14"
                                                                            value="#24262B" aria-label="..." checked>
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel15"
                                                                            value="#8CB2D1" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel16"
                                                                            value="#0D775E" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="<?php url('cart') ?>"
                                                                class="btn btn-secondary btn-md btn-icon">
                                                                <i
                                                                    class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                <span class="d-md-block d-none">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexCheckDefault2">
                                                                <label class="form-check-label" for="flexCheckDefault2">
                                                                    <svg width="23" height="23" viewBox="0 0 21 21"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2.64094 9.89964C1.74678 7.10798 2.79178 3.91714 5.72261 2.97298C7.26428 2.47548 8.96594 2.76881 10.2476 3.73298C11.4601 2.79548 13.2243 2.47881 14.7643 2.97298C17.6951 3.91714 18.7468 7.10798 17.8534 9.89964C16.4618 14.3246 10.2476 17.733 10.2476 17.733C10.2476 17.733 4.07928 14.3763 2.64094 9.89964Z"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M13.5811 5.81787C14.4727 6.1062 15.1027 6.90204 15.1786 7.8362"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/1.png"
                                                    alt="image">
                                                <div class="product-tag">
                                                    <span class="badge badge-secondary">Sale</span>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a
                                                                href="<?php url('products/detail/123') ?>">Wooden Water
                                                                Bottles</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a
                                                                    href="<?php url('products/detail/123') ?>">Accessories,</a>
                                                            </li>
                                                            <li><a href="<?php url('products/detail/123') ?>">Clocks</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>

                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 455 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a
                                                                reader will be distracted by the readable content of a
                                                                page when looking at its layout. The point of using
                                                                Lorem Ipsum is that it has a more-or-less normal
                                                                distribution of letters, as opposed to using 'Content
                                                                here, content here', making it look like readable
                                                                English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate">
                                                        <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                            <div class="meta-content">
                                                                <span class="price-name">Price</span>
                                                                <span class="price-num">$56.00</span>
                                                            </div>
                                                            <div class="meta-content">
                                                                <span class="color-name">Color</span>
                                                                <div class="d-flex align-items-center color-filter">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel17"
                                                                            value="#24262B" aria-label="..." checked>
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel18"
                                                                            value="#8CB2D1" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel19"
                                                                            value="#0D775E" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="<?php url('cart') ?>"
                                                                class="btn btn-secondary btn-md btn-icon">
                                                                <i
                                                                    class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                <span class="d-md-block d-none">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexCheckDefault3">
                                                                <label class="form-check-label" for="flexCheckDefault3">
                                                                    <svg width="23" height="23" viewBox="0 0 21 21"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2.64094 9.89964C1.74678 7.10798 2.79178 3.91714 5.72261 2.97298C7.26428 2.47548 8.96594 2.76881 10.2476 3.73298C11.4601 2.79548 13.2243 2.47881 14.7643 2.97298C17.6951 3.91714 18.7468 7.10798 17.8534 9.89964C16.4618 14.3246 10.2476 17.733 10.2476 17.733C10.2476 17.733 4.07928 14.3763 2.64094 9.89964Z"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M13.5811 5.81787C14.4727 6.1062 15.1027 6.90204 15.1786 7.8362"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/5.png"
                                                    alt="image">
                                                <div class="product-tag">
                                                    <span class="badge badge-secondary">Sale</span>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a
                                                                href="<?php url('products/detail/123') ?>">Bamboo
                                                                toothbrushes</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a
                                                                    href="<?php url('products/detail/123') ?>">Accessories,</a>
                                                            </li>
                                                            <li><a href="<?php url('products/detail/123') ?>">Clocks</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#24262B" />
                                                                </svg>
                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>

                                                            </li>
                                                            <li>
                                                                <svg width="14" height="13" viewBox="0 0 14 13"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.2"
                                                                        d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                                        fill="#5E626F" />
                                                                </svg>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 370 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a
                                                                reader will be distracted by the readable content of a
                                                                page when looking at its layout. The point of using
                                                                Lorem Ipsum is that it has a more-or-less normal
                                                                distribution of letters, as opposed to using 'Content
                                                                here, content here', making it look like readable
                                                                English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate">
                                                        <div class="d-flex align-items-center mb-xl-3 mb-2">
                                                            <div class="meta-content">
                                                                <span class="price-name">Price</span>
                                                                <span class="price-num">$80.00</span>
                                                            </div>
                                                            <div class="meta-content">
                                                                <span class="color-name">Color</span>
                                                                <div class="d-flex align-items-center color-filter">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel20"
                                                                            value="#24262B" aria-label="..." checked>
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel21"
                                                                            value="#8CB2D1" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="radioNoLabel" id="radioNoLabel22"
                                                                            value="#0D775E" aria-label="...">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <a href="<?php url('cart') ?>"
                                                                class="btn btn-secondary btn-md btn-icon">
                                                                <i
                                                                    class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                                <span class="d-md-block d-none">Add to cart</span>
                                                            </a>
                                                            <div class="bookmark-btn style-1">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="flexCheckDefault4">
                                                                <label class="form-check-label" for="flexCheckDefault4">
                                                                    <svg width="23" height="23" viewBox="0 0 21 21"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2.64094 9.89964C1.74678 7.10798 2.79178 3.91714 5.72261 2.97298C7.26428 2.47548 8.96594 2.76881 10.2476 3.73298C11.4601 2.79548 13.2243 2.47881 14.7643 2.97298C17.6951 3.91714 18.7468 7.10798 17.8534 9.89964C16.4618 14.3246 10.2476 17.733 10.2476 17.733C10.2476 17.733 4.07928 14.3763 2.64094 9.89964Z"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M13.5811 5.81787C14.4727 6.1062 15.1027 6.90204 15.1786 7.8362"
                                                                            stroke="#5E626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-list-column" role="tabpanel"
                                aria-labelledby="tab-list-column-btn">
                                <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/1.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                        Water Bottles</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$45.00</del>
                                                    $40.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">Sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/2.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                        Cup</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$85.00</del>
                                                    $40.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">-50%</span>
                                                <span class="badge badge-primary">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/6.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip0_502_396">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Eco
                                                        friendly bags</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$95.00</del>
                                                    $20.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">-75%</span>
                                                <span class="badge badge-primary">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/7.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip0_502_306">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                        Water Bottles</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$56.00</del>
                                                    $25.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">Sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/8.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip0_502_906">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                        Cup</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$23.00</del>
                                                    $10.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">-11%</span>
                                                <span class="badge badge-primary">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/1.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip0_50_3906">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                        Water Bottles</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$85.00</del>
                                                    $45.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">Sale</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/2.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip0_52_3906">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Wooden
                                                        Cup</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$25.00</del>
                                                    $10.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">-21%</span>
                                                <span class="badge badge-primary">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/3.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip0_02_3906">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Bamboo
                                                        toothbrushes</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$65.00</del>
                                                    $35.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">-40%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media">
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/4.png"
                                                    alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                    <div class="btn btn-primary meta-icon dz-wishicon">
                                                        <svg class="dz-heart-fill" width="14" height="12"
                                                            viewBox="0 0 14 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.6412 5.80113C13.0778 6.9649 12.0762 8.02624 11.1657 8.8827C10.5113 9.49731 9.19953 10.7322 7.77683 11.62C7.30164 11.9159 6.69842 11.9159 6.22323 11.62C4.80338 10.7322 3.4888 9.49731 2.83435 8.8827C1.92382 8.02624 0.92224 6.96205 0.358849 5.80113C-0.551681 3.91747 0.344622 1.44196 2.21121 0.557041C3.98674 -0.282354 5.54034 0.292418 7.00003 1.44765C8.45972 0.292418 10.0133 -0.282354 11.786 0.557041C13.6554 1.44196 14.5517 3.91747 13.6412 5.80113Z"
                                                                fill="white" />
                                                        </svg>
                                                        <svg class="dz-heart feather feather-heart"
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path
                                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                            </path>
                                                        </svg>

                                                    </div>
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg class="dz-cart-check" width="15" height="15"
                                                            viewBox="0 0 15 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.9144 3.73438L5.49772 10.151L2.58105 7.23438"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <svg class="dz-cart-out" width="14" height="14"
                                                            viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.6033 10.4092C9.70413 10.4083 8.97452 11.1365 8.97363 12.0357C8.97274 12.9348 9.70097 13.6644 10.6001 13.6653C11.4993 13.6662 12.2289 12.938 12.2298 12.0388C12.2298 12.0383 12.2298 12.0378 12.2298 12.0373C12.2289 11.1391 11.5014 10.4109 10.6033 10.4092Z"
                                                                fill="white" />
                                                            <path
                                                                d="M13.4912 2.6132C13.4523 2.60565 13.4127 2.60182 13.373 2.60176H3.46022L3.30322 1.55144C3.20541 0.853911 2.60876 0.334931 1.90439 0.334717H0.627988C0.281154 0.334717 0 0.61587 0 0.962705C0 1.30954 0.281154 1.59069 0.627988 1.59069H1.90595C1.9858 1.59011 2.05338 1.64957 2.06295 1.72886L3.03004 8.35727C3.16263 9.19953 3.88712 9.8209 4.73975 9.82363H11.2724C12.0933 9.8247 12.8015 9.24777 12.9664 8.44362L13.9884 3.34906C14.0543 3.00854 13.8317 2.67909 13.4912 2.6132Z"
                                                                fill="white" />
                                                            <path
                                                                d="M6.61539 11.9676C6.57716 11.0948 5.85687 10.4077 4.98324 10.4108C4.08483 10.4471 3.38595 11.2048 3.42225 12.1032C3.45708 12.9653 4.15833 13.6505 5.02092 13.6653H5.06017C5.95846 13.626 6.65474 12.8658 6.61539 11.9676Z"
                                                                fill="white" />
                                                            <clipPath id="clip_502_3906">
                                                                <rect width="14" height="14" fill="white" />
                                                            </clipPath>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="<?php url('products/detail/123') ?>">Eco
                                                        friendly bags</a></h5>
                                                <ul class="star-rating">
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#FF8A00"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                    <li>
                                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z"
                                                                fill="#E4E5E8"></path>
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <h6 class="price">
                                                    <del>$35.00</del>
                                                    $20.00
                                                </h6>
                                            </div>
                                            <div class="product-tag">
                                                <span class="badge badge-secondary">-15%</span>
                                                <span class="badge badge-primary">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row page mt-0">
                        <div class="col-md-6">
                            <p class="page-text">Showing 1–5 Of 50 Results</p>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Blog Pagination">
                                <ul class="pagination style-1 p-t20">
                                    <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
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
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/password-check.svg"
                                alt="">
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
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/cart.svg"
                                alt="">
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
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/discovery.svg"
                                alt="">
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
                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/svg/icon-bx/box-tick.svg"
                                alt="">
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
                            <a href="<?php url('') ?>"><img
                                    src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/logo.svg" alt=""></a>
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
                                        <input name="dzEmail" required="required" type="email" class="form-control"
                                            placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit" class="btn">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                    <path d="M4.20972 10.7344H15.8717" stroke="#0D775E" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M10.0408 4.90112L15.8718 10.7345L10.0408 16.5678"
                                                        stroke="#0D775E" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
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
                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/1.png"
                                        alt="">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a href="javascript:void(0);">Wooden Water Bottles</a></h6>
                                    <span class="time">July 23, 2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="dz-media">
                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/2.png"
                                        alt="">
                                </div>
                                <div class="dz-content">
                                    <h6 class="name"><a href="javascript:void(0);">Eco friendly bags</a></h6>
                                    <span class="time">July 23, 2023</span>
                                </div>
                            </li>
                            <li>
                                <div class="dz-media">
                                    <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/shop/product/small/3.png"
                                        alt="">
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
                    <div
                        class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
                        <span class="me-3">We Accept: </span>
                        <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/footer-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

</footer>
<!-- Footer End -->

<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>

<!-- Quick Modal Start -->
<div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="icon feather icon-x"></i>
            </button>
            <div class="modal-body">
                <div class="row g-xl-4 g-3">
                    <div class="col-xl-6 col-md-6">
                        <div class="dz-product-detail mb-0">
                            <div class="swiper-btn-center-lr">
                                <div class="swiper quick-modal-swiper2">
                                    <div class="swiper-wrapper" id="lightgallery">
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat.png"
                                                    data-src="images/products/baby-seat.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat2.png"
                                                    data-src="images/products/baby-seat2.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat2.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat3.png"
                                                    data-src="images/products/baby-seat3.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat3.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="dz-media DZoomImage">
                                                <a class="mfp-link lg-item" href="images/products/baby-seat.png"
                                                    data-src="images/products/baby-seat.png">
                                                    <i class="feather icon-maximize dz-maximize top-right"></i>
                                                </a>
                                                <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/baby-seat.png"
                                                    alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat1.png"
                                                alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat2.png"
                                                alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat3.png"
                                                alt="image">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="<?php echo ASSETS_URL_ROOT . '/client_assets/' ?>images/products/thumb-img/seat1.png"
                                                alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
                            <div class="dz-content">
                                <div class="dz-content-footer">
                                    <div class="dz-content-start">
                                        <span class="badge bg-purple mb-2">SALE 20% Off</span>
                                        <h4 class="title mb-1"><a href="<?php url('products/detail/123') ?>">Baby
                                                Strollers</a></h4>
                                        <div class="review-num">
                                            <ul class="dz-rating me-2">
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                            fill="#FF8A00"></path>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.2"
                                                            d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                            fill="#5E626F"></path>
                                                    </svg>

                                                </li>
                                                <li>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.2"
                                                            d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z"
                                                            fill="#5E626F"></path>
                                                    </svg>
                                                </li>
                                            </ul>
                                            <span class="text-secondary me-2">4.7 Rating</span>
                                            <a href="javascript:void(0);">(5 customer reviews)</a>
                                        </div>
                                    </div>
                                </div>
                                <p class="para-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has.
                                </p>
                                <div class="meta-content m-b20 d-flex align-items-end">
                                    <div class="me-3">
                                        <span class="form-label">Price</span>
                                        <span class="price-num">$125.75 <del>$132.17</del></span>
                                    </div>
                                    <div class="btn-quantity light me-0">
                                        <label class="form-label">Quantity</label>
                                        <input type="text" value="1" name="demo_vertical2">
                                    </div>
                                </div>
                                <div class="btn-group cart-btn">
                                    <a href="<?php url('cart') ?>" class="btn btn-md btn-secondary text-uppercase">Add
                                        To
                                        Cart</a>
                                    <a href="shop-wishlist.html" class="btn btn-md btn-light btn-icon">
                                        <svg width="19" height="17" viewBox="0 0 19 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                fill="black"></path>
                                        </svg>
                                        Add To Wishlist
                                    </a>
                                </div>
                                <div class="dz-info mb-0">
                                    <ul>
                                        <li>
                                            <strong>SKU:</strong>
                                            <span>PRT584E63A</span>
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            <span>Bottles,</span>
                                            <span>Accessories,</span>
                                            <span>Mats,</span>
                                            <span>Bottles,</span>
                                            <span>Trackers</span>
                                        </li>
                                        <li>
                                            <strong>Tags:</strong>
                                            <span>Trackers,</span>
                                            <span>Bags,</span>
                                            <span>Cup,</span>
                                            <span>Toothbrushes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick Modal End -->

</div>

</body>