<?php 


function display_title() {
	echo "Order Complete";
}

function display_content() {

$order_id = $_GET['order'];
	
echo "
	<div class='container'>
		<div class='row orderSum'>
			<div class='col s12'>
				<div class='card'>
					<div class='card-content'>
						<span class='card-title teal-text text-darken-3'>Thank you! Your order is complete.</span>
						<p>Your order has been received and is now being processed. Your order details are shown below for your reference:</p><br>
						<p class='teal-text text-darken-3'><strong>Order ID: #$order_id</strong></p><br>
						<p>Please make your payment directly into our bank accounts. Check your email for the full details of the deposit process. Use your Order ID as the payment reference. Your appointment will be scheduled when the funds have cleared in our account.</p>
					</div>
				</div>
			</div>
		</div>
	</div>";

}

require 'template.php';


?>