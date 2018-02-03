$(document).ready(function(){

	$(".button-collapse").sideNav(); //mobile-version navbar
    $('.modal').modal(); //modal materialize
    $('select').material_select(); //select materialize
    $('.materialboxed').materialbox(); //material box materialize
    $('.scrollspy').scrollSpy(); //scrollspy materialize
    $(".dropdown-button").dropdown(); //dropdown materialize
    $('.collapsible').collapsible() //collapsible materialize

});



/*AUTHENTICATE------------------------------------------------------------------------*/

$('#username').on('keypress blur', function() {$('#xCredentials').css('display','none')});

/*AUTHENTICATE------------------------------------------------------------------------*/



/*CONFIRM PASSWORD------------------------------------------------------------------------*/

var regPW, regCPW;

$('#regPW').keyup(function(){
	regPW = $(this).val();
	if (regPW !== regCPW) {
		$('#noMatch').show();
		$('#regBtn').attr('disabled','true');
	}
	else {
		$('#noMatch').hide();
	}
});

$('#regCPW').keyup(function(){
	regCPW = $(this).val();
	if (regCPW !== regPW) {
		$('#noMatch').show();
		$('#regBtn').attr('disabled','true');
	}
	else {
		$('#noMatch').hide();
	}	
});

/*CONFIRM PASSWORD------------------------------------------------------------------------*/



/*CHECK USERNAME AND EMAIL EXISTENCE------------------------------------------------------------------------*/

$('#regEmail').on('keyup blur', function() {
	var regEmail = $(this).val();
	$.post('email_check.php',
		{'regEmail' : regEmail},
		function(data) {
			if (data > 0) {
				$('#emailExist').show();
				$('#regBtn').attr('disabled','true');
			}
			else {
				$('#emailExist').hide();
				$('#regEmail').triggerHandler('keyup');
			}
		});
});

$('#regUsername').on('keyup blur', function() {
	var regUsername = $(this).val();
	$.post('username_check.php',
		{'regUsername' : regUsername},
		function(data) {
			if (data > 0) {
				$('#usernameExist').show();
				$('#regBtn').attr('disabled','true');
			}
			else {
				$('#usernameExist').hide();
				$('#regUsername').triggerHandler('keyup');
			}
		});
});

$('#regForm input').on('keyup blur', function() {
	var isVisible = $('#noMatch').is(':hidden');
	var isVisible1 = $('#usernameExist').is(':hidden');
	var isVisible2 = $('#emailExist').is(':hidden');
	
	if (isVisible && isVisible1 && isVisible2) {
		$('#regBtn').removeAttr('disabled');
	}
});

/*CHECK USERNAME AND EMAIL EXISTENCE------------------------------------------------------------------------*/



/*USER SEARCH------------------------------------------------------------------------*/

var userFunction = function() {
	var userSearch = $('#userSearch').val();
	$.post('user_search.php',
		{'userSearch' : userSearch},
		function(data) {
			$('#userData').html(data);
		});
};

$('#userSearch').on('keyup focus', userFunction);

$(document).ready(function() {
	if (window.location.href.match('dashboard.php') != null) {
		userFunction();
	}
});

$('tbody').on('change', ".editAccess", function() {
	var $button = $(this).parent().parent().find('.updateAccess');
	$button.removeAttr('disabled');
});

/*USER SEARCH------------------------------------------------------------------------*/



/*ADMIN USER DELETE------------------------------------------------------------------------*/

