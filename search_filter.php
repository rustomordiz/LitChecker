<!DOCTYPE html>
<html>
<head>
	<title>LitChecker</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
 	
	 <!-- MENU BAR --> 
	 <?php include 'header.php';?> 


	 <!-- SEARCH BAR --> 
		<br>
<div align="center">
	<img src="images/newlogo.png" width="30%">
</div>
	
<div align="center">
	<h5><a href="index.php" data-toggle="tooltip" title="Search">General Search</a> | Fulltext Search</h5>
</div>
<div>
	<nav class="navbar navbar-light bg-light">
		<form class="form-inline">
			<div align="center">
				<input class="form-control" type="search" placeholder="Type something..." aria-label="Search" required name="search" style="width: 300px"; autocomplete="off">
				<!-- <br> -->
				<button class="btn btn-success" type="submit" name="submit" value="Search" style="width:100px;">Search</button>
			</div>
		</form>
	</nav>
	<div align="center">
	<input type="checkbox" id="words" name="vehicle1" value="Bike">
	<label for="vehicle1">Match words</label>
	<input type="checkbox" id="phrase" name="vehicle2" value="Car">
	<label for="vehicle2">Match phrase</label>
	<input type="checkbox" id="exact" name="vehicle3" value="Boat">
	<label for="vehicle3">Exact</label>
	</div>

</div>




</body>
</html>

	<!-- <div class="match">
 		<input type="checkbox" id="words" name="vehicle1" value="Bike">
		<label for="vehicle1">Match words</label>
		<input type="checkbox" id="phrase" name="vehicle2" value="Car">
		<label for="vehicle2">Match phrase</label>
		<input type="checkbox" id="exact" name="vehicle3" value="Boat">
		<label for="vehicle3">Exact</label>
 	</div>	 -->