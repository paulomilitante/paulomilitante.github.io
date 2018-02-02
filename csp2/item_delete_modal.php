<?php 

require 'connection.php';

$id = $_GET['index'];

$sql = "DELETE FROM items WHERE id = '$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

header("location: items.php");

?>