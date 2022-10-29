<?php


require "DBController.php";
class Login
{

    public function attempt($email, $hashed_Password)
    {
        global $conn;
        $query = "SELECT * from users
        Where `email` = '$email'  and `password` = '$hashed_Password'";

        $result = $conn->query($query);

        $user = null;

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
        }
        return $user;
    }
}

