<?php 

require 'connection.php';

$regUsername = $_POST['regUsername'];
$sql = "SELECT * FROM users WHERE username = '$regUsername'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

echo $row;

?>