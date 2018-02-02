<?php 
require 'connection.php';

session_start();

$total_price = $_GET['total'];
$order_id = $_GET['order_id'];
$user_id = $_SESSION['user_id'];
$sql = "UPDATE orders SET
		total_price = '$total_price',
		paid_status = 'PENDING'
		WHERE user_id = '$user_id' AND paid_status = 'FALSE'";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql2 = "INSERT INTO orders (user_id,paid_status) VALUES ('$user_id','FALSE')";

mysqli_query($conn,$sql2) or die(mysqli_error($conn));

header("location: process_purchase.php?order=".$order_id."");

?>