<?php 
include 'config.php';
$user = $_SESSION['user_name'];
$userid = $_SESSION['user_id'];

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
        } ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profiles</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'header.login.php'; ?>

<div class="container" >
	    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></li>
            <li class="breadcrumb-item ">Manage Profile</li>
          </ol>
        </nav>
	<h2>Profile</h2>
	<div class="panel panel-primary">
    	<div class="panel-heading"><b>User Information</b></div>
	    <div class="panel-body">
		    <form class="form-horizontal" action="">
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">First Name:</label>
				  <div class="col-sm-6">
				    <input type="text" class="form-control" id="" value="<?php echo $firstname ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Last Name:</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $lastname ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Email Address:</label>
				  <div class="col-sm-6">
				    <input type="email" class="form-control" id="" value="<?php echo $email ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Contact Info:</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $contact ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Program</label>
				  <div class="col-sm-6">          
				    <input type="text" class="form-control" id="" value="<?php echo $program ?>" name="" readonly>
				  </div>
				</div>
			</div>
			</form>
			<div class="panel-footer" align="right">
				<button class="btn btn-primary" onclick='window.location.replace("edit_profile.php")'><span class="fa fa-edit"></span> Edit User Information</button>
			</div>
			
		</form>
    </div>
    <br>
	<div class="panel panel-primary">
    	<div class="panel-heading"><b>Login Information</b></div>
	    <div class="panel-body">
		    <form class="form-horizontal" action="">
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Username:</label>
				  <div class="col-sm-6">
				    <input type="text" class="form-control" id="" value="<?php echo $username ?>" name="" readonly>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Password:</label>
				  <div class="col-sm-6">          
				    <input type="password" class="form-control" id="" value="<?php echo $password ?>" name="" readonly>
				  </div>
				</div>
			</form>
		</div>
			<div class="panel-footer" align="right">
					<button class="btn btn-primary" onclick='window.location.replace("manage_password.php")'><span class="fa fa-edit"></span> Change Password</button>
			</div>
			</form>
	    </div>
	    <br><br><br>

	    <h2>Dev Support</h2>
	    <div class="panel panel-info">
    	<div class="panel-heading"><b>Contact Information</b></div>
	    <div class="panel-body">
		    <form class="form-horizontal" action="">
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Email us at: </label>
				  	<label class="control-label col-sm-2"><a href="" target="popup" onclick="window.open('https://www.gmail.com','name','width=600,height=400')">litchecker21@gmail.com</a></label>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-3" for="">Contact: </label>
				  	<label class="control-label col-sm-2"><a href="" target="popup" onclick="window.open('https://www.google.com','name','width=600,height=400')">+6399-1122-3344</a></label>
				</div>
			</form>
	    </div>
    </div>


    </div>     
</div>


</body>
</html>



