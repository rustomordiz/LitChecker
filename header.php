
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	<link rel="stylesheet" href="css/w3scss">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/jquery-1.12.4.js"></script>
	<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/responsive.bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	
</head>
<body>
 	<div class="banner" >
 		<div class="navbar" >
 			<ul>
 				<li>
 					<!-- <a href=""><img src="images/newlogo.png" width="20%"></a> -->
 					<a href="index.php"><b>LitChecker</b></a>
 				</li>
 				<li><a href="index.php">Home</a></li>
 				<li><a href="">Browse</a>
 					<ul>
 						<li><a href="search_author.php">Author</a></li>
 						<li><a href="search_category.php">Course</a></li>

 					</ul>
 				</li>
 				<li><a href="">Account</a>
 					<ul>
					 <?php
             			error_reporting(0);
            			session_start();
           				 $test = $_SESSION['logged_in'] ;
            			if($test == false){

           				 echo"<div class='dropdown-content'>
                			<li><a href='login.php'>Login</a></li>
							<li><a href='signup.php'>Signup</a></li>
               				</div>";
            			}else{
               			 echo"<div class='dropdown-content'>
               			 	<li><a href='dashboard.php'>Dashboard</a></li>
                			<li><a href='logout.php'>Logout</a></li>
                			</div>";
           				 }

        				?>
 					</ul>
 				</li>
 			</ul>
 		</div>
 	</div>
</body>
</html>



