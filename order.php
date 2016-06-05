<!DOCTYPE html>

<html>
<head>
  <title>Food Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mainCSS.css">
  
  <style>
	.addmargin {
		margin: 20px;
	}
  </style>
</head>

<body>
	<?php include("navTop/navMember.php") ?>
	
	<div class="addmargin"> 
	<?php include("mapjs/mapjs.php")?>
	
	<div class="container col-md-4" style="margin-top:50px;float:right;">
		<h2>Restaurant</h2>
		<p>Pick any one of the restaurants available</p>
		<p>*Markers indicate restaurants with available deliverer</p>
		<form action="menu.php">
		<input name="res" type="radio">Restaurant A</input><br />
		<input name="res" type="radio">Restaurant B</input><br />
		<input name="res" type="radio">Restaurant C</input><br />
		<input name="res" type="radio">Restaurant D</input><br /><br />
		<button type="submit">PROCEED</button><br/>
		<br/>
		</form>
	</div>
	</div>
</body>

</html>