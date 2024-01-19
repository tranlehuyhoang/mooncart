<?php 
class RoleMiddleware
{
    public function handle()
    {
        // Start the session if it hasn't been started already
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if the user is logged in
        if (!isset($_SESSION['user'])) {
            // User is not logged in, handle accordingly (e.g., redirect to login page)
         redirect('auth/login');
            exit;
        }

        // // Get the user's role from the session or database
        $userRole = $_SESSION['user']['role'];

        // // Check the user's role and handle accordingly
        if ($userRole = 1) {
          
            $this->proceed();
    
        } else {
            // User has an unrecognized role, handle accordingly (e.g., display an error or deny access)
            // Redirect to an appropriate page or display an error message
            redirect('auth/login');
            exit;
        }
    }

    protected function proceed()
    {
        // Proceed with the next middleware or controller logic
    }
}