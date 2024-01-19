<?php

use App\Libs\Database;

class CartModel extends Database
{

    public function addCart($data)
    {
        $product_id = mysqli_escape_string($this->link, $data['product_id']);
        $quantity = mysqli_escape_string($this->link, $data['demo_vertical2']);
        $user_id = mysqli_escape_string($this->link, $_SESSION['user']['id']);
        
        $exist_cart_sql = "SELECT * FROM cart WHERE product_id = '$product_id' AND user_id = '$user_id'";
        $exist_cart = $this->select($exist_cart_sql);
        
        if ($exist_cart) {
            $exist_cart =  $exist_cart->fetch_assoc();
            $new_quantity = $exist_cart['quantity'] + $quantity;
            // If the product already exists in the cart, update the quantity
            $update_sql = "UPDATE cart SET quantity = '$new_quantity' WHERE product_id = '$product_id' AND user_id = '$user_id'";
            $update_result = $this->update($update_sql);
            
            if ($update_result) {
                // Quantity updated successfully
                return $update_result;
            } else {
                // Failed to update quantity
                return false;
            }
        } else {
            // If the product doesn't exist in the cart, insert a new row
            $insert_sql = "INSERT INTO cart (product_id, quantity, user_id) VALUES ('$product_id', '$quantity', '$user_id')";
            $insert_result = $this->insert($insert_sql);
            
            if ($insert_result) {
                // Get the ID of the inserted product
                return $insert_result;
            } else {
                // Failed to insert the product into the cart
                return false;
            }
        }
    }
    public function getAllCarts()
    {
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);
        $sql = "SELECT c.*, p.promotion_price , p.name AS product_name, pi.image AS product_image
        FROM cart AS c
        JOIN products AS p ON c.product_id = p.id
        LEFT JOIN (
            SELECT product_id, MIN(id) AS min_image_id, image
            FROM product_img
            GROUP BY product_id
        ) AS pi ON p.id = pi.product_id
        WHERE c.user_id = '$user_id'";
        $result = $this->select($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function deleteCart($cart_id)
    {
        $cart_id = mysqli_real_escape_string($this->link, $cart_id);
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "DELETE FROM cart
                WHERE id = '$cart_id' AND user_id = '$user_id'";
        $result = $this->delete($sql);

        if ($result) {
            return true; // Xóa thành công
        } else {
            return false; // Xóa thất bại
        }
    }
    public function deleteAllByUserId()
    {
        $userId = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);


        $sql = "DELETE FROM cart
                WHERE user_id = '$userId'  ";
        $result = $this->delete($sql);

        if ($result) {
            return true; // Xóa thành công
        } else {
            return false; // Xóa thất bại
        }
    }
    public function updateCart($cart_id, $cart_quantity)
    {
        $cart_id = mysqli_real_escape_string($this->link, $cart_id);
        $cart_quantity = mysqli_real_escape_string($this->link, $cart_quantity);
        $user_id = mysqli_real_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "UPDATE cart
                SET quantity = '$cart_quantity'
                WHERE id = '$cart_id' AND user_id = '$user_id'";
        $result = $this->update($sql);

        if ($result) {
            return true; // Cập nhật thành công
        } else {
            return false; // Cập nhật thất bại
        }
    }
}
