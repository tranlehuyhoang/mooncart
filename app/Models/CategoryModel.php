<?php

use App\Libs\Database;

class CategoryModel extends Database
{
    public function getAll()
    {
        $query = "SELECT * FROM categories";
        $result = $this->select($query); // Assuming $this->db is your mysqli connection object
        $categories = [];
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
        }
        
        return $categories;
    }
    public function create($data)
    {
     // Validate the required fields
     if (empty($data['name']) || empty($data['status'])) {
        return false;
    }

    // Extract the data fields
    $name = $data['name'];
    $status = $data['status'];
    $image = $data['image'] ?? null;
    $slug = $data['slug'] ?? null;
    $publish_date = $data['publish_date'] ?? null;

    // Additional validation or manipulation of the data can be performed here

    // Prepare the SQL query
    $query = "INSERT INTO categories (name, status, image, slug, publish_date) 
              VALUES ('$name', '$status', '$image', '$slug', '$publish_date')";

    // Execute the query
    $result = $this->insert($query);

    // Check if the insertion was successful
    if ($result) {
        return true;
    } else {
        return false;
    }
    }
    public function getCategoryById($categoryId)
    {
        $query = "SELECT * FROM categories WHERE id = '$categoryId'";
        $result = $this->select($query); // Assuming $this->db is your mysqli connection object
       
        $category = $result->fetch_assoc();
        
        return $category;
    }
    public function delete_cate($id)
{
    

    
    $query = "DELETE FROM categories WHERE id = '$id'";

  
    // Execute the query
    $this->delete($query);

    
}
    public function edit($data , $id)
{
    // Validate the required fields
    if (  empty($data['name'])  ) {
        return false;
    }

    // Extract the data fields
    $name = $data['name'];
    $status = $data['status'];
    $image = $data['image'] ?? null;
    $slug = $data['slug'] ?? null;
    $publish_date = $data['publish_date'] ?? null;

    // Additional validation or manipulation of the data can be performed here

    // Prepare the SQL query
    if (isset($data['image'])) {
        $image = $data['image'];
        // Include the image field in the SQL query
        $query = "UPDATE categories SET name='$name', status='$status', image='$image', slug='$slug', publish_date='$publish_date' WHERE id='$id'";
    } else {
        // Exclude the image field from the SQL query
        $query = "UPDATE categories SET name='$name', status='$status', slug='$slug', publish_date='$publish_date' WHERE id='$id'";
    }
    // Execute the query
    $result = $this->update($query);

    // Check if the update was successful
    if ($result) {
        return true;
    } else {
        return false;
    }
}
}
