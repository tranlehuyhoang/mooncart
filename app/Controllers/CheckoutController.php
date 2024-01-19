<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class CheckoutController extends Controller
{

    public function get()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //             momo
            // vietinbank
            $latestId =  $this->model('order')->create_order($_POST);
            //create order items
            $result = $this->model('cart')->getAllCarts();
            $carts = [];

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $carts[] = $row;
                }
            }
            $this->model('orderdetail')->create_order_detail($carts, $latestId);
            //delete cart , session
            $this->model('cart')->deleteAllByUserId();

            if ($_POST['payment_method'] == 'momo') {
               $order_latest = $this->model('order')->getOrderById($latestId)->fetch_assoc();
               
               $payment_data['total_amount'] =  $order_latest['total_amount'];
               $payment_data['id'] =  $order_latest['id'];
           
               return $this->view('frontend/momo', ['data'=> $payment_data]);
            } else if ($_POST['payment_method'] == 'vietinbank') {
                $order_latest = $this->model('order')->getOrderById($latestId)->fetch_assoc();
               
                $payment_data['total_amount'] =  $order_latest['total_amount'];
                $payment_data['id'] =  $order_latest['id'];
            
                return $this->view('frontend/bank', ['data'=> $payment_data]);
            }
        }
        AuthMiddleware::handle();

        if (isset($_SESSION['user'])) {
            $carts = $this->model('cart')->getAllCarts();
            $_SESSION['carts'] = $carts;
            $_SESSION['cartsCount'] = $carts->num_rows ?? 0;
            $wishlists =  $this->model('wishlist')->getAllWishlistsByUserId();
            $_SESSION['wishlists'] = $wishlists;
            $_SESSION['wishlistsCount'] = $wishlists->num_rows ?? 0;
        }
        return $this->view('frontend/checkout',['carts' => $carts]);
    }
}
