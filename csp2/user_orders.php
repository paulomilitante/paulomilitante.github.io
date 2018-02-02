<?php 

function display_title() {
	echo "My Orders";
}

function display_content() {
	require 'connection.php';

	$user_id = $_SESSION['user_id'];
	$sql = "SELECT * FROM orders WHERE user_id = '$user_id' AND paid_status != 'FALSE' ORDER BY id DESC LIMIT 10";
	$result = mysqli_query($conn,$sql);


		echo "
			<div class='container signForm z-depth-1'>
				<div class='row'>
					<div>
						<h4>My Orders</h4>
					</div>
			  	</div>
			  	<div class='row'>
					<table class='striped centered responsive-table'>
						<thead>
							<tr>
								<th>Order ID</th>
								<th>Total Quantity</th>
								<th>Total Price</th>
								<th>Payment Status</th>
							</tr>
						</thead>
						<tbody>";
						while ($order = mysqli_fetch_assoc($result)) {
							extract($order);

							$sql2 = "SELECT * FROM order_items WHERE order_id = $id";
							$result2 = mysqli_query($conn,$sql2);

							$total_quantity = '0';
							while ($item = mysqli_fetch_assoc($result2)) {
								$total_quantity += $item['quantity'];
							}

							echo	"<tr>
										<td><a href='my_order.php?order=$id'>#$id</a></td>
										<td>$total_quantity</td>
										<td>Php $total_price</td>
										<td>$paid_status</td>
									</tr>";
						}
		echo			"</tbody>
					</table>
				</div>
			</div>";
}


require 'template.php';

?>