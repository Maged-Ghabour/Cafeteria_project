<?php

class User
{
    // get all Users
    public function index()
    {
        global $conn;
        $sql = "SELECT * from users";

        $result = $conn->query($sql);
        $users = [];

        if ($result->num_rows > 0) {
            // output data of each row 
            while ($row = $result->fetch_assoc()) {
                array_push($users, $row);
            }
            return $users;
        } else {
            return false;
        }
    }

    // Show Product by id 
    public function show($id)
    {
        global $conn;
        $sql = "SELECT * from users
        WHERE users.id = '$id'";

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $product = $result->fetch_assoc();
            return $product;
        } else {
            return false;
        }
    }

    // Update User
    public function update($id, $name,  $room_id, $email, $password, $phone)
    {
        global $conn;

        $name = mysqli_real_escape_string($conn, $name);
        $sql = "UPDATE users  
            SET `name` = '$name' , 
                `room_id` = '$room_id' ,
                `email` = '$email' , 
                `password` = '$password' ,
                `phone` = '$phone' 
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
        $sql = "DELETE FROM users WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}
