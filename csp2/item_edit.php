<?php 

function display_title() {
	echo "Edit Item";
}

function display_content() {
	require 'connection.php';

	$index = $_GET['id'];
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
				<form class='col s12 m4 offset-m4' method='POST' action='item_update.php?index=$id'>
					<div class='input-field'>
						<textarea class='materialize-textarea' name='image' required>$image</textarea>
						<label>Image URL:</label>
					</div>
					<div class='input-field'>
						<input type='text' name='name' value='$name' required>
						<label>Item Name:</label>
					</div>
					<div class='input-field'>
						<textarea class='materialize-textarea' name='description' required>$description</textarea>
						<label>Description</label>
					</div>
					<div class='input-field'>
						<input type='number' value='$price' name='price' required>
						<label>Price</label>
					</div>
					<div class='input-field'>
						<select name='category' required>";
				          	while ($category = mysqli_fetch_assoc($result2)) {
								$category_id = $category['id'];
								$type = $category['type'];
								echo ($item_category_id === $category_id) ? "<option value=$category_id selected>$type</option>" : "<option value=$category_id>$type</option>";
							}
	echo				"</select>	
					</div>
					<a href='dashboard.php?id=$item_category_id#items'><button type='button' class='waves-effect waves-green btn white black-text'><i class='material-icons'>close</i></button></a>
			  		<button type='submit' class='waves-effect waves-green btn teal darken-3'><i class='material-icons'>check_circle</i></button>
				</form>
			</div>
		</div>";

}

require 'template.php'



?>