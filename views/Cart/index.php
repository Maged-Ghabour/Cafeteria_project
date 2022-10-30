<?php

include '../../controllers/DBController.php';
session_start();

global $conn;
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

   $name = $_POST['name'];
   $price = $_POST['price'];
   $image = $_POST['image'];
   $quantity   = $_POST['quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Product already added To the cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(`user_id`, `name`, `price`, `image`, `quantity`) VALUES('$user_id', '$name', '$price', '$image', '$quantity  ')") or die('query failed');
      $message[] = 'Product add to cart';
   }

};

if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'Cart is Updated';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
   header('location:index.php');
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cart</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
   
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container-fluid">
<!-- 
<div class="user-profile">

   <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>

   <p> Current user : <span><?php echo $fetch_user['name']; ?></span> </p>
   <div class="flex">
      <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are You sure you want to logout..!');" class="delete-btn">Logout</a>
   </div>

</div> -->


<div class="container">
  <div class="row">
    <div class="col-8">
      <div class="products">

      <h1 class="heading"> Products </h1>

      <div class="box-container">

      <?php
      include('config.php');
      $result = mysqli_query($conn, "SELECT * FROM products");      
      while($row = mysqli_fetch_array($result)){
      ?>
         <form method="post" class="box" action="">
            <img src="admin/<?php echo $row['image']; ?>"  width="200">
            <div class="name"><?php echo $row['name']; ?></div>
            <div class="price"><?php echo $row['price']; ?></div>
            <input type="number" min="1" name="quantity" value="1">
            <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
            <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      <?php
         };
      ?>

      </div>

      </div>
    </div>
    <div class="col-4">
      <div class="shopping-cart">

      <h1 class="heading">Add to cart</h1>

      <table>
         <thead>
            <th>image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Qunatity</th>
            <th>Totol</th>
            <th>Action</th>
         </thead>
         <tbody>
         <?php
            $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $grand_total = 0;
            if(mysqli_num_rows($cart_query) > 0){
               while($fetch_cart = mysqli_fetch_assoc($cart_query)){
         ?>
            <tr>
               <td><img src="admin/<?php echo $fetch_cart['image']; ?>" height="75" alt=""></td>
               <td><?php echo $fetch_cart['name']; ?></td>
               <td><?php echo $fetch_cart['price']; ?>$ </td>
               <td>
                  <form action="" method="post">
                     <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                     <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                     <input type="submit" name="update_cart" value="update" class="option-btn">
                  </form>
               </td>
               <td><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>$</td>
               <td><a href="index.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('إزالة العنصر من سلة التسوق؟');">Delete</a></td>
            </tr>
         <?php
            $grand_total += $sub_total;
               }
            }else{
               echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6"> Cart is Empty</td></tr>';
            }
         ?>
         <tr class="table-bottom">
            <td colspan="4">Total  :</td>
            <td><?php echo $grand_total; ?>$</td>
            <td><a href="index.php?delete_all" onclick="return confirm('Delete all products from cart?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Delete All</a></td>
         </tr>
      </tbody>
      </table>



      </div>
    </div>


  </div>
</div>








</div>

</body>
</html>