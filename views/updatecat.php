<?php 
include('../controllers/categoryController.php');
$ID     = $_REQUEST['id'];
$result = $index -> show($ID);
$id     = $result['id'];
$name   = $result['name'];
$desc   = $result['description'];
$imge   = $result['image'];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
            <form action="../controllers/categoryControllers/update.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name :</label>
                    <input type="name" name="name" value="<?php echo $name ;?>" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                </div>
                    <label for="floatingTextarea2" class="form-label">Describtion :</label>
                <div class="form-floating">
                    <textarea class="form-control" name="desc"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?php echo $desc; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileLg" class="form-label">Category image</label>
                    <input class="form-control form-control-lg" name="imge"  id="formFileLg" type="file">
                </div>
                <div class="mb-3 bg-danger">
                    <input type="hidden" name="ID" value="<?php echo $ID?>">
                    <button  type="submit" class="btn btn-primary w-100">Add Category</button>
                </div>
            </form>
</div>
