<?php
include('../../includes/session.php');
include('../../controllers/DBController.php');
include('../../controllers/OrderController.php');

if (isset($_POST['submit'])) {
    $total_price = $_POST['total_price'];
    $user_id = $_POST['user_id'];
    $order = new Order();
    $order->store($total_price, $user_id);
    header('location: create.php');
}