$('tbody').on('click', '.deleteUser', function() {
	if (confirm('Are you sure you want to delete user?')) {
		var id = $(this).data('index');
		$.post('user_delete.php',
			{'id' : id},
			function(data) {
				userFunction();
				Materialize.toast("Account deleted!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
			});
	}
});

/*ADMIN USER DELETE------------------------------------------------------------------------*/



/*ADMIN USER UPDATE------------------------------------------------------------------------*/

$('tbody').on('click', '.updateAccess', function() {
		var id = $(this).data('index');
		var $trow = $(this).parent().parent();
		var role = $trow.find('.editAccess').val();

		$.post('user_update.php',
			{'id' : id,
			'role' : role},
			function() {
				userFunction();
				Materialize.toast("Changes saved!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
			});
});

/*ADMIN USER UPDATE------------------------------------------------------------------------*/



/*ITEM SEARCH------------------------------------------------------------------------*/

var itemFunction = function() {
	var itemSearch = $('#itemSearch').val();
	$.post('item_search.php',
		{'itemSearch' : itemSearch},
		function(data) {
			$('#itemData').html(data);
		});
}

$('#itemSearch').on('change', itemFunction);

$(document).ready(function() {
	if (window.location.href.match('dashboard.php') != null) {
		itemFunction();
	}
});

/*ITEM SEARCH------------------------------------------------------------------------*/



/*ADMIN ITEM DELETE------------------------------------------------------------------------*/

$('tbody').on('click', '.deleteItem', function() {
	if (confirm('Are you sure you want to delete item?')) {
		var id = $(this).data('index');
		$.post('item_delete.php',
			{'id' : id},
			function() {
				itemFunction();
				Materialize.toast("Item deleted!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
			});
	}
});

/*ADMIN ITEM DELETE------------------------------------------------------------------------*/



/*ITEM SORT FORM-----------------------------------------------------------------------------*/

$('#selectCat').change(function() {
	$('#catForm').submit();
});

/*ITEM SORT FORM-----------------------------------------------------------------------------*/



/*RENDER EDIT MODAL----------------------------------------------------------------------------*/

$(".renderEditModal").click(function(){
	var id = $(this).data('index');
	var origin = $(this).data('origin');
	$.post('render_edit_modal.php',
		{'id' : id,
		'origin' : origin},
		function(data) {
			$('#editModalContent').html(data);
		});
});

/*RENDER EDIT MODAL----------------------------------------------------------------------------*/



/*RENDER DELETE MODAL----------------------------------------------------------------------------*/

$(".renderDeleteModal").click(function(){
	var id = $(this).data('index');
	$.post('render_delete_modal.php',
		{'id' : id},
		function(data) {
			$('#deleteModalContent').html(data);
		});
});

/*RENDER DELETE MODAL----------------------------------------------------------------------------*/



/*RENDER ADD CART MODAL----------------------------------------------------------------------------*/

$(".renderAddModal").click(function(){
	var id = $(this).data('index');
	var origin = $(this).data('origin');
	$.post('render_add_modal.php',
		{'id' : id,
		'origin' : origin},
		function(data) {
			$('#addModalContent').html(data);
		});
});

/*RENDER ADD CART MODAL----------------------------------------------------------------------------*/



/*DELETE CART ITEM--------------------------------------------------------------------------------*/

$(".deleteCart").click(function() {
	var index = $(this).data('index');
	var $itemD = $(this).parents('li');
	$.post('delete_cart.php',
		{'index' : index},
		function(data) {
			data = JSON.parse(data);
			$itemD.remove();
			$('#cartQuantity').html(data[0]);
			$('#grandTotal').html('Total: Php ' + data[1]);
			Materialize.toast("Item removed!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
			if (data[1] == 0) {
				$('#checkoutbtn').attr('disabled','true');
			}			
		})
});

/*DELETE CART ITEM--------------------------------------------------------------------------------*/



/*EDIT CART QUANTITY--------------------------------------------------------------------------------*/

$('.quantityChange').click(function() {
	var $this = $(this);
	var index = $(this).data('index');
	var $parent = $(this).parents('div.row');
	var quantity = $parent.find('.quantity').val();
	$.post('cart_quantity_change.php',
		{'index' : index,
		'quantity' : quantity},
		function(data) {
			data = JSON.parse(data);
			$parent.find('strong').html('Php ' + data[0]);
			$this.attr('disabled','true');
			$('#cartQuantity').html(data[1]);
			$('#grandTotal').html('Total: Php ' + data[2]);
			Materialize.toast("Changes saved!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
		});
});

$('.quantity').change(function() {
	$(this).parents('div.row').find('.quantityChange').removeAttr('disabled');
});

/*EDIT CART QUANTITY--------------------------------------------------------------------------------*/



/*ORDER SEARCH------------------------------------------------------------------------*/

var orderFunction = function() {
	var orderSearch = $('#orderSearch').val();
	$.post('order_search.php',
		{'orderSearch' : orderSearch},
		function(data) {
			$('#orderData').html(data);
		});
};

$('#orderSearch').on('keyup focus', orderFunction);

$(document).ready(function() {
	if (window.location.href.match('dashboard.php') != null) {
		orderFunction();
	}
});

$('tbody').on('change', ".paidStatus", function() {
	var $button = $(this).parent().parent().find('.updatePaid');
	$button.removeAttr('disabled');
});

/*ORDER SEARCH------------------------------------------------------------------------*/



/*ADMIN ORDER UPDATE------------------------------------------------------------------------*/

$('tbody').on('click', '.updatePaid', function() {
		var id = $(this).data('index');
		var $trow = $(this).parent().parent();
		var paidStatus = $trow.find('.paidStatus').val();

		$.post('order_update.php',
			{'id' : id,
			'paid_status' : paidStatus},
			function() {
				orderFunction();
				Materialize.toast("Changes saved!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
			});
});

/*ADMIN ORDER UPDATE------------------------------------------------------------------------*/



/*USER PROFILE UPDATE------------------------------------------------------------------------*/

$('.profileEditBtn').on('click', function() {
		var index = $(this).data('index');
		var firstname = $('#firstnameEdit').val();
		var lastname = $('#lastnameEdit').val();
		var email = $('#emailEdit').val();

		$.post('profile_update.php',
			{'index' : index,
			'firstname' : firstname,
			'lastname' : lastname,
			'email' : email},
			function(data) {
				$('.profileEditBtn').attr('disabled','true');
				Materialize.toast("Changes saved!&nbsp;<i class='material-icons teal-text'>check</i>", 2000);
				Materialize.toast("Changes will take effect upon re-login&nbsp;<i class='material-icons teal-text'>update</i>", 3000);
			});
});

$('#firstnameEdit, #lastnameEdit, #emailEdit').keyup(function() {
	$('.profileEditBtn').removeAttr('disabled');
})

/*USER PROFILE UPDATE------------------------------------------------------------------------*/