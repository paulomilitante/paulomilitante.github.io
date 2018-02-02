<?php 

require 'connection.php';

$itemcat = mysqli_real_escape_string($conn,$_POST['itemSearch']);

$sql = "SELECT * FROM items WHERE item_category_id = '$itemcat'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);


if ($row > 0) {
	while ($item = mysqli_fetch_assoc($result)) {
		extract($item);

		$sql2 = "SELECT * FROM item_category WHERE id = '$item_category_id'";
		$result2 = mysqli_query($conn,$sql2);
		$row2 = mysqli_fetch_assoc($result2);
		$description1 = nl2br($description);

		echo "
			<tr>
				<td>$name</td>
				<td>$description1</td>
				<td>$price</td>
				<td>".$row2['type']."</td>
				<td><img class='itemImg' src=$image></td>
				<td>
					<a href='item_edit.php?id=$id'><button type='button' class='waves-effect waves-light btn teal darken-3'><i class='material-icons'>edit</i></button></a>
					<button type='button' data-index=$id class='deleteItem waves-effect waves-light btn red lighten-3' ><i class='material-icons'>delete_forever</i></button>
				</td>
			</tr>";
	}
}

elseif ($row === 0) {
	$sql3 = "SELECT * FROM items ORDER BY id DESC LIMIT 5";
	$result3 = mysqli_query($conn,$sql3);
	
	while ($item = mysqli_fetch_assoc($result3)) {
		extract($item);

		$sql2 = "SELECT * FROM item_category WHERE id = '$item_category_id'";
		$result2 = mysqli_query($conn,$sql2);
		$row2 = mysqli_fetch_assoc($result2);
		$description1 = nl2br($description);

		echo "
			<tr>
				<td>$name</td>
				<td>$description1</td>
				<td>$price</td>
				<td>".$row2['type']."</td>
				<td><img class='itemImg' src=$image></td>
				<td>
					<a href='item_edit.php?id=$id'><button type='button' class='waves-effect waves-light btn teal darken-3'><i class='material-icons'>edit</i></button></a>
					<button id='deleteItem' type='button' data-index=$id class='waves-effect waves-light btn red lighten-3' ><i class='material-icons'>delete_forever</i></button>
				</td>
			</tr>";

	}	
}

?>