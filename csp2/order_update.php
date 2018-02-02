<?php 

require 'connection.php';

$paid_status = $_POST['paid_status'];
$index = $_POST['id'];

$sql = "UPDATE orders SET paid_status = '$paid_status' WHERE id = '$index'";

mysqli_query($conn,$sql) or die(mysqli_error($conn));


?>