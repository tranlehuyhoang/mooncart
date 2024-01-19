<?php

use App\Libs\Session;
use App\Libs\Controller;
use App\Middleware\GuestMiddleware as Guest;

class CouponController extends Controller
{
    public function check_coupon()
    {

     $coupon = $this->model('coupon')->get_coupon($_POST['coupon']);
     if ($coupon) {
          Session::set('coupon', $coupon['discount']);
       redirect('cart');

    } else {
        // User has an unrecognized role, handle accordingly (e.g., display an error or deny access)
        // Redirect to an appropriate page or display an error message
        redirect('cart');
        exit;
    }
        
    }
    
}
