<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class HomeController extends Controller
{

    public function get()
    {

        $slides =  $this->model('product')->getProductsBySlide();
        $latestProducts =  $this->model('product')->getLatestProducts();
        if (isset($_SESSION['user'])) {
            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;
            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        }


        $this->view('frontend/index_new', ['slides' => $slides, 'latestProducts' => $latestProducts]);
    }
    public function getProducts()
    {
    }
}