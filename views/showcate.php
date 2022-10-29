<?php
include('../controllers/categoryController.php');
$id = $_REQUEST['id'];
$Mycategory = $index->show($id);
include('../controllers/productCategery.php');
var_dump($AllmyProducts->showMyProduct($id));

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
  <div class="card mb-3" style="max-width: 1200px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="../../assets/img/chefs/<?php echo $Mycategory['image'] ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title text-center"><?php echo $Mycategory['name'] ?></h1>
          <p class="card-text m-5">Description :<?php echo $Mycategory['description'] ?></p>
          <form action="../controllers/productCategery.php">
            <input type="text" name="id" value="<?php echo $Mycategory['id'] ?>">
            <button class="btn btn-primary w-100" type="submit">Show All Products</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>