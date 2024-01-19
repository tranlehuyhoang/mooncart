<?php

use App\Libs\Database;

class OrderdetailModel extends Database
{

    public function create_order_detail($carts, $orderId)
    {
        $userId = $_SESSION['user']['id'];

        // Check if the $carts array is not empty
        if (empty($carts)) {
            return false;
        }

        // Prepare the SQL query to insert order items
        $query = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ";

        $values = array();
        foreach ($carts as $cart) {
            $productId = $cart['product_id'];
            $quantity = $cart['quantity'];
            $price = $cart['promotion_price'];

            // Add the values to the list
            $values[] = "($orderId, $productId, $quantity, $price)";
        }

        // Join the values with commas
        $valuesString = implode(", ", $values);

        // Append the values string to the query
        $query .= $valuesString;

        // Execute the query
        $result = $this->insert($query);

        // Check if the insertion was successful
        if ($result) {
            return $this->getLastInsertedID();
        } else {
            return false;
        }
    }
    public function get_order_items_by_order_id($orderId)
    {
        // Prepare the SQL query
        $sql = "SELECT o.*, p.promotion_price , p.name AS product_name, pi.image AS product_image
        FROM order_items AS o
        JOIN products AS p ON o.product_id = p.id
        LEFT JOIN (
            SELECT product_id, MIN(id) AS min_image_id, image
            FROM product_img
            GROUP BY product_id
        ) AS pi ON p.id = pi.product_id
        WHERE o.order_id = '$orderId'";
        $result = $this->select($sql);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
}
