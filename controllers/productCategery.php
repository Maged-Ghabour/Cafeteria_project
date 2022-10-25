<?php
include('DBController.php');
class productCategory{
    public function showMyProduct($id){
       global $conn;
       $query="SELECT `name`,`price`,`image` FROM products WHERE `category_id` = $id";
       $result = $conn -> query($query);
       $Products = [];
       if($result->num_rows > 0){
      while( $row = $result->fetch_assoc()){
        array_push( $Products,$row);
      }
       }
       return $Products;
    }
}

$AllmyProducts = new productCategory();
var_dump($AllmyProducts->showMyProduct(53));
?>