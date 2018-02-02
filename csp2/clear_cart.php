<?php 

require 'connection.php';

session_start();

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM orders WHERE user_id = '$user_id' AND paid_status = 'FALSE'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$order_id = $row['id'];

$sql2 = "DELETE FROM order_items WHERE order_id = '$order_id'";
mysqli_query($conn,$sql2);

header('location: items.php');



?>