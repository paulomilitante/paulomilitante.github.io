<?php 

require 'connection.php';

$reference = mysqli_real_escape_string($conn,$_POST['orderSearch']);

$sql = "SELECT * FROM users WHERE username = '$reference'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

$sql2 = "SELECT * FROM role";
$result2 = mysqli_query($conn,$sql2);

if ($row > 0) {
	$user = mysqli_fetch_assoc($result);
	$user_id = $user['id'];
	$username = $user['username'];

	$sql2 = "SELECT * FROM orders WHERE user_id = '$user_id' ORDER BY id DESC";
	$result2 = mysqli_query($conn,$sql2);

	while ($order = mysqli_fetch_assoc($result2)) {
		extract($order);

		$sql3 = "SELECT * FROM order_items WHERE order_id = $id";
		$result3 = mysqli_query($conn,$sql3);

		$total_quantity = '0';
		while ($item = mysqli_fetch_assoc($result3)) {
			$total_quantity += $item['quantity'];
		}
		echo "
			<tr>
				<td><a href='my_order.php?order=$id'>#$id</a></td>
				<td>$username</td>
				<td>$total_quantity</td>
				<td>$total_price</td>
				<td>
					<select class='paidStatus browser-default'>";
						$options = ['FALSE','PENDING','TRUE'];
						for ($i = 0; $i < 3; $i++) {
							echo ($paid_status === $options[$i]) ? "<option selected>$paid_status</option>" : "<option>".$options[$i]."</option>";
						}
			echo	"</select>
				</td>
				<td>
					<button type='button' data-index=$id class='updatePaid waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>save</i></button>
				</td>
			</tr>";
	}
}

elseif ($row === 0) {
	$sql4 = "SELECT * FROM orders WHERE id = '$reference' ORDER BY id DESC";
	$result4 = mysqli_query($conn,$sql4);
	$row4 = mysqli_num_rows($result4);


	if ($row4 > 0) {
		while ($order = mysqli_fetch_assoc($result4)) {
			extract($order);

			$sql5 = "SELECT * FROM users WHERE id = '$user_id'";
			$result5 = mysqli_query($conn,$sql5);
			$user = mysqli_fetch_assoc($result5);
			$username = $user['username'];

			$sql6 = "SELECT * FROM order_items WHERE order_id = $id";
			$result6 = mysqli_query($conn,$sql6);

			$total_quantity = '0';
			while ($item = mysqli_fetch_assoc($result6)) {
				$total_quantity += $item['quantity'];
			}
			echo "
				<tr>
					<td><a href='my_order.php?order=$id'>#$id</a></td>
					<td>$username</td>
					<td>$total_quantity</td>
					<td>$total_price</td>
					<td>
						<select class='paidStatus browser-default'>";
							$options = ['FALSE','PENDING','TRUE'];
							for ($i = 0; $i < 3; $i++) {
								echo ($paid_status === $options[$i]) ? "<option selected>$paid_status</option>" : "<option>".$options[$i]."</option>";
							}
				echo	"</select>
					</td>
					<td>
						<button type='button' data-index=$id class='updatePaid waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>save</i></button>
					</td>
				</tr>";
		}
	}
	else {
		$sql7 = "SELECT * FROM orders ORDER BY id DESC LIMIT 15";
		$result7 = mysqli_query($conn,$sql7);

		while ($order = mysqli_fetch_assoc($result7)) {
			extract($order);

			$sql8 = "SELECT * FROM users WHERE id = '$user_id'";
			$result8 = mysqli_query($conn,$sql8);
			$user = mysqli_fetch_assoc($result8);
			$username = $user['username'];

			$sql9 = "SELECT * FROM order_items WHERE order_id = $id";
			$result9 = mysqli_query($conn,$sql9);

			$total_quantity = '0';
			while ($item = mysqli_fetch_assoc($result9)) {
				$total_quantity += $item['quantity'];
			}
			echo "
				<tr>
					<td><a href='my_order.php?order=$id'>#$id</a></td>
					<td>$username</td>
					<td>$total_quantity</td>
					<td>$total_price</td>
					<td>
						<select class='paidStatus browser-default'>";
							$options = ['FALSE','PENDING','TRUE'];
							for ($i = 0; $i < 3; $i++) {
								echo ($paid_status === $options[$i]) ? "<option selected>$paid_status</option>" : "<option>".$options[$i]."</option>";
							}
				echo	"</select>
					</td>
					<td>
						<button type='button' data-index=$id class='updatePaid waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>save</i></button>
					</td>
				</tr>";
		}
	}
		

}

?>