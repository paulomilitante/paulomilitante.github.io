<?php 

function display_title() {
	echo "Shoes";
}

function display_content() {
	require 'connection.php';

	$filter = isset($_GET['category']) ? $_GET['category'] : 'All';

	$sql = ($filter === 'All') ? "SELECT * FROM items" : "SELECT * FROM items WHERE item_category_id = $filter";
	$result = mysqli_query($conn,$sql);
	$pages = mysqli_num_rows($result)/6;

	$cpage = isset($_GET['page']) ? $_GET['page'] : '1';
	$offset = ($cpage - 1) * 6;
	$sql2 = ($filter === 'All') ? "SELECT * FROM items LIMIT $offset, 6" : "SELECT * FROM items WHERE item_category_id = $filter ORDER BY id DESC LIMIT $offset, 6";
	$result2 = mysqli_query($conn,$sql2);

	$sql3 = "SELECT * FROM item_category";
	$result3 = mysqli_query($conn,$sql3);

	require 'side_cart.php';

	echo "
		<div class='products'>
		<div class='container'>
			<div class='row valign-wrapper'>
				<div class='col s2'>";
				if (isset($_SESSION['username']) && $_SESSION['role'] === '3'){
		echo	"
					<a href='#' data-activates='slide-out' class='button-collapse valign-wrapper teal-text text-darken-3'>
						<i class='material-icons small'>shopping_cart</i>";
						mysqli_data_seek($result5,0);
						$cart_quantity = 0;
						while($order_item = mysqli_fetch_assoc($result5)) {
							$cart_quantity += $order_item['quantity'];
						}
		echo			"<div id='cartQuantity' class='chip teal-text text-darken-3'>$cart_quantity</div>
					</a>";
			}		
		echo	"</div>		
					<form id='catForm' class='col s8 m4 offset-m6 offset-s2'>
					<div class='input-field'>
						<select id='selectCat' name='category'>
							<option>All</option>";
							while ($category = mysqli_fetch_assoc($result3)) {
								extract($category);
								echo ($id === $filter) ? "<option value=$id selected>$type</option>" : "<option value=$id>$type</option>";
							}
	echo				"</select>
					</div>
				</form>
			</div>
			<div class='row'>";
			while ($row = mysqli_fetch_assoc($result2)) {
				extract($row);
				$description1 = nl2br($description);
				echo "
					<div class='col s12 m4'>
		          	<div class='card large'>
		            	<div class='card-image itemImg2'>
		              		<img class='materialboxed' data-caption='$name' src='$image'>
		            	</div>
		            	<div class='card-content'>
		              		<span class='card-title activator'><i class='material-icons right'>expand_less</i>$name</span>
		             		<p>Php $price</p>
		            	</div>
		            	<div class='card-reveal'>
					      	<span class='card-title grey-text text-darken-4'><i class='material-icons right'>expand_more</i>$name</span>
					      	<br><p>$description1</p>
					      	<br><p>Php $price</p><br>";
				echo 		(isset($_SESSION['role']) && ($_SESSION['role'] === '3')) ? "<div class='center-align'><button class='waves-effect waves-light btn modal-trigger teal darken-3 renderAddModal' data-index=$id data-origin=".$_SERVER['REQUEST_URI']." data-target='addCartModal'>Add to Cart</button></div>" : '';
				echo    "</div>
		            	<div class='card-action center-align'>";
		        		if (isset($_SESSION['role']) && $_SESSION['role'] !== '3')
		        			echo "<button class='waves-effect waves-light btn modal-trigger teal darken-3 renderEditModal' data-index=$id data-origin=".$_SERVER['REQUEST_URI']." data-target='editModal'>Edit</button><button class='waves-effect waves-light btn modal-trigger red lighten-3 renderDeleteModal' data-index=$id data-target='deleteModal'>Delete</button>";
		        		elseif (isset($_SESSION['role']) && $_SESSION['role'] === '3')
		        			echo "<button class='waves-effect waves-light btn modal-trigger teal darken-3 renderAddModal' data-index=$id data-origin=".$_SERVER['REQUEST_URI']." data-target='addCartModal'>Add to Cart</button>";
		        		else
		        			echo "<a href='login.php'>Log-In to Purchase</a>";
		        echo   	"</div>
		          	</div>
		        </div>";
			}
		        
	echo	"</div>
			<ul class='pagination right white-text'>";
				$cpageleft = $cpage - 1;
				echo ($cpage != 1) ? "<li class='waves-effect'><a href='items.php?page=$cpageleft&category=$filter'><i class='material-icons'>chevron_left</i></a></li>" : "<li class='disabled'><a href='#!'><i class='material-icons'>chevron_left</i></a></li>";
			    $i = 1;
			    for ($x = $pages; $x > '0'; $x--) {
			    	echo ($cpage == $i) ? "<li class='active red lighten-3'><a href='items.php?page=$i&category=$filter'>$i</a></li>" : "<li class='waves-effect'><a href='items.php?page=$i&category=$filter'>$i</a></li>";
			    	$i++;
			    }
			    $h = $i - 1;
			    $cpageright = $cpage + 1;
	echo		($cpage != $h) ? "<li class='waves-effect'><a href='items.php?page=$cpageright&category=$filter'><i class='material-icons'>chevron_right</i></a></li>" : "<li class='disabled'><a href='#!'><i class='material-icons'>chevron_right</i></a></li>";
	echo	"</ul>
		</div>
		</div>";

	require 'modals.php';


}

require 'template.php';

?>
