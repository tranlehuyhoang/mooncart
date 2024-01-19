<?php

use App\Libs\Database;

class ProductModel extends Database
{

    public function addProduct($data,  $listFile)
    {
        $date = date("Y-m-d h:i:sa");
        $name = $data['name'];
        $slug = $data['slug'];
        $small_description = $data['small_description'];
        $description = $data['description'];
        $price = $data['price'];
        $promotion_price = $data['promotion_price'];
        $quantity = $data['quantity'];
        $feature = $data['feature'] ? true : false;
        $status = $data['status'];
        $publish_date = $data['publish_date'];
        $meta_keyword = $data['meta_keyword'];
        $meta_description = $data['meta_description'];
        $category_id = $data['category_id'];
        $slide = $data['slide'] ? 1 : 0;;



        $name = mysqli_escape_string($this->link, $name);
        $slug = mysqli_escape_string($this->link, $slug);
        $small_description = mysqli_escape_string($this->link, $small_description);
        $description = mysqli_escape_string($this->link, $description);
        $price = mysqli_escape_string($this->link, $price);
        $promotion_price = mysqli_escape_string($this->link, $promotion_price);
        $quantity = mysqli_escape_string($this->link, $quantity);
        $feature = mysqli_escape_string($this->link, $feature);
        $status = mysqli_escape_string($this->link, $status);
        $publish_date = mysqli_escape_string($this->link, $publish_date);
        $category_id = mysqli_escape_string($this->link, $category_id);
        $meta_keyword = mysqli_escape_string($this->link, $meta_keyword);
        $meta_description = mysqli_escape_string($this->link, $meta_description);



        $sql = "INSERT INTO products 
        (name, slug, small_description, description, price, promotion_price, quantity,
         feature, status, publish_date, meta_keyword, meta_description,slide,category_id)
        VALUES 
        ('$name', '$slug', '$small_description', '$description', '$price',
         '$promotion_price', '$quantity', '$feature', '$status', '$publish_date',
         '$meta_keyword', '$meta_description', '$slide', '$category_id')";
        $result = $this->insert($sql);
        if ($result) {
            // Get the ID of the inserted product
            $productId = mysqli_insert_id($this->link);
            return $productId;
        } else {
            return false;
        }
    }
    public function getAllProducts()
    {
        $sql = "SELECT p.*, c.name AS category_name, pi.image AS product_image
            FROM products AS p
            JOIN categories AS c ON p.category_id = c.id
            LEFT JOIN product_img AS pi ON p.id = pi.product_id
            GROUP BY p.id";

        $result = $this->select($sql);
        return $result;
    }
    public function getSearchProducts($search)
    {
        $sql = "SELECT p.*, c.name AS category_name, pi.image AS product_image
            FROM products AS p
            JOIN categories AS c ON p.category_id = c.id
            LEFT JOIN product_img AS pi ON p.id = pi.product_id
            WHERE p.name LIKE '%$search%'
            GROUP BY p.id";

        $result = $this->select($sql);
        return $result;
    }
    // public function getAllProducts()
    // {
    //     $sql = "SELECT *, c.name AS product_name, pi.image AS product_image
    //             FROM products as p
    //             JOIN categories  as c ON p.id = c.id
    //             LEFT JOIN product_img as pi ON p.id = pi.product_id
    //             GROUP BY p.id
    //             ";

    //     $result = $this->select($sql);
    //     return $result;
    // }
    public function getProductsBySlide()
    {
        $sql = "SELECT p.*, c.name AS category_name, pi.image AS product_image
        FROM products AS p
        JOIN categories AS c ON p.category_id = c.id
        LEFT JOIN product_img AS pi ON p.id = pi.product_id
        WHERE p.slide = 1

        GROUP BY p.id";


        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getLatestProducts()
    {
        $sql = "SELECT p.*, c.name AS product_name, pi.image AS product_image
            FROM products AS p
            JOIN categories AS c ON p.category_id = c.id
            LEFT JOIN (
                SELECT product_id, MIN(id) AS min_image_id, image
                FROM product_img
                GROUP BY product_id
            ) AS pi ON p.id = pi.product_id
            ORDER BY p.publish_date DESC
            LIMIT 8";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getProductDetails($id)
    {
        $sql = "SELECT p.*, c.name AS category_name 
            FROM products AS p
            JOIN categories AS c ON p.category_id = c.id
        
            WHERE p.id = $id
            ORDER BY p.publish_date DESC";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getProductImages($id)
    {
        $sql = "SELECT  * 
            FROM product_img
            
            WHERE product_img.product_id = $id
            ORDER BY id DESC";

        $result = $this->select($sql);

        if ($result !== false) {
            return $result;
        } else {
            return false;
        }
    }
    public function getProductById($productId)
    {
        $query = "SELECT * FROM products WHERE id = '$productId'";
        $result = $this->select($query); // Assuming $this->db is your mysqli connection object

        $product = $result->fetch_assoc();

        return $product;
    }
    public function product_edit($data, $images, $id)
    {
        // Retrieve the existing product data
        $query = "SELECT * FROM products WHERE id = '$id'";
        $result = $this->select($query); // Assuming $this->db is your mysqli connection object

        $product = $result->fetch_assoc();
        // Update the product data with the new values
        $product['name'] = mysqli_escape_string($this->link, $data['name']);
        $product['slug'] = mysqli_escape_string($this->link, $data['slug']);
        $product['small_description'] = mysqli_escape_string($this->link, $data['small_description']);
        $product['description'] = mysqli_escape_string($this->link, $data['description']);
        $product['price'] = mysqli_escape_string($this->link, $data['price']);
        $product['promotion_price'] = mysqli_escape_string($this->link, $data['promotion_price']) ?? 0;
        $product['quantity'] = mysqli_escape_string($this->link, $data['quantity']);
        $product['feature'] = mysqli_escape_string($this->link, $data['feature'] ? true : false);
        $product['status'] = mysqli_escape_string($this->link, $data['status']);
        $product['publish_date'] = mysqli_escape_string($this->link, $data['publish_date']);
        $product['meta_keyword'] = mysqli_escape_string($this->link, $data['meta_keyword']);
        $product['meta_description'] = mysqli_escape_string($this->link, $data['meta_description']);
        $product['slide'] = mysqli_escape_string($this->link, $data['slide'] ? 1 : 0);
        $product['category_id'] = mysqli_escape_string($this->link, $data['category_id']);

        // Update the product in the database
        $sql = "UPDATE products SET
                name = '{$product['name']}',
                slug = '{$product['slug']}',
                small_description = '{$product['small_description']}',
                description = '{$product['description']}',
                price = '{$product['price']}',
                promotion_price = '{$product['promotion_price']}',
                quantity = '{$product['quantity']}',
                feature = '{$product['feature']}',
                status = '{$product['status']}',
                publish_date = '{$product['publish_date']}',
                meta_keyword = '{$product['meta_keyword']}',
                meta_description = '{$product['meta_description']}',
                slide = '{$product['slide']}',
                category_id = '{$product['category_id']}'
                WHERE id = '$id'";

        $result = $this->update($sql);

        if ($result) {
            return $product;
        } else {
            return false;
        }
    }
    public function delete_product($id)
    {



        $query = "DELETE FROM products WHERE id = '$id'";


        // Execute the query
        $this->delete($query);
    }
}
