<?php 

require 'connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id = '$id'";
mysqli_query($conn,$sql) or die(mysqli_error($conn));

echo "User deleted successfully";

?>