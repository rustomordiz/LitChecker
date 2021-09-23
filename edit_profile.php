<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<title>Edit User Information</title>

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
include 'config.php';
error_reporting(0);
$id = $_SESSION['user_id'];
$user = $_SESSION['user_name'];

$sqlSelect = mysqli_query($conn,"select * from user where id = $id");
$results = mysqli_fetch_object($sqlSelect);


//RETRIEVE USER DATA FROM DATABASE
 $sql = "SELECT * FROM user WHERE username = '$user'";  
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $id = $row['id'];
         $username = $row['username'];
         $password = $row['password'];
         $firstname = $row['first_name'];
         $lastname = $row['last_name'];
         $email = $row['email'];
         $contact = $row['contact'];
         $program = $row['program'];
         }
  }
//EDITING USER DATA TO DATABASE
if($_POST['edituser']){

      //Personal Information
      $ln = $_POST['lname'];
      $fn = $_POST['fname'];
      $em = $_POST['mail'];
      $co = $_POST['cont'];
      $pr = $_POST['prog'];

          //UPDATE Statement
          $sqlUpdate = mysqli_query($conn,"update user set last_name = '$ln', first_name = '$fn', email = '$em', contact = '$co', program = '$pr' where id = $id ");

          if($sqlUpdate){
              echo "<script>alert('Update profile sucessfully ')</script>";

              sleep(1);
              header('Location: manage_profile.php');
          }else{
              echo "<script>alert('There was an error in updating your profile')</script>";
          }
       }
   
?>

 <?php include 'header.login.php'; ?>

<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="manage_profile.php">Manage Profile</a></li>
        <li class="breadcrumb-item active">Edit User Information</li>
      </ol>
    </nav>
     

    <div class="panel panel-primary">
        <div class="panel-heading"><b>Edit User Information</b></div>
        <div class="panel-body">
		    <form class="form-horizontal" method="POST" name="edituser">
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">First Name:</label>
				  <div class="col-sm-6">
				    <input type="text" class="form-control" id="" value="<?php echo $firstname ?>" name="fname" required >
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Last Name:</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $lastname ?>" name="lname" required >
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Email Address:</label>
				  <div class="col-sm-6">
				    <input type="email" class="form-control" id="" value="<?php echo $email ?>" name="mail" required >
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Contact Info:</label>
				  <div class="col-sm-6">          
          <input type="text" class="form-control" name="cont" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="<?php echo $contact ?>" >
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Program</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $program ?>" name="prog" required >
				  </div>
				</div>
        <div class="panel-footer" align="right">
              <button class="btn btn-primary" type="submit" value="Edit User Information" name="edituser"><span class="fa fa-edit"></span> Edit User Information</button>
          </div>
			</div>
			</form>
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
