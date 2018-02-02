<?php 

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

$sql4 = "SELECT * FROM orders WHERE user_id = '$user_id' AND paid_status = 'FALSE'";
$result4 = mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_assoc($result4);
$order_id = $row4['id'];

$sql5 = "SELECT * FROM order_items WHERE order_id = '$order_id'";
$result5 = mysqli_query($conn,$sql5);



echo "
	<ul id='slide-out' class='side-nav'>";
	$grand_total = 0;
	while ($order_item = mysqli_fetch_assoc($result5)) {
	    $item_id = $order_item['item_id'];
	    $quantity = $order_item['quantity'];
	    $total_price = $order_item['total_price'];

	    $sql6 = "SELECT * FROM items WHERE id = '$item_id'";
	    $result6 = mysqli_query($conn,$sql6);
	    $item = mysqli_fetch_assoc($result6);
	    extract($item);
	    echo "
	    	<li class='cartItem z-depth-1'>
		    	<div class='container'>
		    		<div class='row'>
		    			<div class='col s12'>
		    				<h6 class='center-align'>$name</h6>
		    			</div><br>
		    			<div class='col s6'>
		    				<img class='cartImg' src='$image'>
		    			</div>
		    			<div class='col s6'>
		    				<div class='input-field'>
			    				<input type='number' class='quantity' min='1' value='$quantity'>
			    				<label>Quantity</label>
		    				</div>
		    				<p><strong>Php $total_price</strong><p>
		    			</div>
			    		<div class='col s12 center-align'>
							<button type='button' data-index='".$order_item['id']."' class='deleteCart waves-effect waves-light btn red lighten-3'><i class='material-icons'>delete_forever</i></button>
			    			<button type='button' data-index='".$order_item['id']."' class='quantityChange waves-effect waves-light btn teal darken-3' disabled><i class='material-icons'>save</i></button>
			    		</div>
		    		</div>
		    	</div>
	    		<div class='divider'></div>
	    	</li>";
	    	$grand_total += $total_price;
	}
	echo   	"
			<li>
				<h5 id='grandTotal' class='teal-text text-darken-3 center-align'>Total: Php $grand_total</h5> 
			</li>
			<li class='checkout'>
	    		<form class='container' action='clear_cart.php'>
	    			<div class='row'>
	    				<button type='submit' class='col s8 offset-s2 waves-effect waves-light btn red lighten-3'>CLEAR<i class='material-icons right'>shopping_cart</i></button>
		    			<a href='checkout.php' class='col s8 offset-s2 waves-effect waves-light btn teal darken-3'>CHECKOUT<i class='material-icons right'>attach_money</i></a>
	    			</div>
	    		</form>	
	    	</li>
	</ul>";

?>