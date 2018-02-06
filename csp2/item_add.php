<?php 

require 'connection.php';

$name = mysqli_real_escape_string($conn,($_POST['name']));
$description = mysqli_real_escape_string($conn,($_POST['description']));
$price = mysqli_real_escape_string($conn,($_POST['price']));
$image = mysqli_real_escape_string($conn,($_POST['image']));
$category = mysqli_real_escape_string($conn,($_POST['category']));


$sql = "INSERT INTO items (name,description,price,image,item_category_id) VALUES ('$name','$description','$price','$image','$category')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

header("location: dashboard.php?id=$category");

?>