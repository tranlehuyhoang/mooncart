<?php

use App\Libs\Controller;
use App\Middleware\GuestMiddleware as Guest;

class AuthController extends Controller
{
    public function get()
    {

        Guest::handle();
        return $this->view('frontend/login');
    }
    public function register()
    {
        Guest::handle();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result =  $this->model('user')->createUser($_POST);
            if ($result) {
                redirect('');
            } else {
                flash('error', 'Email has already been taken!');
                return $this->view('frontend/register');
            }
        } else {

            return $this->view('frontend/register');
        }
    }
    public function login()
    {
        Guest::handle();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result =  $this->model('user')->login($_POST);
            if ($result) {
                $_SESSION['user'] = $result;
                redirect('');
            } else {
                echo $result;
                flash('error', 'Email or password is wrong!');
                return $this->view('frontend/login');
            }
        } else {
            return $this->view('frontend/login');
        }
    }
    public function logout()
    {

        session_destroy();
        redirect('');
    }
}
