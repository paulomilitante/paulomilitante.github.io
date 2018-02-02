<?php 

function display_title() {
	echo "Log-In";
}

require 'connection.php';

$username = htmlspecialchars($_POST['username']);
$password = sha1($_POST['password']);

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

if ($row === 1) {
	$user = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['firstname'] = $user['firstname'];
	$_SESSION['role'] = $user['role_id'];

	if ($user['role_id'] === '3')
		header("location: items.php");
	else
		header("location: dashboard.php");
}
else {
	function display_content() {
		echo "
		<div class='loginPage'>
		<div class='container'>
			<div class='row'>
				<form class='signForm col s12 m4 offset-m4 z-depth-1 grey lighten-2' method='POST'>
					<div class='input-field'>
						<input type='text' id='username' name='username' autofocus required><label>Username:</label>
						<i id='xCredentials'>Invalid Credentials. Try again.</i>
					</div>
					<div class='input-field'>
						<input type='password' name='password' required><label>Password:</label>
					</div>
					<button class='waves-effect waves-light btn' type='submit'>Log-In</button>
				</form>
			</div>
			<div class='row'>
				<div class='col s12 m6 offset-m4 white-text'>
					<p>Don't have an account yet? <a class='red-text text-lighten-3' href='register.php'>REGISTER HERE!</a></p>
				</div>
			</div>
		</div>
		</div>";
	}

	require 'template.php';

}

?>