<?php 

function display_title() {
	echo 'Contact Us';
}

function display_content() {
	echo "
		<div class='contactUs'>
			<div class='container signForm z-depth-3 grey lighten-2'>
				<div class='row'>
					<h3 class='teal-text text-darken-3'>Contact Us</h3>
				</div>
				<div class='row'>
					<p><strong>CONTACT NUMBER</strong></p><br>

					<p>+63-927-9162015 (available only during shop hours)</p><br>

					<p><strong>SHOP HOURS</strong></p><br>

					<p>Monday-Saturday: 1000H – 1200H ; 1400H – 1700H
					<br>Sun: Closed</p><br>

					<hr><br>

					<h6><strong>LOCATION</h6><br>

					<p>3rd Floor Caswynn Building, No. 134 Timog Avenue, Sacred Heart, Diliman, Quezon City, 1103 Metro Manila</p></br>

					<div class='googlemap-responsive'>
					<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.407842056246!2d121.04160121427005!3d14.632775280211666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7afe6dd8817%3A0x1301863d86ca644!2sTuitt+Incorporated!5e0!3m2!1sen!2sph!4v1517577115232' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>";	
}

require 'template.php'

?>