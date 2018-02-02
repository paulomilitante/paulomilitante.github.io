<?php 

require 'connection.php';

$category = $_POST['category'];
$index = $_GET['index'];
$name = mysqli_real_escape_string($conn,$_POST['name']);
$description = mysqli_real_escape_string($conn,$_POST['description']);
$price = mysqli_real_escape_string($conn,$_POST['price']);
$image = mysqli_real_escape_string($conn,$_POST['image']);

$sql = "UPDATE items SET 
		name = '$name',
		description = '$description',
		price = '$price',
		image = '$image',
		item_category_id = $category 
		WHERE id = '$index'";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

header("location: dashboard.php?id=$category");


?>