<?php

use App\Libs\Database;
use App\Helpers\Format as Format;

class CouponModel extends Database
{
    public function _create($data)
    {
       // Validate the required fields
       if (empty($data['code']) || empty($data['discount']) || empty($data['usage_limit']) ) {
        return false;
    }

    // Extract the data fields
    $code = $data['code'];
    $discount = $data['discount'];
    $usageLimit = $data['usage_limit'];
    $isActive = $data['is_active'];
    $expiresAt = Format::formatDate($data['expires_at']); ;
    
    // Prepare the SQL query
    $query = "INSERT INTO coupons (code, discount, usage_limit, is_active, expires_at ) 
              VALUES ('$code', $discount, $usageLimit, $isActive, '$expiresAt' )";

    // Execute the query
    $result = $this->insert($query);

    // Check if the insertion was successful
    if ($result) {
        return true;
    } else {
        return false;
    }
    }
 
    public function getAll()
    {
       
    $query = "SELECT * FROM coupons";

    // Execute the query
    $result = $this->select($query);

    // Check if the insertion was successful
    if ($result) {
        $coupons = [];
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $coupons[] = $row;
            }
        }
        return $coupons;
    } else {
        return false;
    }
    }
    public function getCouponById($couponId)
    {
        $query = "SELECT * FROM coupons WHERE id = '$couponId'";
        $result = $this->select($query); // Assuming $this->db is your mysqli connection object
       
        $coupon = $result->fetch_assoc();
        
        return $coupon;
    }
    public function edit($data , $id)
    {
        // Validate the required fields
        if (  empty($id)  ) {
            return false;
        }
    
        // Extract the data fields
        $code = $data['code'];
        $is_active = $data['is_active'] ?? 0;
        $discount = $data['discount'] ?? null;
        $usage_limit = $data['usage_limit'] ?? null;
        $expires_at = Format::formatDate($data['expires_at']); ;
    
        // Additional validation or manipulation of the data can be performed here
    
            // Exclude the image field from the SQL query
            $query = "UPDATE coupons SET code='$code', is_active='$is_active', discount='$discount', expires_at='$expires_at', usage_limit='$usage_limit'   WHERE id='$id'";
     
        // Execute the query
        $result = $this->update($query);
    
        // Check if the update was successful
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
   public function delete_coupon ($id) {
    $query = "DELETE FROM coupons WHERE id = '$id'";

  
    // Execute the query
    $this->delete($query);
    }
   public function get_coupon ($name) {
    $query = "SELECT * FROM coupons WHERE code = '$name' LIMIT 1";
    // Execute the query
    $result = $this->select($query);
    
    // Check if the update was successful
    if ($result) {
        $result = $result->fetch_assoc();
        return  $result;
    } else {
        return false;
    }
  
    // Execute the query
    
    }
 
}
