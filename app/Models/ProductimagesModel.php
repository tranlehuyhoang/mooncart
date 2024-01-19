<?php

use App\Libs\Database;

class ProductimagesModel extends Database
{

    public function addImage($path, $productid)
    {
 
       
        $path = mysqli_escape_string($this->link, $path);
        $productid = mysqli_escape_string($this->link, $productid);

        $sql = "INSERT INTO product_img 
        (image , product_id)
        VALUES 
        ('$path', '$productid')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            return $result;
        } else {
            return false;
        }
    }
    public function getImagesByProductId($productid)
{
    $productid = mysqli_escape_string($this->link, $productid);

    $sql = "SELECT * FROM product_img WHERE product_id = '$productid'";
    $result = $this->select($sql);

    $images = array();

    if ($result) {
        // Fetch all the images and store them in an array
        while ($row = mysqli_fetch_assoc($result)) {
            $images[] = $row ;
        }
    }

    return $images;
}
public function delete_by_id($id)
{
    $id = mysqli_escape_string($this->link, $id);

    $sql = "DELETE FROM product_img WHERE id = '$id'";
    $result = $this->delete($sql);

    return $result;
}
}