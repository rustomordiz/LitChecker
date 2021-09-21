<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<title>Change Password</title>

</head>

<style>
    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 18px;
    margin: 7px 0;
    border: none;
    border-radius: 3px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
</style>
<body>
<br><br>

   <!-- MYSQL QUERY -->

   <?php

error_reporting(0);
session_start();
$id = $_SESSION['user_id'];

include 'config.php';

$sqlSelect = mysqli_query($conn,"select * from user where id = $id");
$results = mysqli_fetch_object($sqlSelect);
$pw = $results->password;

if($_POST['changepass']){

   $npw = $_POST['newpass'];
   $opw = $_POST['oldpass'];


            if($opw!=$pw){
                 echo "<script>alert('Your old password does not match!')</script>";
            }else{
       
           //UPDATE Statement
           $sqlUpdate = mysqli_query($conn,"update user set password = '$npw' where id = $id ");

           if($sqlUpdate){
               echo "<script>alert('Update profile sucessfully ')</script>";

               sleep(1);
               header('Location: manage_profile.php');
           }else{
               echo "<script>alert('There was an error in changing your password')</script>";
           }
        }
    }
       

?>

 <?php include 'header.login.php'; ?>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="manage_profile.php">Manage Profile</a></li>
        <li class="breadcrumb-item active">Change Password</li>
      </ol>
    </nav>
     

    <div class="panel panel-primary">
        <div class="panel-heading"><b>Change Password</b></div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" name="changepass">
                <div class="form-group">
                  <label class="control-label col-sm-3" for="oldpass">Old Password:</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control" id="oldpass" name="oldpass" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="newpass">New Password:</label>
                  <div class="col-sm-6">          
                    <input type="password" class="form-control" id="newpass" name="newpass" required>
                  </div>
                </div>
                <div align="right">
                    <input type="checkbox"  onclick="seePassword()"> Show Password | 
                    <button class="btn btn-primary" type="submit" value="Change Password" name="changepass">Change Password</button><!-- 
                    <input class="btn btn-primary" type="submit" value="Change Password"  name="changepass">  -->
            </form>
        </div>      
    </div>
</div>

</body>
</html>


<script>
//Show password function
function seePassword() {
var x = document.getElementById("oldpass");
var y = document.getElementById("newpass");
if (x.type === "password") {
    x.type = "text";
 }else {
    x.type = "password";
 }
 if (y.type === "password") {
    y.type = "text";
 }else {
    y.type = "password";
 }
}
</script>
