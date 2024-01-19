<?php

use App\Libs\Database;

class WishlistModel extends Database
{

    public function addWishlist($productid)
    {

        $product_id = mysqli_escape_string($this->link, $productid);
        $user_id = mysqli_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "INSERT INTO wishlists 
        (product_id , user_id)
        VALUES 
        ('$product_id', '$user_id')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            return $result;
        } else {
            return false;
        }
    }
    public function getAllWishlistsByUserId()
    {
        $userId = mysqli_escape_string($this->link, $_SESSION['user']['id']);

        $sql = "SELECT w.*, p.promotion_price , p.price , p.name AS product_name, pi.image AS product_image
        FROM wishlists AS w
        JOIN products AS p ON w.product_id = p.id
        LEFT JOIN (
            SELECT product_id, MIN(id) AS min_image_id, image
            FROM product_img
            GROUP BY product_id
        ) AS pi ON p.id = pi.product_id
        WHERE w.user_id = '$userId'
        order by w.created_at desc ";
        $result = $this->select($sql);

        if ($result) {
            // Return the retrieved wishlists
            return $result;
        } else {
            return false;
        }
    }
    public function deleteWishlist($wishlistId)
    {
        $wishlistId = mysqli_escape_string($this->link, $wishlistId);

        $sql = "DELETE FROM wishlists WHERE id = '$wishlistId'";
        $result = $this->delete($sql);

        if ($result) {
            // Successfully deleted the wishlist item
            return true;
        } else {
            return false;
        }
    }
}
