<?php 

function display_title() {
	echo "Register";
}

function display_content() {
	echo "
	<div class='registration'>
		<div class='container valign-wrapper'>
			<div class='row'>
				<div class='col m3 hide-on-small-only'>
					<h3 class='right-align grey-text text-lighten-2'>You're one step closer to your own top quality <span class='red-text text-lighten-3'>bespoke shoes</span>.</h3>
				</div>
				<form id='regForm' class='signForm container col s12 m6  offset-m3 z-depth-1 grey lighten-2' method='POST' action='register_endpoint.php'>
					<div class='row'>
						<div class='input-field col s6'>
							<input type='text' name='firstname' autofocus required><label>First Name:</label>
						</div>
						<div class='input-field col s6'>
							<input type='text' name='lastname' required><label>Last Name:</label>
						</div>
					</div>	
					<div class='input-field'>				
						<input type='email' id='regEmail' name='email' required><label>Email:
					</div>
					<div class='input-field'>
						<input type='text' id='regUsername' name='username' pattern='(?=.*[A-Za-z]).{4,}' title='Must be at least 4 characters long and contain at least one letter.' required><label>Username:
					</div>
					<div class='input-field'>
						<input type='password' id='regPW' name='password' pattern='.{4,}' title='Must be at least 4 characters long.' required><label>Password:</label>
					</div>
					<div class='input-field'>
						<input type='password' id='regCPW' name='cPassword' required><label>Confirm Password:</label>
					</div>
					<i id='emailExist' hidden>Email already in use!</i></label>
					<i id='usernameExist' hidden>Username exists!</i></label>
					<i id='noMatch' hidden>Passwords don't match!</i>
					<div class='center-align'>
					<button id='regBtn' class='waves-effect waves-light btn teal darken-3' type='submit'>Create Account</button>
					</div>
				</form>
			</div>
		</div>
	</div>";
}

require 'template.php';




?>