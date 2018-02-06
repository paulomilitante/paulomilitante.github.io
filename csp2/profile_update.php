<?php 

require 'connection.php';

$index = $_POST['index'];

$firstname = mysqli_real_escape_string($conn,htmlspecialchars($_POST['firstname']));
$lastname = mysqli_real_escape_string($conn,htmlspecialchars($_POST['lastname']));
$email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));

$sql = "UPDATE users SET 
		firstname = '$firstname',
		lastname = '$lastname',
		email = '$email'
		WHERE id = '$index'";


mysqli_query($conn,$sql) or die(mysqli_error($conn));

echo $firstname;


?>