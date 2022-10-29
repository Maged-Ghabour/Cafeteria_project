<?php

class Product
{
    // get all products
    public function index()
    {
        global $conn;
        $sql = "SELECT products.*, category.id AS category_id, category.name AS category_name
            FROM products JOIN category
            ON products.category_id = category.id
            ORDER BY products.id DESC";
        $result = $conn->query($sql);
        $products = [];
        if ($result->num_rows > 0) {
            // output data of each row 
            while ($row = $result->fetch_assoc()) {
                array_push($products, $row);
            }
            return $products;
        } else {
            return false;
        }
    }

    // Show Product by id 
    public function show($id)
    {
        global $conn;
        $sql = "SELECT products.*, category.id AS category_id, category.name AS category_name 
        FROM products JOIN category 
        ON products.category_id = category.id 
        WHERE products.id = '$id'";

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $product = $result->fetch_assoc();
            return $product;
        } else {
            return false;
        }
    }

    // Adding New Products 
    public function store($name, $price, $image, $category_id)
    {
        global $conn;
        // avoid => ex: ('s)  
        $name = mysqli_real_escape_string($conn, $name);

        $sql = "INSERT INTO products(`name`, price, `image`, category_id)
                VALUES ('$name', '$price', '$image', '$category_id')";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Get Category Selection on create product  
    public function productCat()
    {
        global $conn;
        $sql = "SELECT * FROM category";

        $result = $conn->query($sql);
        $categories = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($categories, $row);
            }
            return $categories;
        } else {
            return false;
        }
    }

    // Update Product
    public function update($id, $name, $price, $category_id)
    {
        global $conn;

        $name = mysqli_real_escape_string($conn, $name);
        $sql = "UPDATE products  
            SET `name` = '$name' , 
                `price` = '$price' , 
                `category_id` = '$category_id' 
            WHERE `id` = '$id' ";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Delete Product 
    function destroy($id)
    {
        global $conn;
        $sql = "DELETE FROM products WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
