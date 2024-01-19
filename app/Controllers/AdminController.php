<?php

use App\Libs\Controller;

class AdminController extends Controller
{

    public function get()
    {

        return $this->view('admin/index');
    }
    public function products()
    {
        $products =  $this->model('product')->getAllProducts();

        # code...
        $this->view('admin/products', ['products' => $products]);
    }
    public function productadd()
    {
        $category =  $this->model('category')->getAll();
        # code...
        $this->view('admin/products-add', ['categories' => $category]);
    }
    public function store_add_product()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $images = $_FILES['images'];
            $result =  $this->model('product')->addProduct($_POST, $images);

            if ($result) {
                foreach ($images['name'] as $key => $name) {
                    $tmp_name = $images['tmp_name'][$key];
                    $error = $images['error'][$key];

                    if ($error === UPLOAD_ERR_OK) {
                        $uploadDir = 'upload/';
                        $fileName = uniqid() . '_' . $name;
                        $destination = $uploadDir . $fileName;

                        if (move_uploaded_file($tmp_name, $destination)) {
                            // File moved successfully, update the file path in the database
                            $resultss = $this->model('productimages')->addImage($fileName, $result);
                        } else {
                            // Failed to move the file, handle the error
                            echo "Error moving file: " . $name . "<br>";
                            echo "<br>";
                        }
                    }
                }
                $message = 'Product created successfully';

                $this->view('admin/products', ['message' => $message]);
                exit;
            } else {
                // Log the result
                // Example:
                $message = 'Failed to create category';
                $this->view('admin/category-add', ['message' => $message]);
            }

            $this->view('admin/products-add');
        }

        # code...
        $this->view('admin/products-add');
    }
    public function productdelete($id)
    {
        $this->model('product')->delete_product($id);

        redirect('admin/products');



        # code...
    }
    public function categories()
    {

        $category =  $this->model('category')->getAll();
        $this->view('admin/categories', ['categories' => $category]);
    }
    public function categoryadd()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Process the form data
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'upload/';
                $fileName = uniqid() . '_' . $_FILES['image']['name'];
                $destination = $uploadDir . $fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                $_POST['image'] = $destination;
            }
            $result =  $this->model('category')->create($_POST);
            if ($result) {
                // Log the result
                // Example:
                $message = 'Category created successfully';

                // Redirect back
                // Example:
                $this->view('admin/category-add', ['message' => $message]);
                exit;
            } else {
                // Log the result
                // Example:
                $message = 'Failed to create category';
                $this->view('admin/category-add', ['message' => $message]);
            }
        } else {
            $this->view('admin/category-add');
        }
        # code...
    }
    public function categoryedit($id)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form data has been submitted, process it
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'upload/';
                $fileName = uniqid() . '_' . $_FILES['image']['name'];
                $destination = $uploadDir . $fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                $_POST['image'] = $destination;
            }
            // Process and save the form data as needed
            $result =  $this->model('category')->edit($_POST, $id);
            if ($result) {

                $message = 'Category created successfully';


                redirect('admin/categories');
                exit;
            } else {

                $message = 'Failed to create category';
                $this->view('admin/category-edit', ['message' => $message]);
            }
            // Redirect or display a success message
            // Example: redirect to a success page
        } else {
            // Retrieve the category data for editing
            $category = $this->model('category')->getCategoryById($id);
            $this->view('admin/category-edit', ['category' => $category]);
        }
    }
    public function productedit($id)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $images = $_FILES['images'];
            $result =  $this->model('product')->product_edit($_POST, $images, $id);

            if ($result) {
                foreach ($images['name'] as $key => $name) {
                    $tmp_name = $images['tmp_name'][$key];
                    $error = $images['error'][$key];

                    if ($error === UPLOAD_ERR_OK) {
                        $uploadDir = 'upload/';
                        $fileName = uniqid() . '_' . $name;
                        $destination = $uploadDir . $fileName;

                        if (move_uploaded_file($tmp_name, $destination)) {
                            // File moved successfully, update the file path in the database
                            $resultss = $this->model('productimages')->addImage($fileName, $id);
                        } else {
                            // Failed to move the file, handle the error
                            echo "Error moving file: " . $name . "<br>";
                            echo "<br>";
                        }
                    }
                }
                $message = 'Product edited successfully';

                redirect('admin/products');
                exit;
            } else {
                // Log the result
                // Example:
                $message = 'Failed to edit category';
                $this->view('admin/category-add', ['message' => $message]);
            }

            $this->view('admin/products-add');
        } else {

            // Retrieve the product data for editing
            $product = $this->model('product')->getProductById($id);
            $categories =  $this->model('category')->getAll();
            $images =  $this->model('productimages')->getImagesByProductId($id);
            $this->view('admin/products-edit', ['product' => $product, 'categories' => $categories, 'images' => $images]);
        }
    }
    public function product_image_delete($id)
    {
        $this->model('productimages')->delete_by_id($id);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();




        # code...
    }
    public function categorydelete($id)
    {
        $this->model('category')->delete_cate($id);

        redirect('admin/categories');



        # code...
    }
    public function customers()
    {

        $customers = $this->model('user')->getCustomers();
        $this->view('admin/customers', ['customers' => $customers]);
    }
    public function update_to_admin()
    {
        $id = $_POST['user_id'];
        $result =  $this->model('user')->update_role($id);

        redirect('admin/customers');
    }
    public function delete_customer($id)
    {
        echo $id;
        $result =  $this->model('user')->delete_user($id);

        redirect('admin/customers');
    }
    public function customerdetails()
    {

        # code...
        $this->view('admin/customer-details');
    }
    public function orders()
    {
        $orders =  $this->model('order')->getOrders();
        $this->view('admin/orders', ['orders' => $orders]);
    }
    public function ordersdetails($id)
    {
        $order =  $this->model('order')->getOrderById($id);
        $order_items =  $this->model('orderdetail')->get_order_items_by_order_id($id);
        // print_r($order_items->fetch_assoc());
        // print_r($order_items);
        $this->view('admin/order-details', ['order' => $order, 'order_items' => $order_items]);
    }
    public function orderdelete($id)
    {
        $this->model('order')->deleteOrder($id);
        redirect('admin/orders');
    }

    public function coupons()
    {

        $coupons = $this->model('coupon')->getAll();
        $this->view('admin/coupons', ['coupons' => $coupons]);
    }
    public function couponadd()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $result = $this->model('coupon')->_create($_POST);
            if ($result) {
                redirect('admin/coupons');
            } else {
                flash('error', 'Something went wrong!');
                $this->view('admin/coupon-add');
            }
        } else {

            # code...
            $this->view('admin/coupon-add');
        }
    }
    public function couponedit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form data has been submitted, process it

            // Process and save the form data as needed
            $result =  $this->model('coupon')->edit($_POST, $id);
            if ($result) {

                $message = 'Coupon created successfully';


                redirect('admin/coupons');
                exit;
            } else {
                $coupon = $this->model('coupon')->getCouponById($id);

                $message = 'Failed to edit conpon';
                $this->view('admin/coupon-edit', ['message' => $message]);
            }
            // Redirect or display a success message
            // Example: redirect to a success page
        } else {
            // Retrieve the category data for editing
            $coupon = $this->model('coupon')->getCouponById($id);
            $this->view('admin/coupon-edit', ['coupon' => $coupon]);
        }
    }
    public function coupondelete($id)
    {
        $this->model('coupon')->delete_coupon($id);

        redirect('admin/coupons');



        # code...
    }
}
