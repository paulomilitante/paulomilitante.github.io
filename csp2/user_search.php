<?php 

require 'connection.php';

$username = mysqli_real_escape_string($conn,$_POST['userSearch']);

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

$sql2 = "SELECT * FROM role";
$result2 = mysqli_query($conn,$sql2);

if ($row > 0) {
	while ($user = mysqli_fetch_assoc($result)) {
		echo "
			<tr>
				<td>".$user['username']."</td>
				<td>".$user['firstname']."</td>
				<td>".$user['lastname']."</td>
				<td>".$user['email']."</td>
				<td>
					<select class='editAccess browser-default'>";
						while ($role = mysqli_fetch_assoc($result2)) {
							$id = $role['id'];
							$type = $role['type'];
							echo ($user['role_id'] === $id) ? "<option value=$id selected>$type</option>" : "<option value=$id>$type</option>";
						}
			echo	"</select>
				</td>
				<td>
					<button type='button' data-index=".$user['id']." class='updateAccess waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>save</i></button>
					<button type='button' data-index=".$user['id']." class='deleteUser waves-effect waves-light btn red lighten-3' ><i class='material-icons'>delete_forever</i></button>
				</td>
			</tr>";
	}
}

elseif ($row === 0) {
	$sql3 = "SELECT * FROM users LIMIT 5";
	$result3 = mysqli_query($conn,$sql3);

	while ($user = mysqli_fetch_assoc($result3)) {
		mysqli_data_seek($result2,0);
		echo "
			<tr>
				<td>".$user['username']."</td>
				<td>".$user['firstname']."</td>
				<td>".$user['lastname']."</td>
				<td>".$user['email']."</td>
				<td>
					<select class='editAccess browser-default'>";
						while ($role = mysqli_fetch_assoc($result2)) {
							$id = $role['id'];
							$type = $role['type'];
							echo ($user['role_id'] === $id) ? "<option value=$id selected>$type</option>" : "<option value=$id>$type</option>";
						}
			echo	"</select>
				</td>
				<td>
					<button type='button' data-index=".$user['id']." class='updateAccess waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>save</i></button>
					<button type='button' data-index=".$user['id']." class='deleteUser waves-effect waves-light btn red lighten-3' ><i class='material-icons'>delete_forever</i></button>
				</td>
			</tr>";
	}

}

?>