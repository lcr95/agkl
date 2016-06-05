<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Deliverer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
		
</head>

<body>
	<?php include("navTop/navMember.php") ?>

	<div class="container text-center" style="margin-top:100px;">
	  <h2>CHECK IN</h2>
	  <p>Press the button to allow geolocation track your current location</p>
	  <button onclick="location.href = 'deliverer.php';" type="button" class="btn btn-default" >CHECK IN</button>
	</div>


</body>

</html>