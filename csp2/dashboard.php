<?php 

function display_title() {
	echo "Dashboard";
}

function display_content() {
	if (isset($_SESSION['role']) && $_SESSION['role'] !== '3') {
		require 'connection.php';

		$sql = "SELECT * FROM item_category";
		$result = mysqli_query($conn,$sql);

		echo "
			<div class='container'>
				<ul class='collapsible' data-collapsible='accordion'>
					<li>
					<div class='collapsible-header'>
						<h4>Users</h4>
					</div>			
					<div class='collapsible-body'>
						<div class='row'>
							<div class='col s6 m4'>
						        <div class='input-field'>
						          <input id='userSearch' type='search' placeholder='Search Username'>
						          <i class='material-icons'>close</i>
						        </div>
							</div>
				      	</div>
				      	<div class='row'>
							<table class='striped centered responsive-table'>
								<thead>
									<tr>
										<th>Username</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Access</th>
										<th></th>
								
									</tr>
								</thead>
								<tbody id='userData'>
								</tbody>
							</table>
						</div>
					</div>
					</li>";
				$option = isset($_GET['id']) ? $_GET['id'] : '';

				echo "
					
					<li>
					<div class='collapsible-header'>
						<h4 id='items'>Items</h4>
					</div>
					<div class='collapsible-body'>
						<div class='row'>
							<div class='col s6 m4'>
						        <div class='input-field'>
						         	<select id='itemSearch'>
						         		<option disabled selected>Search Item Category</option>";
							          	while ($category = mysqli_fetch_assoc($result)) {
											$id = $category['id'];
											$type = $category['type'];
											echo ($option === $id) ? "<option value=$id selected>$type</option>" : "<option value=$id>$type</option>";
										}
				echo				"</select>		
						        </div>
							</div>
				      	</div>
				      	<div class='row'>
							<table class='striped centered responsive-table'>
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
										<th>Category</th>
										<th>Image</th>
										<th><button class='waves-effect waves-light btn modal-trigger teal darken-1' data-target='addItem'>ADD ITEM</button></th>	
									</tr>
								</thead>
								<tbody id='itemData'>
									<tr>							
									</tr>	
								</tbody>
							</table>
						</div>
					</div>
					</li>";

					echo "
					<li>
					<div class='collapsible-header'>
						<h4>Orders</h4>
					</div>
					<div class='collapsible-body'>
						<div class='row'>
							<div class='col s6 m4'>
						        <div class='input-field'>
						          <input id='orderSearch' type='search' placeholder='Search User or Order#'>
						          <i class='material-icons'>close</i>
						        </div>
							</div>
				      	</div>
				      	<div class='row'>
							<table class='striped centered responsive-table'>
								<thead>
									<tr>
										<th>Order ID</th>
										<th>User</th>
										<th>Total Quantity</th>
										<th>Total Price</th>
										<th>Payment Status</th>
										<th></th>						
									</tr>
								</thead>
								<tbody id='orderData'>
								</tbody>
							</table>
						</div>
					</div>
					</li>
				</ul>
			</div>";

		echo "
			<div id='addItem' class='modal'>
				<div class='modal-content'>
					<div class='container'>
						<h4 class='center-align'>Add Item</h4>
						<div class='row'>
							<form class='col s12 m8 offset-m2 center-align' method='POST' action='item_add.php'>
								<div class='input-field'>
									<input type='text' name='name' required><label>Item Name:</label>
								</div>
								<div class='input-field'>
									<textarea class='materialize-textarea' name='description' required></textarea><label>Description:</label>
								</div>
								<div class='input-field'>
									<input type='number' min='3500' name='price' required><label>Price:</label>
								</div>
								<div class='input-field' name='image'>
									<input type='text' name='image' required><label>Image Url:</label>
								</div>
								<div class='input-field'>
									<select name='category' required>
										<option value='' disabled selected>Item Category</option>";
										mysqli_data_seek($result,0);
										while ($category = mysqli_fetch_assoc($result)) {
											$id = $category['id'];
											$type = $category['type'];
											echo "<option value=$id>$type</option>";
										}
		echo						"</select>
								</div>
								<button type='submit' class='waves-effect waves-green btn teal darken-3'>Add</button>
							</form>
						</div>
					</div>
				</div>
			</div>";
	}
}

require 'template.php';

?>