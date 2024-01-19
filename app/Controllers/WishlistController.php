<?php

use App\Libs\Controller;

class WishlistController extends Controller
{

    public function get()
    {
        $carts = $this->model('cart')->getAllCarts();
        $_SESSION['carts'] = $carts;
        $_SESSION['cartsCount'] = $carts->num_rows ?? 0;

        $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
        $_SESSION['wishlists'] = $wishlists;
        $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;

        return $this->view('frontend/wishlist', ['wishlists' => $wishlists]);
    }
    public function add($product_id)
    {
        // dd($product_id);
        $this->model('wishlist')->addWishlist($product_id);
        redirect('wishlist');
        // return $this->view('frontend/wishlist');
    }
    public function delete($id)
    {
        // dd($id);
        $this->model('wishlist')->deleteWishlist($id);
        redirect('wishlist');
        // return $this->view('frontend/wishlist');
    }
}
