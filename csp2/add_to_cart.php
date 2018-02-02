<?php 
require 'connection.php';

session_start();

$origin= $_POST['origin'];
$item_index = $_GET['index'];
$quantity = $_POST['quantity'];
$user_id = $_SESSION['user_id'];


$sql = "SELECT * FROM orders WHERE user_id = '$user_id' AND paid_status = 'FALSE'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$order_id = $row['id'];

$sql2 = "SELECT * FROM items WHERE id = $item_index";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$price = ($row2['price']) * $quantity;


$sql3 = "SELECT * FROM order_items WHERE item_id = '$item_index' AND order_id = '$order_id'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_num_rows($result3);

if ($row3 === 0) {
	$sql4 = "INSERT INTO order_items (item_id,quantity,total_price,order_id) VALUES ($item_index,$quantity,$price,$order_id)";
	mysqli_query($conn,$sql4);
}
else {
	$item = mysqli_fetch_assoc($result3);

	$quantity += $item['quantity'];
	$price += $item['total_price'];

	$sql5 = "UPDATE order_items SET
			quantity = '$quantity',
			total_price = '$price'
			WHERE item_id = '$item_index'";

	mysqli_query($conn,$sql5);		
}

header("location: $origin");

?>