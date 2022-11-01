<?php

class Validator
{
    var $errors = [];

    // For Checking Name
    public function name($name)
    {
        if ($name == '') {
            $error = 'Please Fill in Name cat not be null ';
        } else if (!is_string($name)) {
            $error = 'name Must Be String';
        } else if (strlen($name) > 100) {
            $error = 'name Must Be Less Than 100 characters ';
        } else {
            return $name;
        }
        // array if there were an error exists and dont send the user name
        array_push($this->errors, $error);
        return false;
    }

    public function category_id($category_id)
    {
        if ($category_id == null) {
            $error = 'Please Select Category';
        } else {
            return $category_id;
        }
        // array if there were an error exists and dont send the user name
        array_push($this->errors, $error);
        return false;
    }

    //For Price 
    public function price($price)
    {
        if ($price == '') {
            $error = 'Price cannot Be Null';
        } else if (!is_numeric($price)) {
            $error = ' Price Must Be integer ';
        } else {
            return $price;
        }
        // array if there were an error exists and dont send the user name
        array_push($this->errors, $error);
        return false;
    }

    //For Image 
    public function image($file_name, $file_error, $file_type)
    {
        $types = ['jpg', 'png', 'gif', 'jpeg'];

        if ($file_name = '') {
            $error = 'image is required';
        } else if ($file_error !== 0) {
            $error = "Error In your Image Uploaded";
        } else if (!in_array($file_type, $types)) {
            $error = "Your Uploaded File Is Not An Image ";
        } else {
            return true;
        }
        array_push($this->errors, $error);
        return false;
    }
}
