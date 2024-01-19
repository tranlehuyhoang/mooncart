<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class CartController extends Controller
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
        return $this->view('frontend/cart', ['carts' => $carts]);
    }
    public function add()
    {
        AuthMiddleware::handle();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // dd($_POST);
            $this->model('cart')->addCart($_POST);
            redirect('cart');
        } else {

            redirect('');
        }

        // dd($product_id);
        // return $this->view('frontend/wishlist');
    }
    public function delete($id)
    {
        // dd($id);
        $this->model('cart')->deleteCart($id);
        redirect('cart');
        // return $this->view('frontend/wishlist');
    }
    public function update()
    {

        // Kiểm tra xem có dữ liệu được gửi lên hay không
        // Lấy dữ liệu từ yêu cầu POST và giải mã chuỗi JSON thành mảng PHP
        $inputsArray = json_decode($_POST['inputsArray'], true);

        foreach ($inputsArray as $input) {
            $this->model('cart')->updateCart($input['id'], $input['value']);
        }



        // dd($id);
        redirect('carts');
        // return $this->view('frontend/wishlist');

    }
}
