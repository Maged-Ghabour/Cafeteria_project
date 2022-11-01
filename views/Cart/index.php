<?php
include 'config.php';


$user_id = $_SESSION['id'];



if (isset($_POST['add_to_cart'])) {

   $name = $_POST['name'];
   $price = $_POST['price'];
   $image = $_POST['image'];
   $quantity   = $_POST['quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($select_cart) > 0) {
      $message[] = 'Product already added To the cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(`user_id`, `name`, `price`, `image`, `quantity`) VALUES('$user_id', '$name', '$price', '$image', '$quantity  ')") or die('query failed');
      $message[] = 'Product add to cart';
   }
};

if (isset($_POST['update_cart'])) {
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'Cart is Updated';
}

if (isset($_GET['remove'])) {
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
   $message[] = 'Product is Deleted';
   header('location:index.php');
}

if (isset($_GET['delete_all'])) {
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:index.php');
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <title>Cafeteria Project</title>
   <meta content="" name="description" />
   <meta content="" name="keywords" />

   <!-- Favicons -->
   <link href="../../assets/img/favicon.png" rel="icon" />
   <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

   <!-- Vendor CSS Files -->
   <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
   <link href="../../assets/vendor/aos/aos.css" rel="stylesheet" />
   <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
   <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

   <!-- Template Main CSS File -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link href="../../assets/css/main.css" rel="stylesheet" />
   <link rel="stylesheet" href="css/style.css">
</head>
<!-- Start Includes -->
<?php
include('../../includes/session.php');
include('../../includes/navbar.php');
?>

<?php
include('../../controllers/DBController.php');
?>

<!-- Start Main  -->
<main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
      <div class="container">
         <div class="d-flex justify-content-between align-items-center">
            <h2>Sample Inner Page</h2>
            <ol>
               <li><a href="index.html">Home</a></li>
               <li>Create New Product</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- End Breadcrumbs -->



</main>



<div class="container-fluid">
   <!-- 
<div class="user-profile">

   <?php
   $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
   if (mysqli_num_rows($select_user) > 0) {
      $fetch_user = mysqli_fetch_assoc($select_user);
   };
   ?>

   <p> Current user : <span><?php echo $fetch_user['name']; ?></span> </p>
   <div class="flex">
      <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Are You sure you want to logout..!');" class="delete-btn">Logout</a>
   </div>

</div> -->


<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message alert alert-success text-center" onclick="this.remove();">'.$message.'</div>';
   }
}
?>


</div>
   <div class="container">
      <div class="row">
         <div class="col-8">
            <div class="products">

               <h2 class="my-3 text-secondary text-center"> Products </h2>

               <div class="box-container">

                  <?php
                  include('config.php');
                  $result = mysqli_query($conn, "SELECT * FROM products");
                  while ($row = mysqli_fetch_array($result)) {
                  ?>
                     <form method="post" class="box" action="">
                        <img src="../../uploads/<?php echo $row['image']; ?>" width="200">
                        <div class="name"><?php echo $row['name']; ?></div>
                        <div class="price"><?php echo $row['price']; ?></div>
                        <input type="hidden" min="1" name="quantity" value="1">
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

               <h2 class="mb-2 text-secondary text-center">Cart</h2>

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
                     if (mysqli_num_rows($cart_query) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                     ?>
                           <tr>
                              <td><img src="../../uploads/<?php echo $fetch_cart['image']; ?>" height="75" alt=""></td>
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
                     } else {
                        echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6"> Cart is Empty</td></tr>';
                     }
                     ?>
                     <tr class="table-bottom">
                        <td colspan="4">Total :</td>
                        <td><?php echo $grand_total; ?>$</td>
                        <td><a href="index.php?delete_all" onclick="return confirm('Delete all products from cart?');" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">Delete All</a></td>
                     </tr>
                  </tbody>
               </table>
           </div>



            </div>
         </div>


     
   </div>








</div>



<?php include('../../includes/footer.php'); ?>