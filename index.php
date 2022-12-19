<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<script src="js/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="offcanvas.css" rel="stylesheet">
	<style>
		.popover
		{
			width: 100%;
			max-width: 1000px;
		}
	</style>


	<title>Itsourcecode Shopping Cart</title>


</head>

<body>
<?php include("thisheader.php") ?>

	<div class="container">

		<div id="popover_content_wrapper" style="display: none">
			<span id="cart_details"></span>
			<div align="right">
				
				<a href="#" class="btn btn-default" id="clear_cart">
				<span class="glyphicon glyphicon-trash"></span> Clear
				</a>
			</div>
		</div>

		<div id="display_item">


		</div>
				
		
		</div>
		<!--/row-->
		
		
	</div>
<!--/.container-->
</body>
</html>

