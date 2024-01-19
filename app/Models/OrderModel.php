<?php

use App\Libs\Database;

class OrderModel extends Database
{

    public function create_order($data)
    {
        // Validate the required fields
        if (empty($data['firstname']) || empty($data['lastname']) || empty($data['address']) || empty($data['city']) || empty($data['phone'])   || empty($data['payment_method']) || empty($data['total_amount'])) {
            return false;
        }

        // Extract the data fields
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $address = $data['address'];
        $city = $data['city'];
        $phone = $data['phone'];
        $payment_method = $data['payment_method'];
        $total_amount = $data['total_amount'];
        $shipping_price = $data['shipping_price'];
        $user_id = mysqli_escape_string($this->link, $_SESSION['user']['id']);

        $discount = $data['discount'] ?? '0';
        // Prepare the SQL query
        $query = "INSERT INTO orders (firstname, lastname, address, city, phone, payment_mode, total_amount, discount, shipping_price ,user_id) 
                  VALUES ('$firstname', '$lastname', '$address', '$city', '$phone',   '$payment_method', '$total_amount', '$discount', '$shipping_price', '$user_id')";

        // Execute the query
        $result = $this->insert($query);

        // Check if the insertion was successful
        if ($result) {
            return $this->getLastInsertedID();
        } else {
            return false;
        }
    }
    public function getOrders()
    {
        $query = "SELECT o.*, u.email
                  FROM orders AS o
                  JOIN users AS u ON o.user_id = u.id";
        $result = $this->select($query);
        return $result;
    }
    public function getOrderById($id)
    {
        $query = "SELECT o.*, u.id AS user_id , u.email  
                  FROM orders AS o
                  JOIN users AS u ON o.user_id = u.id
                  WHERE o.id = '$id' ";
        $result = $this->select($query);
        return $result;
    }
    public function deleteOrder($order_id)
    {
        $order_id = mysqli_real_escape_string($this->link, $order_id);
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "DELETE FROM orders
                WHERE id = '$order_id'";
        $result = $this->delete($sql);

        if ($result) {
            return true; // Xóa thành công
        } else {
            return false; // Xóa thất bại
        }
    }
}
