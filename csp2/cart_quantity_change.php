<?php

$index = $_POST['index'];
$quantity = $_POST['quantity'];

require 'connection.php';

$sql = "SELECT * FROM order_items WHERE id ='$index'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$price = $quantity * ($row['total_price']/$row['quantity']);

$sql2 = "UPDATE order_items SET
		quantity = '$quantity',
		total_price = '$price'
		WHERE id = '$index'";

mysqli_query($conn,$sql2) or die(mysqli_error($conn));

session_start();

$user_id = $_SESSION['user_id'];

$sql2 = "SELECT * FROM orders WHERE user_id = '$user_id' AND paid_status = 'FALSE'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$order_id = $row2['id'];

$sql3 = "SELECT * FROM order_items WHERE order_id = '$order_id'";
$result3 = mysqli_query($conn,$sql3);

$cart_quantity = 0;
$grand_total = 0;
while($order_item = mysqli_fetch_assoc($result3)) {
	$cart_quantity += $order_item['quantity'];
	$grand_total += $order_item['total_price'];
}

$data = [$price,$cart_quantity,$grand_total];

echo json_encode($data);


?>