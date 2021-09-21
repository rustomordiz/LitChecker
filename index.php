<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.bootstrap.min.css">
	
</head>
<body>

 	<!-- MENU BAR --> 
	 <?php include 'header.php';?> 



	 <?php
        error_reporting(0);
		session_start();
        // SEARCH PROCESS
	    if($_POST['btnsubmit']){    
            $_SESSION['searching'] = $_POST['search'];
            header('Location: result.php');    
		}
    ?>


	<!-- SEARCH BAR -->
		<br>
<div align="center">
	<img src="images/newlogo.png" width="30%">
</div>
	
<div align="center">
	<h5>General Search | <a href="search_filter.php"  data-toggle="tooltip" title="Advanced Search">Fulltext Search</a></h5>
</div>
<div>
	<nav class="navbar navbar-light bg-light">
		<form name="searchthis" class="form-inline" method="POST">
			<div align="center">
				<input class="form-control" type="search" placeholder="Type something..." aria-label="Search" required name="search" style="width: 300px"; name="search" autocomplete="off">
				
				
				 <button class="btn btn-success" type="submit" name="btnsubmit" value="Search" style="width:100px;">Search</button>
			</div>
		</form>
	</nav>
</div>

</body>
</html>
