<?php
require 'connection.php';

$index = $_POST['id'];
$sql = "SELECT * FROM items WHERE id ='$index'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
extract($row);

$sql2 = "SELECT * FROM item_category WHERE id = $item_category_id";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);

echo "
	<div class='container center-align'>
		<div class='row center-align'>
			<img class='itemImg' src='$image'>
		</div>
		<div class='row'>
			<form class='col s12' method='POST' action='item_delete_modal.php?index=$id'>
				<div class='input-field'>
					<input type='text' name='name' value='$name' disabled>
					<label class='active'>Item Name:</label>
				</div>				
				<div class='input-field'>
					<input type='number' value='$price' name='price' disabled>
					<label class='active'>Price</label>
				</div>
				<div>
					<select name='category' class='browser-default' disabled>
			          	<option>".$row2['type']."</option>
					</select>
				</div><br>
				<p class='center-align'>Are you sure you want to delete?</p><br>
				<button type='button' class='modal-close waves-effect waves-green btn white black-text'><i class='material-icons'>close</i></button>
		  		<button type='submit' class='waves-effect waves-green btn red lighten-3'><i class='material-icons'>delete_forever</i></button>
			</form>
		</div>
	</div>";

?>