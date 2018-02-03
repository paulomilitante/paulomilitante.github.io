<?php 

require 'connection.php';

$firstname = mysqli_real_escape_string($conn,htmlspecialchars($_POST['firstname']));
$lastname = mysqli_real_escape_string($conn,htmlspecialchars($_POST['lastname']));
$email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));
$username = mysqli_real_escape_string($conn,htmlspecialchars($_POST['username']));
$password = sha1($_POST['password']);


$sql = "INSERT INTO users (username,password,firstname,lastname,email,role_id) VALUES ('$username','$password','$firstname','$lastname','$email','3')";

mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql2 = "SELECT * FROM users WHERE username = '$username'";
$result2 = mysqli_query($conn,$sql2);
$row = mysqli_fetch_assoc($result2);
extract($row);

session_start();

$_SESSION['username'] = $username;
$_SESSION['user_id'] = $id;
$_SESSION['firstname'] = $firstname;
$_SESSION['role'] = $role_id;

$sql3 = "INSERT INTO orders (user_id,paid_status) VALUES ($id,'FALSE')";

mysqli_query($conn,$sql3) or die(mysqli_error($conn));

header('location: items.php');
	

?>