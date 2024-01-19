<?php

use App\Libs\Controller;

class ProductsController extends Controller
{
    public function get()
    {

        if (isset($_SESSION['user'])) {
            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;
            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        }
        $this->view('frontend/products');
    }
    public function detail($product_id)

    {
        if (isset($_SESSION['user'])) {
            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;
            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        }
        $productDetails =  $this->model('product')->getProductDetails($product_id);
        $productImages =  $this->model('product')->getProductImages($product_id);
        # code...
        $this->view('frontend/product_detail', ['productDetails' => $productDetails, 'productImages' => $productImages]);
    }
}
