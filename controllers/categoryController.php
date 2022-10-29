<?php

include('DBController.php');

// var_dump($conn);
class category
{

  public function index()
  {
    global $conn;
    $query = "SELECT * FROM category";
    $result = $conn->query($query);
    $cats = [];
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        array_push($cats, $row);
      }
    }
    return $cats;
  }
  public function show($id)
  {
    global $conn;
    $query = "SELECT * FROM category WHERE id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row;
  }
  public function stor($Cats)
  {
    global $conn;
    $query = "INSERT INTO category(";

    foreach ($Cats as $key => $val) {
      $query .= " `$key` " . ',';
    }

    $query = rtrim($query, ',');
    $query .= ") VALUES (";
    foreach ($Cats as $key => $val) {
      $query .= "'$val'" . ',';
    }
    $query = rtrim($query, ',');
    $query .= ")";
    // echo $query;
    $result = $conn->query($query);

    return $result;
  }
  public function update($id, $cats)
  {
    global $conn;
    $query = "UPDATE category SET ";
    foreach ($cats as $key => $val) {
      $query .= "`$key` = '$val'" . ',';
    }
    $query = rtrim($query, ',');
    $query .= " WHERE id = $id";
    $result = $conn->query($query);
    return  $result;
  }
  public function destroy($id)
  {
    global $conn;
    $query = "DELETE FROM category WHERE id = $id";
    $result = $conn->query($query);
    return $result;
  }
  public function validation($requests)
  {
    $name = $requests['name'];
    // echo  $name;
    $description = $requests['description'];
    // echo  $description;
    // $name = $requests['name'];
    $img = $requests['image'];
    $error = "true";
    if (empty($requests)) {
      return "0";
    } else {
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $error = "false";
        return $error;
      }
      if (!preg_match("/^[A-Za-z]*[\s]{0,1}[A-Za-z\d\-_]{0,15}[\s]{0,15}[A-Za-z\d\-_]{0,15}$/", $description)) {
        $error = "false";
        return $error;
      }
      if (!preg_match("/[\/.](gif|jpg|jpeg|tiff|png)$/i", $img)) {
        $error = "false";
        return $error;
      }
    }
  }
}

$index = new category();
echo '<pre>';
//  var_dump($index->index());
// $index -> validation(['name'=>'kareem','description'=>'hello kareem','image'=>'1']);

//  echo( $index -> update(2,['`name`'=>'"kareem12"','`description`'=>'"hello kareem12"','`image`'=>'"1.png"']));
// echo( $index -> destroy(2));
echo '</pre>';
//  $name = "0231";
//  $x = preg_match("/^[a-zA-Z-' ]*$/",$name);
//  echo $x;
