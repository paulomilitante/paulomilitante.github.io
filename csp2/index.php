<?php 
	function display_title() {
		echo "Home";
	}

	function display_content() {
		echo "
			<div class='firstBlock valign-wrapper'>
				<div class='signForm container'> 		
					<div class='row'>
						<h4 class='col m6 offset-m6 hide-on-small-only white-text right-align'><span class='teal-text text-darken-4'>Bespoke shoes</span> for the modern gentleman.</h4>
					</div>
					<div class='row'>
						<h5 class='col m6 offset-m6 hide-on-small-only white-text right-align'>Get yours now. ";

					echo	(!isset($_SESSION['username'])) ? "<a class='red-text text-lighten-3' href='register.php'>Register here.</a>" : "<a class='red-text text-lighten-3' href='items.php'>Our Shoes.</a>";

		echo			"</h5>
					</div>
				</div>
 			</div>";
	}

	require "template.php";

 ?>

 