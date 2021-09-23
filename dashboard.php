<!DOCTYPE html>
<html style="">
<head>
	<title>Your Works</title>
</head>
<body>
<?php
	include 'config.php';
	include 'header.login.php';

 $user = $_SESSION['user_name'];

            $sqlcat = "SELECT owner FROM literature WHERE owner = '$user'"; // Problem here 'Lorem'
            $result = $conn->query($sqlcat);
            $workCount = 0;

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                       $userCheck = $row['owner'];

//recode this
//also recode the number of view and add favoritess chuchu
                  if( $userCheck == $user ) { 
                        $workCount = $workCount + 1;
                    }
                }
            }

            $sql_role = "SELECT * FROM user WHERE username = '$user'"; // Problem here 'Lorem'
            $result = $conn->query($sql_role);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $user_role = $row['user_role'];
                }
            }

?>

    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></li>
          </ol>
        </nav>
<center>
        <a href="works.php">
            <button class="btn btn-success"><span class="fa fa-file"></span> Your Works</button>
        </a>
        <a href="manage_profile.php">
            <button class="btn btn-primary"><span class="fa fa-cog"></span> Manage Profile</button>
        </a>
        <?php 
            if($user_role == "Administrator"){
                echo '<a href="admin.manage_db.php">
                        <button class="btn btn-info"><span class="fa fa-database"></span> Manage Database</button>
                    </a>';
                echo '<a href="admin.manage_db.users.php">
                    <button class="btn btn-warning"><span class="fa fa-user"></span> Manage Users</button>
                </a>';
                }
         ?>
        <a href="logout.php">
            <button class="btn btn-danger"><span class="fa fa-sign-out"></span> Log out</button>
        </a>
</center>

       	<div class="container">
            <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><span class="fa fa-file btn-lg white"></span></div>
                        <div class="info">
                            <h2 class="title">
                              <?php echo $workCount ?>
                            </h2>
                            <h4>Total File Uploads</h4>
                            <div class="more">
                                <a href="works.php" title="Title Link"><i class="fa fa-info-circle"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><span class="fa fa-eye btn-lg white"></span></div>
                        <div class="info">
                            <h2 class="title"> 
                              <?php echo(rand(0,30)); ?>
                            </h2>
                            <h4>Total Views</h4>
                            <div class="more">
                                <a href="order.php" title="Title Link"><i class="fa fa-info-circle"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="box">
                    <div class="icon">
                        <div class="image"><span class="fa fa-heart btn-lg white"></span></div>
                        <div class="info">
                            <h2 class="title">
                               <?php echo(rand(0,10));?>
                            </h2>
                            <h4>Favorites</h4>
                            <div class="more">
                                <a href="category.php" title="Category"><i class="fa fa-info-circle"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
        </div>
       </div>
    </div>
</body>
</html>



    <style>
    .white {
        color: white;
    }

    .btn-lg {
        font-size: 38px;
        line-height: 1.33;
        border-radius: 6px;
    }

    .box > .icon {
        text-align: center;
        position: relative;
    }

    .box > .icon > .image {
        position: relative;
        z-index: 2;
        margin: auto;
        width: 88px;
        height: 88px;
        border: 7px solid white;
        line-height: 88px;
        border-radius: 50%;
        background: #63B76C;
        vertical-align: middle;
    }

    .box > .icon:hover > .image {
        border: 4px solid black;
    }

    .box > .icon > .image > i {
        font-size: 40px !important;
        color: #fff !important;
    }

    .box > .icon:hover > .image > i {
        color: white !important;
    }

    .box > .icon > .info {
        margin-top: -24px;
        background: rgba(0, 0, 0, 0.04);
        border: 1px solid #e0e0e0;
        padding: 15px 0 10px 0;
    }

        .box > .icon > .info > h3.title {
            color: #222;
            font-weight: 500;
        }

        .box > .icon > .info > p {
            color: #666;
            line-height: 1.5em;
            margin: 20px;
        }

    .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a {
        color: #222;
    }

    .box > .icon > .info > .more a {
        color: #222;
        line-height: 12px;
        text-transform: uppercase;
        text-decoration: none;
    }

    .box > .icon:hover > .info > .more > a {
        color: #000;
        padding: 6px 8px;
        border-bottom: 4px solid black;
    }

    .box .space {
        height: 30px;
    }
</style>