<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<link rel="icon" href="assets/logo2.png">

	<title>Calzolaio - <?php display_title(); ?></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  	
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="assets/style.css">
  	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>
<body>
	<?php require "partials/nav.php" ?>

	<main>
		<?php display_content(); ?>
	</main>

	<?php require "partials/footer.php" ?>

	<script type="text/javascript" src="assets/script.js"></script>

</body>
</html>