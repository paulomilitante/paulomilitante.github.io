<?php 

require 'connection.php';

$role = $_POST['role'];
$index = $_POST['id'];
// $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
// $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
// $email = mysqli_real_escape_string($conn,$_POST['email']);

// $sql = "UPDATE users SET 
// 		firstname = '$firstname',
// 		lastname = '$lastname',
// 		email = '$email',
// 		role_id = $role 
// 		WHERE id = '$index'";

$sql = "UPDATE users SET role_id = '$role' WHERE id = '$index'";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

// $sql2 = "SELECT * FROM users WHERE id = '$index'";

// $result = mysqli_query($conn,$sql2);
// $row = mysqli_fetch_assoc($result);

// header("location: dashboard.php?user=".$row['username']."");


?>