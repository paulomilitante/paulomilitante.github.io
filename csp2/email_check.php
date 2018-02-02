<?php 

require 'connection.php';

$regEmail = $_POST['regEmail'];
$sql = "SELECT * FROM users WHERE email = '$regEmail'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

echo $row;

?>