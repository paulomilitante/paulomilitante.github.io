<?php

session_start();
session_destroy();

function display_title() {
	echo "Log-Out";
}

function display_content() {
	echo "
		<div class='logout valign-wrapper'>
			<div class='container'>
				<div class='row center-align grey-text text-lighten-2'>
					<h4 class='col s12'>You have logged out!</h4>
					<p class='col s12'><a class='red-text text-lighten-3' href='index.php'>Return to the home page</a> or <a class='red-text text-lighten-3' href='login.php'>log-in again</a>.</p>
				</div>
			</div>
		</div>";
}

require 'template.php';

?>

