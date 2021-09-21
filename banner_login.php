
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
	<script>
	$(document).ready(function() {
	        $('#example').DataTable({});
	    });
	</script>
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
                			<li><a href='Login.php'>Login</a></li>
							<li><a href='Signup.php'>Signup</a></li>
               				</div>";
            			}else{
               			 echo"<div class='dropdown-content'>
                			<li><a href='manage_profile.php'>Profile</a></li>
                			<li><a href='Logout.php'>Logout</a></li>
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


<style type="text/css">
	
/**{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background-color: #e3e0e0;
	
}*/

.banner{
	width: 50%;
	height: 50%;
}
.navbar{
	width: 85%;
	margin: auto;
	padding: 35px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.navbar ul li{
	list-style: none;
	display: inline-block;
	position: relative;
	float: left;
}
.navbar ul li a{
	text-decoration: none;
	/*color: #107896;*/
	color: black;
	text-transform: uppercase;
	display: inline-block;
	padding: 6px 25px;
}
.navbar ul li a:after{
	content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: 0px;
    transition: 0.5s;
    margin: 0 25px 0 ;
}
.navbar ul li a:before{
	content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li a:hover:after, .navbar ul li a:hover:after{
	width: 60%;
}
.navbar ul li ul{
	position: absolute;
	background: transparent;
	width: 208px;
	transition: .7s;
	opacity: 0;
	visibility: hidden;
	margin-top: -25px;
	padding: 20px 0 0 0;
}
.navbar ul li:hover > ul{
	opacity: 1;
	visibility: visible;;
	margin-top: 0;	
}
.logo{
	width: 550px;
	position: absolute;
	right: 34.5%;
	top: 17%;
}
/*.search{
	width: 40%;
	margin: auto; 
	position: absolute;
	top: 50%;
	left: 30%;
}
.search input,button{
	width: 75%;
	border: 2px solid black;
	font-size: 18px;
	padding: 12px;
	background: transparent;
	color: black;

}
.search button{
	width: 20%;
	background: #eee;
	color: black;
	float: right;

}
.search button:hover{
	opacity: 0.7;
}
.search li{
	list-style: none;
	display: inline-block;
	margin: 0 20px;
	position: relative;
}
.search ul li a{
	text-decoration: none;
	color: #107896;
	text-transform: uppercase;
}
.match{
	width: 50%;
	position: absolute;
	right: 20%;
	top: 60%;
}*/


</style>