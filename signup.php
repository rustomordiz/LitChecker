<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<title>Sign Up</title>

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


   <!-- MYSQL QUERY -->

<?php
    //CONFIG
    error_reporting(0);
    
    session_start();
  
    $server = "localhost";
    $user ="root";
    $pass ="";
    $conn=mysqli_connect($server,$user,$pass);
    $db="litcheck";
    mysqli_select_db($conn,$db);

    if($_POST['register']){

        //Login Information
				$un = $_POST['uname'];
				$pw = $_POST['pass'];
 
        $sqlselect = mysqli_query($conn,"select *  from user where username like '$un' "); 
        $sqlselectresult= mysqli_num_rows($sqlselect);

      if($sqlselectresult==0){

       

        //Personal Information
        $ln = $_POST['lname'];
        $fn = $_POST['fname'];
			  $em = $_POST['mail'];
        $co = $_POST['cont'];
        $pr = $_POST['prog'];

				//INSERT Statement
				$sqlInsert = mysqli_query($conn,"insert into user( username, password, last_name, first_name, email, contact, program) values ('$un','$pw','$ln','$fn','$em','$co','$pr')");

				  if($sqlInsert){
            echo "<script>alert('Your have successfully created your account! You can now Login your account.')</script>";
				  }else{
            echo "<script>alert('There was an error in creating your account! Try Again!')</script>";
				  }	  
        }else{
          echo "<script>alert('Username is already taken')</script>";
        }
    }
?>
     <!-- REGISTRATION FORM --> 

     <?php include 'header.php'; ?>

<div class="container" >
    <h2 align="center"><b>Sign up</b></h2>
    <br>
    <div class="panel panel-info">
        <div class="panel-heading"><b> Login Information</b></div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST">
                <h3>Personal Information</h3><br>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="first_name">First Name:</label>
                  <div class="col-sm-6">          
                    <input type="text" class="form-control" id="first_name"  name="fname" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="last_name">Last Name:</label>
                  <div class="col-sm-6">          
                    <input type="text" class="form-control" id="last_name"  name="lname" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="email">Email:</label>
                  <div class="col-sm-6">          
                    <input type="email" class="form-control" id="email"  name="mail" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="contact">Contact: </label>
                  <div class="col-sm-6">          
                    <input type="text" class="form-control" placeholder="Ex. 09112223333" name="cont" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="program">Program: </label>
                  <div class="col-sm-6">          
                        <select class="custom-select" id="program" name = "prog" required>
                            <option selected>-- select program --</option>
                            <option value="Master in Applied Statistics (MAS)">Master in Applied Statistics (MAS)</option>
                            <option value="Master in Communication (MC)">Master in Communication (MC)</option>
                            <option value="Master in Public Administration (MPA)">Master in Public Administration (MPA)</option>
                            <option value="Master of Arts in Filipino (MAF)">Master of Arts in Filipino (MAF)</option>
                            <option value="Master of Arts in Psychology (MA Psych)">Master of Arts in Psychology (MA Psych)</option>
                            <option value="Clinical Psychology">&nbsp;&nbsp;Clinical Psychology</option>
                            <option value="Industrial Psychology">&nbsp;&nbsp;Industrial Psychology</option>
                            <option value="Master of Science in Civil Engineering (MSCE)">Master of Science in Civil Engineering (MSCE)</option>
                            <option value="Structural Engineering">&nbsp;&nbsp;Structural Engineering</option>
                            <option value="Transport Engineering">&nbsp;&nbsp;Transport Engineering</option>
                            <option value="Geotechnical Engineering">&nbsp;&nbsp;Geotechnical Engineering</option>
                            <option value="Water Resources Engineering">&nbsp;&nbsp;Water Resources Engineering</option>
                            <option value="Master of Science in Computer Engineering (MSCpE)">Master of Science in Computer Engineering (MSCpE)</option>
                            <option value="Applied Security and Digital Forensics">&nbsp;&nbsp;Applied Security and Digital Forensics</option>
                            <option value="Data Science and Engineering">&nbsp;&nbsp;Data Science and Engineering</option>
                            <option value="Master of Science in Economics (MSE)">Master of Science in Economics (MSE)</option>
                            <option value="Master of Science in Electronics Engineering (MSEcE)">Master of Science in Electronics Engineering (MSEcE)</option>
                            <option value="Artificial Intelligence and Automation">&nbsp;&nbsp;Artificial Intelligence and Automation</option>
                            <option value="Telecommunications">&nbsp;&nbsp;Telecommunications</option>
                            <option value="Master of Science in Industrial Engineering (MSIE)">Master of Science in Industrial Engineering (MSIE)</option>
                            <option value="Operations and Production Management">&nbsp;&nbsp;Operations and Production Management</option>
                            <option value="Logistics and Supply Chain Management">&nbsp;&nbsp;Logistics and Supply Chain Management</option>
                            <option value="Human Factor Engineering">&nbsp;&nbsp;Human Factor Engineering</option>
                            <option value="Master of Science in Information Technology (MSIT) ">Master of Science in Information Technology (MSIT) </option>
                            <option value="Doctor in Public Administration (DPA) ">Doctor in Public Administration (DPA)</option>
                            <option value="Doctor of Philosophy in Psychology (Ph.D. Psych)">Doctor of Philosophy in Psychology (Ph.D. Psych)</option>
                            <option value="Clinical Psychology">&nbsp;&nbsp;Clinical Psychology</option>
                            <option value="Industrial Psychology">&nbsp;&nbsp;Industrial Psychology</option>

                        </select>
                  </div>
                </div>
                <h3>Login Information</h3><br>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="user_name">Username:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="user_name" name="uname" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" for="password">Password:</label>
                  <div class="col-sm-6">          
                    <input type="password" class="form-control" id="password"  name="pass" required>
                  </div>
                </div>    
        </div> <!-- End of panel-body -->
        <div class="panel-footer">
            <div class="col-md-2 offset-md-6 text-center">
                <input type="submit" value="Register" name="register"> 
            </div>
            <div class="form-group row">
                <div class="col-md-3.75 offset-md-6 text-center">
                    Already have an account?<a href = "login.php"><br> Login here</a>
                </div>
        </div>
    </div>
    </form>
</div>

    

</body>
</html>