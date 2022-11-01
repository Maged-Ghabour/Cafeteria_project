<?php

class Order
{
    // // get all products
    // public function index()
    // {
    //     global $conn;
    //     $sql = "SELECT products.*, category.id AS category_id, category.name AS category_name
    //         FROM products JOIN category
    //         ON products.category_id = category.id
    //         ORDER BY products.id DESC";
    //     $result = $conn->query($sql);
    //     $products = [];
    //     if ($result->num_rows > 0) {
    //         // output data of each row 
    //         while ($row = $result->fetch_assoc()) {
    //             array_push($products, $row);
    //         }
    //         return $products;
    //     } else {
    //         return false;
    //     }
    // }

    // // Show Product by id 
    // public function show($id)
    // {
    //     global $conn;
    //     $sql = "SELECT products.*, category.id AS category_id, category.name AS category_name 
    //     FROM products JOIN category 
    //     ON products.category_id = category.id 
    //     WHERE products.id = '$id'";

    //     $result = $conn->query($sql);

    //     if ($result->num_rows == 1) {
    //         $product = $result->fetch_assoc();
    //         return $product;
    //     } else {
    //         return false;
    //     }
    // }

    // // Adding New Products 
    public function store($total_price, $user_id)
    {
        global $conn;
        $sql = "INSERT INTO orders(user_id, total_price)
                VALUES ('$user_id', '$total_price')";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    // Store Order Products

    public function orderDetails($user_id, $total_price, $product_name, $product_quantity, $product_price, $product_total)
    {
        global $conn;
        $addOrder = "INSERT INTO orders(`user_id`, total_price)
                VALUES ('$user_id', '$total_price')";

        $last_id = $conn->query($addOrder)->insert_id;

        $order = "SELECT orders.id FROM orders Where id = $last_id";

        $user = "SELECT users.*, orders.* 
            FROM users JOIN orders 
            WHERE orders.user_id = '$user_id'";


        $products = [];
        for ($i = 0; $i < count($products); $i++) {
            $products[$i]['product_name']     = $_POST['product_name'];
            $products[$i]['product_quantity'] = $_POST['product_quantity'];
            $products[$i]['product_price']    = $_POST['product_price'];
            $products[$i]['product_total']    = $_POST['product_total'];
        }

        $sql = "INSERT INTO orders_details(`order_id`, `user_id`, product_name, product_quantity, product_price, product_total)
                VALUES ('$order', '$user', '$product_name', '$product_quantity', '$product_price', '$product_total' )";
        // if ($conn->query($sql) === TRUE) {
        //     echo $sql;
        // } else {
        //     return false;
        // }
        echo $sql;
    }






    // // Get Category Selection on create product  
    // public function productCat()
    // {
    //     global $conn;
    //     $sql = "SELECT * FROM category";

    //     $result = $conn->query($sql);
    //     $categories = [];

    //     if ($result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             array_push($categories, $row);
    //         }
    //         return $categories;
    //     } else {
    //         return false;
    //     }
    // }

    // Update Product
    // public function update($id, $name, $price, $category_id)
    // {
    //     global $conn;

    //     $name = mysqli_real_escape_string($conn, $name);
    //     $sql = "UPDATE products  
    //         SET `name` = '$name' , 
    //             `price` = '$price' , 
    //             `category_id` = '$category_id' 
    //         WHERE `id` = '$id' ";

    //     if ($conn->query($sql) === TRUE) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // // Delete Product 
    // function destroy($id)
    // {
    //     global $conn;
    //     $sql = "DELETE FROM products WHERE id = '$id'";
    //     if ($conn->query($sql) === TRUE) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
