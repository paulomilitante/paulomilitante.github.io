<?php 

function display_title() {
	echo "Checkout";
}

function display_content() {
	require 'connection.php';

	$user_id = $_SESSION['user_id'];
	
	$sql = "SELECT * FROM orders WHERE user_id = '$user_id' AND paid_status = 'FALSE'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$order_id = $row['id'];

	$sql2 = "SELECT * FROM order_items WHERE order_id = '$order_id'";
	$result2 = mysqli_query($conn,$sql2);

	echo "
		<div class='container'>
			<div class='row orderSum'>
				<div class='col s12 m7'>
					<div class='row teal darken-3 valign-wrapper'>
						<p class='white-text'><strong>&nbsp;YOUR SHOES</strong></p>
					</div>
					<div class='row'>";
						$grand_total = 0;
						while ($item = mysqli_fetch_assoc($result2)) {
							$item_id = $item['item_id'];
							$quantity = $item['quantity'];
							$total_price = $item['total_price'];

							$sql3 = "SELECT * FROM items WHERE id = '$item_id'";
							$result3 = mysqli_query($conn,$sql3);
							$row3 = mysqli_fetch_assoc($result3);
							extract($row3);
							$description1 = nl2br($description);

						echo	"<div class='card horizontal'>
									<div class='card-image'>
										<img src=$image>
									</div>
									<div class='card-stacked'>
										<div class='card-content'>
										<p><strong>$name</strong></p><br>
										<p>$description1</p><br>
										<p>Price: $price</p>
										<p>Quantity: $quantity</p><br>
										<p>Total Price: Php $total_price</p>											
										</div>
									</div>
								</div>";
							$grand_total += $total_price;
						}			
	echo			"</div>			
				</div>
				<div class='col s12 m4 offset-m1 z-depth-1'>					
					<div class='orderSum row'>
						<p class='teal-text text-darken-3'><strong>ORDER SUMMARY</strong></p>
						<hr>
					</div>
					<div class='orderSum row'>
						<h6>Merchandise Total: <span class='right'>Php $grand_total</span></h6><br>
						<h6>Additional Fees: <span class='right'>Php 0</span></h6>
					</div>
					<div class='orderSum row'>
						<hr>
						<h6><strong>Order Total:<span class='right'>Php $grand_total</span></strong></h6>
					</div>
					<div class='row'>
						<a href='confirm_purchase.php?total=$grand_total&order_id=$order_id' class='col s8 offset-s2 waves-effect waves-light btn teal darken-3'>CONFIRM PURCHASE</a>
					</div>

				</div>
				<div class='col s12 m4 offset-m1 center-align'>					
					<img class='trustLogo' src='assets/mcafee.png'><img class='trustLogo' src='assets/verisign.png'><img class='trustLogo' src='assets/norton.png'>
				</div>
			</div>
		</div>";
}

require 'template.php'


?>

