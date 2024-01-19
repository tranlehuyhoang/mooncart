<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">

<head>
    <meta charSet="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Stroyka Admin - eCommerce Dashboard Template</title>
    <!-- icon -->
    <link rel="icon" type="image/png" href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>images/favicon.png" />
    <!-- fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" />
    <!-- css -->
    <link rel="stylesheet"
        href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/bootstrap/css/bootstrap.ltr.css" />
    <link rel="stylesheet"
        href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/highlight.js/styles/github.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/simplebar/simplebar.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/quill/quill.snow.css" />
    <link rel="stylesheet"
        href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/air-datepicker/css/datepicker.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/select2/css/select2.min.css" />
    <link rel="stylesheet"
        href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/datatables/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet"
        href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/fullcalendar/main.min.css" />
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>css/style.css" />
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-97489509-8');
    </script>
</head>

<body>
    <!-- sa-app -->
    <div class="sa-app sa-app--desktop-sidebar-shown sa-app--mobile-sidebar-hidden sa-app--toolbar-fixed">
        <!-- sa-app__sidebar -->
        <div class="sa-app__sidebar">
            <div class="sa-sidebar">
                <div class="sa-sidebar__header">
                    <a class="sa-sidebar__logo" href=<?php url('admin') ?>>
                        <!-- logo -->
                        <div class="sa-sidebar-logo"><svg xmlns="http://www.w3.org/2000/svg" width="120px"
                                height="20px">
                                <path
                                    d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6z">
                                </path>
                            </svg>
                            <div class="sa-sidebar-logo__caption">Admin</div>
                        </div>
                        <!-- logo / end -->
                    </a>
                </div>
                <div class="sa-sidebar__body" data-simplebar="">
                    <ul class="sa-nav sa-nav--sidebar" data-sa-collapse="">
                        <li class="sa-nav__section">
                            <div class="sa-nav__section-title"><span>Application</span></div>
                            <ul class="sa-nav__menu sa-nav__menu--root">
                                <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"><a href=<?php url('admin') ?>
                                        class="sa-nav__link"><span class="sa-nav__icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M8,13.1c-4.4,0-8,3.4-8-3C0,5.6,3.6,2,8,2s8,3.6,8,8.1C16,16.5,12.4,13.1,8,13.1zM8,4c-3.3,0-6,2.7-6,6c0,4,2.4,0.9,5,0.2C7,9.9,7.1,9.5,7.4,9.2l3-2.3c0.4-0.3,1-0.2,1.3,0.3c0.3,0.5,0.2,1.1-0.2,1.4l-2.2,1.7c2.5,0.9,4.8,3.6,4.8-0.2C14,6.7,11.3,4,8,4z">
                                                </path>
                                            </svg></span><span class="sa-nav__title">Dashboard</span></a></li>
                                <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                                    data-sa-collapse-item="sa-nav__menu-item--open"><a href="" class="sa-nav__link"
                                        data-sa-collapse-trigger=""><span class="sa-nav__icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M8,6C4.7,6,2,4.7,2,3s2.7-3,6-3s6,1.3,6,3S11.3,6,8,6z M2,5L2,5L2,5C2,5,2,5,2,5z M8,8c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3S2,9.7,2,8V5C2,6.7,4.7,8,8,8z M14,5L14,5C14,5,14,5,14,5L14,5z M2,10L2,10L2,10C2,10,2,10,2,10z M8,13c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3s-6-1.3-6-3v-3C2,11.7,4.7,13,8,13z M14,10L14,10C14,10,14,10,14,10L14,10z">
                                                </path>
                                            </svg></span><span class="sa-nav__title">Catalog</span><span
                                            class="sa-nav__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="9" viewBox="0 0 6 9" fill="currentColor">
                                                <path
                                                    d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                                </path>
                                            </svg></span></a>
                                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/products') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Products List</span></a></li>
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/productadd') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Product</span></a></li>
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/categories') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Categories List</span></a></li>
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/categoryadd') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Category</span></a></li>
                                    </ul>
                                </li>
                                <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                                    data-sa-collapse-item="sa-nav__menu-item--open"><a href="" class="sa-nav__link"
                                        data-sa-collapse-trigger=""><span class="sa-nav__icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M8,10c-3.3,0-6,2.7-6,6H0c0-3.2,1.9-6,4.7-7.3C3.7,7.8,3,6.5,3,5c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.5-0.7,2.8-1.7,3.7c2.8,1.3,4.7,4,4.7,7.3h-2C14,12.7,11.3,10,8,10z M8,2C6.3,2,5,3.3,5,5s1.3,3,3,3s3-1.3,3-3S9.7,2,8,2z">
                                                </path>
                                            </svg></span><span class="sa-nav__title">Customers</span><span
                                            class="sa-nav__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="9" viewBox="0 0 6 9" fill="currentColor">
                                                <path
                                                    d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                                </path>
                                            </svg></span></a>
                                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/customers') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Customers List</span></a></li>
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/customerdetails') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Customer</span></a></li>
                                    </ul>
                                </li>
                                <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                                    data-sa-collapse-item="sa-nav__menu-item--open"><a href="" class="sa-nav__link"
                                        data-sa-collapse-trigger=""><span class="sa-nav__icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M14.2,10.3c-0.1,0.4-0.5,0.7-0.9,0.7H4.8c-0.5,0-0.9-0.3-1-0.8L2.2,4C2.1,3.4,1.6,3,1,3H0.4C0.2,3,0,2.8,0,2.6V1.4C0,1.2,0.2,1,0.4,1h1.4c1,0,1.9,0.7,2.1,1.7l1.5,6.1C5.5,8.9,5.7,9,5.8,9h6.5c0.1,0,0.2-0.1,0.3-0.2l1.1-3.4C13.8,5.2,13.7,5,13.5,5H7.4C7.2,5,7,4.8,7,4.6V3.4C7,3.2,7.2,3,7.4,3H15c0.6,0,1,0.4,1,1v1L14.2,10.3z M4.5,13C5.3,13,6,13.7,6,14.5C6,15.3,5.3,16,4.5,16S3,15.3,3,14.5C3,13.7,3.7,13,4.5,13z M11.5,13c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5S10,15.3,10,14.5C10,13.7,10.7,13,11.5,13z">
                                                </path>
                                            </svg></span><span class="sa-nav__title">Orders</span><span
                                            class="sa-nav__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="9" viewBox="0 0 6 9" fill="currentColor">
                                                <path
                                                    d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                                </path>
                                            </svg></span></a>
                                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/orders') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Orders List</span></a></li>
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/ordersdetails') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Order Details</span></a></li>
                                    </ul>
                                </li>
                                <li class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                                    data-sa-collapse-item="sa-nav__menu-item--open"><a href="" class="sa-nav__link"
                                        data-sa-collapse-trigger=""><span class="sa-nav__icon"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                viewBox="0 0 16 16" fill="currentColor">
                                                <path
                                                    d="M11.5,3C12.9,3,14,4.1,14,5.5c0,2.7-4.3,6.4-6,7.4c-1.7-1-6-4.7-6-7.4C2,4.1,3.1,3,4.5,3C5.3,3,6,3.3,6.4,3.9L8,5.3l1.6-1.4C10,3.3,10.7,3,11.5,3 M11.5,1C10.1,1,8.8,1.6,8,2.7C7.2,1.6,5.9,1,4.5,1C2,1,0,3,0,5.5C0,10,7,15,8,15s8-5,8-9.5C16,3,14,1,11.5,1L11.5,1z">
                                                </path>
                                            </svg></span><span class="sa-nav__title">Coupon</span><span
                                            class="sa-nav__arrow"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="9" viewBox="0 0 6 9" fill="currentColor">
                                                <path
                                                    d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z">
                                                </path>
                                            </svg></span></a>
                                    <ul class="sa-nav__menu sa-nav__menu--sub" data-sa-collapse-content="">
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/coupons') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Coupons List</span></a></li>
                                        <li class="sa-nav__menu-item"><a href="<?php url('admin/couponadd') ?>"
                                                class="sa-nav__link"><span
                                                    class="sa-nav__menu-item-padding"></span><span
                                                    class="sa-nav__title">Coupon</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="sa-app__sidebar-shadow"></div>
            <div class="sa-app__sidebar-backdrop" data-sa-close-sidebar=""></div>
        </div>
        <!-- sa-app__sidebar / end -->
        <!-- sa-app__content -->
        <div class="sa-app__content">
            <!-- sa-app__toolbar -->
            <div class="sa-toolbar sa-toolbar--search-hidden sa-app__toolbar">
                <div class="sa-toolbar__body">
                    <div class="sa-toolbar__item"><button class="sa-toolbar__button" type="button" aria-label="Menu"
                            data-sa-toggle-sidebar=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M1,11V9h18v2H1z M1,3h18v2H1V3z M15,17H1v-2h14V17z"></path>
                            </svg></button></div>
                    <div class="sa-toolbar__item sa-toolbar__item--search">
                        <form class="sa-search sa-search--state--pending">
                            <div class="sa-search__body"><label class="visually-hidden" for="input-search">Search
                                    for:</label>
                                <div class="sa-search__icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                        height="1em" viewBox="0 0 16 16" fill="currentColor">
                                        <path
                                            d="M16.243 14.828C16.243 14.828 16.047 15.308 15.701 15.654C15.34 16.015 14.828 16.242 14.828 16.242L10.321 11.736C9.247 12.522 7.933 13 6.5 13C2.91 13 0 10.09 0 6.5C0 2.91 2.91 0 6.5 0C10.09 0 13 2.91 13 6.5C13 7.933 12.522 9.247 11.736 10.321L16.243 14.828ZM6.5 2C4.015 2 2 4.015 2 6.5C2 8.985 4.015 11 6.5 11C8.985 11 11 8.985 11 6.5C11 4.015 8.985 2 6.5 2Z">
                                        </path>
                                    </svg></div><input type="text" id="input-search" class="sa-search__input"
                                    placeholder="Search for the truth" autoComplete="off" /><button
                                    class="sa-search__cancel d-sm-none" type="button" aria-label="Close search"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                                        fill="currentColor">
                                        <path
                                            d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z">
                                        </path>
                                    </svg></button>
                                <div class="sa-search__field"></div>
                            </div>
                            <div class="sa-search__dropdown">
                                <div class="sa-search__dropdown-loader"></div>
                                <div class="sa-search__dropdown-wrapper">
                                    <div class="sa-search__suggestions sa-suggestions"></div>
                                    <div class="sa-search__help sa-search__help--type--no-results">
                                        <div class="sa-search__help-title">No results for &quot;<span
                                                class="sa-search__query"></span>&quot;</div>
                                        <div class="sa-search__help-subtitle">Make sure that all words are spelled
                                            correctly.</div>
                                    </div>
                                    <div class="sa-search__help sa-search__help--type--greeting">
                                        <div class="sa-search__help-title">Start typing to search for</div>
                                        <div class="sa-search__help-subtitle">Products, orders, customers, actions, etc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sa-search__backdrop"></div>
                        </form>
                    </div>
                    <div class="mx-auto"></div>
                    <div class="sa-toolbar__item d-sm-none"><button class="sa-toolbar__button" type="button"
                            aria-label="Show search" data-sa-action="show-search"><svg
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor">
                                <path
                                    d="M16.243 14.828C16.243 14.828 16.047 15.308 15.701 15.654C15.34 16.015 14.828 16.242 14.828 16.242L10.321 11.736C9.247 12.522 7.933 13 6.5 13C2.91 13 0 10.09 0 6.5C0 2.91 2.91 0 6.5 0C10.09 0 13 2.91 13 6.5C13 7.933 12.522 9.247 11.736 10.321L16.243 14.828ZM6.5 2C4.015 2 2 4.015 2 6.5C2 8.985 4.015 11 6.5 11C8.985 11 11 8.985 11 6.5C11 4.015 8.985 2 6.5 2Z">
                                </path>
                            </svg></button></div>
                    <div class="sa-toolbar__item dropdown"><button class="sa-toolbar__button" type="button"
                            id="dropdownMenuButton3" data-bs-toggle="dropdown" data-bs-reference="parent"
                            data-bs-offset="0,1" aria-expanded="false"><img
                                src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/flag-icons/24/DE.png"
                                class="sa-language-icon" alt="" /></button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/flag-icons/24/DE.png"
                                        class="sa-language-icon me-3" alt="" /><span class="ps-2">German</span></a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/flag-icons/24/FR.png"
                                        class="sa-language-icon me-3" alt="" /><span class="ps-2">French</span></a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/flag-icons/24/GB.png"
                                        class="sa-language-icon me-3" alt="" /><span class="ps-2">English</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/flag-icons/24/RU.png"
                                        class="sa-language-icon me-3" alt="" /><span class="ps-2">Russian</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#"><img
                                        src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>vendor/flag-icons/24/IT.png"
                                        class="sa-language-icon me-3" alt="" /><span class="ps-2">Italian</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sa-toolbar__item dropdown"><button class="sa-toolbar__button" type="button"
                            id="dropdownMenuButton2" data-bs-toggle="dropdown" data-bs-reference="parent"
                            data-bs-offset="0,1" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor">
                                <path
                                    d="M8,13c0,0-5.2,0-7,0c0-1-0.1-1.9,1-1.9C2,5,4,2,6,2c0-1.1,0-2,2-2c1.9,0,2,0.9,2,2c2,0,4,3,4,9c1,0,1,1,1,2C12.7,13,8,13,8,13z M6,14h4c0,1.1,0,2-2,2C6,16,6,15.1,6,14L6,14L6,14z">
                                </path>
                            </svg><span class="sa-toolbar__button-indicator">3</span></button>
                        <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton2">
                            <div class="sa-notifications">
                                <div class="sa-notifications__header">
                                    <div class="sa-notifications__header-title">Notifications</div><a
                                        class="sa-notifications__header-action" href="">Mark All as Read</a>
                                </div>
                                <ul class="sa-notifications__list">
                                    <li class="sa-notifications__item">
                                        <a href="#" class="sa-notifications__item-button">
                                            <div class="sa-notifications__item-icon">
                                                <div
                                                    class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--primary">
                                                    <div class="sa-symbol__icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                            fill="currentColor">
                                                            <path
                                                                d="M14.5,15h-1c-0.8,0-1.5-0.7-1.5-1.5v-8C12,4.7,12.7,4,13.5,4h1C15.3,4,16,4.7,16,5.5v8C16,14.3,15.3,15,14.5,15z M8.5,15h-1C6.7,15,6,14.3,6,13.5v-11C6,1.7,6.7,1,7.5,1h1C9.3,1,10,1.7,10,2.5v11C10,14.3,9.3,15,8.5,15z M2.5,15h-1C0.7,15,0,14.3,0,13.5v-5C0,7.7,0.7,7,1.5,7h1C3.3,7,4,7.7,4,8.5v5C4,14.3,3.3,15,2.5,15z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="sa-notifications__item-body">
                                                <div
                                                    class="sa-notifications__item-title sa-notifications__item-title--nowrap">
                                                    New report has been received</div>
                                                <div
                                                    class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap">
                                                    24 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sa-notifications__item">
                                        <a href="#" class="sa-notifications__item-button">
                                            <div class="sa-notifications__item-icon">
                                                <div
                                                    class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--warning">
                                                    <div class="sa-symbol__icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                            fill="currentColor">
                                                            <path
                                                                d="M8,6C4.7,6,2,4.7,2,3s2.7-3,6-3s6,1.3,6,3S11.3,6,8,6z M2,5L2,5L2,5C2,5,2,5,2,5z M8,8c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3S2,9.7,2,8V5C2,6.7,4.7,8,8,8z M14,5L14,5C14,5,14,5,14,5L14,5z M2,10L2,10L2,10C2,10,2,10,2,10z M8,13c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3s-6-1.3-6-3v-3C2,11.7,4.7,13,8,13z M14,10L14,10C14,10,14,10,14,10L14,10z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="sa-notifications__item-body">
                                                <div
                                                    class="sa-notifications__item-title sa-notifications__item-title--nowrap">
                                                    Creating a backup in the process</div>
                                                <div
                                                    class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap">
                                                    Completed: 37% (23.05 MB)</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sa-notifications__item">
                                        <a href="#" class="sa-notifications__item-button">
                                            <div class="sa-notifications__item-icon">
                                                <div
                                                    class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--primary">
                                                    <div class="sa-symbol__icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                            fill="currentColor">
                                                            <path
                                                                d="M14.2,10.3c-0.1,0.4-0.5,0.7-0.9,0.7H4.8c-0.5,0-0.9-0.3-1-0.8L2.2,4C2.1,3.4,1.6,3,1,3H0.4C0.2,3,0,2.8,0,2.6V1.4C0,1.2,0.2,1,0.4,1h1.4c1,0,1.9,0.7,2.1,1.7l1.5,6.1C5.5,8.9,5.7,9,5.8,9h6.5c0.1,0,0.2-0.1,0.3-0.2l1.1-3.4C13.8,5.2,13.7,5,13.5,5H7.4C7.2,5,7,4.8,7,4.6V3.4C7,3.2,7.2,3,7.4,3H15c0.6,0,1,0.4,1,1v1L14.2,10.3z M4.5,13C5.3,13,6,13.7,6,14.5C6,15.3,5.3,16,4.5,16S3,15.3,3,14.5C3,13.7,3.7,13,4.5,13z M11.5,13c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5S10,15.3,10,14.5C10,13.7,10.7,13,11.5,13z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="sa-notifications__item-body">
                                                <div
                                                    class="sa-notifications__item-title sa-notifications__item-title--nowrap">
                                                    Product added to cart</div>
                                                <div
                                                    class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap">
                                                    Drill Screwdriver Brandix ALX7054 200 Watts</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="sa-notifications__item">
                                        <a href="#" class="sa-notifications__item-button">
                                            <div class="sa-notifications__item-icon">
                                                <div class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--info">
                                                    <div class="sa-symbol__icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                            fill="currentColor">
                                                            <path
                                                                d="M8,10c-3.3,0-6,2.7-6,6H0c0-3.2,1.9-6,4.7-7.3C3.7,7.8,3,6.5,3,5c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.5-0.7,2.8-1.7,3.7c2.8,1.3,4.7,4,4.7,7.3h-2C14,12.7,11.3,10,8,10z M8,2C6.3,2,5,3.3,5,5s1.3,3,3,3s3-1.3,3-3S9.7,2,8,2z">
                                                            </path>
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="sa-notifications__item-body">
                                                <div
                                                    class="sa-notifications__item-title sa-notifications__item-title--nowrap">
                                                    Customer Ryan Ford says</div>
                                                <div
                                                    class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap">
                                                    What is a screen dimension of Brandix Series B monitor?</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="sa-notifications__footer"><a class="sa-notifications__footer-action"
                                        href="">See all 15 notifications</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown sa-toolbar__item"><button class="sa-toolbar-user" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-offset="0,1"
                            aria-expanded="false"><span
                                class="sa-toolbar-user__avatar sa-symbol sa-symbol--shape--rounded"><img
                                    src="<?php echo ASSETS_URL_ROOT . '/admin_assets/' ?>images/customers/customer-4-64x64.jpg"
                                    width="64" height="64" alt="" /></span><span class="sa-toolbar-user__info"><span
                                    class="sa-toolbar-user__title">Konstantin Veselovsky</span><span
                                    class="sa-toolbar-user__subtitle">stroyka@example.com</span></span></button>
                        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="app-inbox-list.html">Inbox</a></li>
                            <li><a class="dropdown-item" href="app-settings-toc.html">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="auth-sign-in.html">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="sa-toolbar__shadow"></div>
            </div>