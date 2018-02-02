<?php 


function display_title() {
	$order_id = $_GET['order'];
	echo "Order #$order_id";
}

function display_content() {
	require 'connection.php';

	$order_id = $_GET['order'];

	$sql2 = "SELECT * FROM order_items WHERE order_id = '$order_id'";
	$result2 = mysqli_query($conn,$sql2);

	echo "
		<div class='container orderSum'>
			<div class='row'>
				<div class='col s12 m8 offset-m2'>
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
				</div>";
}

require 'template.php'


?>

