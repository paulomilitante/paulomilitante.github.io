<?php 
function display_title() {
	echo "Log-In";
}

function display_content() {
	echo "
	<div class='loginPage'>
		<div class='container'>
			<div class='row'>
				<form class='signForm col s12 m4 offset-m4 z-depth-1 grey lighten-2' method='POST' action='authenticate.php'>
					<div class='input-field'>
						<input type='text' name='username' autofocus required><label>Username:</label>
					</div>
					<div class='input-field'>
						<input type='password' name='password' required><label>Password:</label>
					</div>
					<div class='center-align'>
					<button class='waves-effect waves-light btn teal darken-3' type='submit'>Log-In</button>
					</div>
				</form>
			</div>
			<div class='row'>
				<div class='col s12 m6 offset-m4 white-text'>
					<p>Don't have an account yet? <a class='red-text text-lighten-3' href='register.php'>REGISTER HERE!</a></p>
				</div>
			</div>
		</div>
	</div";
}

require 'template.php';

?>