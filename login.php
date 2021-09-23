<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<title>Login</title>

</head>
<body class = "bg">


 <!-- MYSQL QUERY --> 

<?php

error_reporting(0);
if($_POST['btnLogin']){
   $u = $_POST['uname'];
   $p = $_POST['pass'];

$server = "localhost";
$uname = "root";
$pass = "";
$con = mysqli_connect($server,$uname,$pass);
$db = "litcheck";
mysqli_select_db($con,$db);

		   $sqlSelect = mysqli_query($con,"select * from user where username like binary '$u' and password like binary'$p'");
		   $results = mysqli_fetch_object($sqlSelect);
		   $id = $results->id;
		   $username = $results->username;
		   $password = $results->password;

		   if($id != ""){
			   session_start();
			   $login = true;
			   $_SESSION['logged_in'] = $login;
			   $_SESSION['user_id'] = $id;
			   $_SESSION['user_name'] = $username;
			   sleep(3);
			   header('Location: dashboard.php');

		   }else{
			   echo "<script>alert('Invalid Username or Password')</script>";
		   }
	   }
?>  

 <!-- LOGIN FORM --> 
<div class= "wrapper">
	<div class = "row">
	<div class = "col-8">
		<div class = "container" style = "text-align:center;padding-top:25vh">
		
		</div>
		<div>
			<center>
			<a href="index.php">	<img src = "images/newlogo.png" style="width:830px;height:350px;"></a>
			</center>
		</div>
	</div>
	<div class = "col-4">	
		<div class = "float-right padding_0">
		<div class = "card ">
			<div class = "container" style = "text-align:center;padding-top:25vh"><h1>Sign in your account</h1></div>
			<div class="card-body">
				<form name="signup" method="POST">

                    <div class="form-group">
                        
                        <div class="col-md-10 offset-md-1 pt-5">
                            <input type="text" id="user_name" class="form-control" name="uname" placeholder="Username" autocomplete="off">
                        </div>
                    </div>

					<div class="form-group">
                        
                        <div class="col-md-10 offset-md-1">
                            <input type="password" id="first_name" class="form-control" name="pass" placeholder = "Password" autocomplete="off">
                        </div>
                    </div>

					<div class="col-md-10 offset-md-1 pt-3">
					<input type="submit" value="Sign In" name="btnLogin"> 
                    </div>

					<div class = "col-md-12 text-center pt-2 subtext"><a href = "">
						Forgot Password?</a>
					</div>

					<div><hr></div>
					</form>
					<form action = "Signup.php">
					<div class="col-md-10 offset-md-1 pt-2">
                        <button type="submit" class="btn btn-secondary btn-block" href= "signup.php">Create New Account</button>
                    </div>
					</form>
				
			</div>
		</div>
	</div>
	</div>
	</div>
</div>
</body>
</html>


<style type="text/css">
	

	html,body{
	height: 100%;
	overflow: hidden;
}
.subtext{
	font-size:15px;

}
.bg{
	background-color: #e3e0e0;


}
.card {
    border:0;
    border-radius: 0;
	background: inherit;
	background-color:#ecad3a;
    height: 100vh;

    
}
.padding_0{
    padding-left: 0%;
    padding-right: 0%;
    width:70vh
    
}


input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
</style>