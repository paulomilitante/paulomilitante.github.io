<?php 

function display_title() {
	echo "Edit Profile";
}

function display_content() {
	require 'connection.php';

	$index = $_SESSION['user_id'];
	$sql = "SELECT * FROM users WHERE id ='$index'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	extract($row);

	echo "
		<div class='container center-align signForm'>
			<div class='row'>
				<form id='editProfileForm' class='col s12 m4 offset-m4'>					
					<div class='editProfile input-field'>
						<input type='text' id='firstnameEdit' value='$firstname'>
						<label>First Name:</label>
					</div>
					<div class='editProfile input-field'>
						<input type='text' value='$lastname' id='lastnameEdit'>
						<label>Last Name:</label>
					</div>
					<div class='editProfile input-field'>
						<input type='email' value='$email' id='emailEdit'>
						<label>Email:</label>
					</div>
					<a href='items.php'><button type='button' class='waves-effect waves-light btn white black-text'><i class='material-icons'>close</i></button></a>
			  		<button type='button' data-index=$index class='profileEditBtn waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>check_circle</i></button>
				</form>
			</div>
		</div>";

}

require 'template.php'



?>