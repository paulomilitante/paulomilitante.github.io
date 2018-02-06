<?php
require 'connection.php';

$index = $_POST['id'];
$origin = $_POST['origin'];
$sql = "SELECT * FROM items WHERE id ='$index'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
extract($row);

$sql2 = "SELECT * FROM item_category";
$result2 = mysqli_query($conn,$sql2);

echo "
	<div class='container center-align'>
		<div class='row center-align'>
			<img class='itemImg' src='$image'>
		</div>
		<div class='row'>
			<form class='col s12' method='POST' action='item_update_modal.php?index=$id'>
				<div class='input-field'>
					<textarea class='materialize-textarea' name='image' required>$image</textarea>
					<label class='active'>Image URL:</label>
				</div>
				<div class='input-field'>
					<input type='text' name='name' value='$name' required>
					<label class='active'>Item Name:</label>
				</div>
				<div class='input-field'>
					<textarea class='materialize-textarea' name='description' required>$description</textarea>
					<label class='active'>Description</label>
				</div>
				<div class='input-field'>
					<input type='number' value='$price' name='price' required>
					<label class='active'>Price</label>
				</div>
				<div>
					<select name='category' class='browser-default' required>";
			          	while ($category = mysqli_fetch_assoc($result2)) {
							$category_id = $category['id'];
							$type = $category['type'];
							echo ($item_category_id === $category_id) ? "<option value=$category_id selected>$type</option>" : "<option value=$category_id>$type</option>";
						}
echo				"</select>
					<input value=$origin name='origin' hidden>
				</div><br>
				<button type='button' class='modal-close waves-effect waves-green btn red lighten-3'><i class='material-icons'>cancel</i></button>
		  		<button type='submit' class='waves-effect waves-green btn teal darken-3'><i class='material-icons'>save</i></button>
			</form>
		</div>
	</div>";

?>