<?php
include('../controllers/categoryController.php');
$cats = $index->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/mystyle.css">
</head>

<body>
  <div class="container">
    <div>
      <form action="../controllers/categoryControllers/addcategory.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name :</label>
          <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        </div>
        <label for="floatingTextarea2" class="form-label">Describtion :</label>
        <div class="form-floating">
          <textarea class="form-control" name="desc" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <div class="mb-3">
          <label for="formFileLg" class="form-label">Category image</label>
          <input class="form-control form-control-lg" name="imge" id="formFileLg" type="file">
        </div>
        <div class="mb-3 bg-danger">
          <button type="submit" class="btn btn-primary w-100">Add Category</button>
        </div>
      </form>
    </div>

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Describtion</th>
            <th scope="col">image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($cats as $cat) : ?>
            <tr>
              <th scope="row"><?php echo $cat['id'] ?></th>
              <td><?php echo $cat['name'] ?></td>
              <td><?php echo $cat['description'] ?></td>
              <td><img class="img" src="../assets/img/chefs/<?php echo $cat['image'] ?>"></td>
              <td>
                <form action="../controllers/categoryControllers/deletecat.php">
                  <button class="btn btn-danger w-100">Delete</button>
                  <input type="hidden" name="id" value="<?php echo $cat['id'] ?>">
                </form>
                <form action="../controllers/categoryControllers/showcate.php">
                  <button class="btn btn-primary w-100">Show</button>
                  <input type="hidden" name="id" value="<?php echo $cat['id'] ?>">
                </form>
                <form action="../views/updatecat.php">
                  <button class="btn btn-dark w-100">Update</button>
                  <input type="hidden" name="id" value="<?php echo $cat['id'] ?>">
                </form>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</body>

</html>