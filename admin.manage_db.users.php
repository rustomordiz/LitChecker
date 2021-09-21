<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php   
    include 'config.php';
    include 'header.login.php'; 
    $user = $_SESSION['user_name'];
?>
 

<!-- <div align="right" style="margin: 0px 8%;">
    <a href="#add_upload" data-toggle="modal">
        <button type='button' class='btn btn-success btn-sm'><span class='fa fa-plus' aria-hidden='true'></span>  Add Record</button>
    </a>
</div> -->
<br>
<body onload="myFunction()" style="margin:0;">
    <div class="container">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage Users</li>
      </ol>
    </nav>
        <br>
        <table id="example" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Program</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                     <th>ID</th>
                    <th>Role</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Program</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM user ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $role = $row['user_role'];
                            $username = $row['username'];
                            $password = $row['password'];
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $email = $row['email'];
                            $contact = $row['contact'];
                            $program = $row['program'];
                            

                    ?>
                <tr>
                    <td>
                        <?php echo $id; ?>
                    </td>
                    <td>
                        <?php 
                        if ($role == "Administrator"){
                        ?> 
                        <span class="label label-dark color-dark">Administrator</span>
                        <?php }
                        else if ($role == "Alumni"){
                        ?> 
                        <span class="label label-warning">Alumni</span>
                        <?php }
                        else if ($role == "Faculty"){
                        ?> 
                        <span class="label label-primary">Faculty</span>
                        <?php }
                        else if ($role == "Student"){
                        ?> 
                        <span class="label label-success">Student</span>
                        <?php }
                        else {
                        ?> 
                        <span class="label label-danger">Not Set</span>
                        <?php }
                        ?>
                    </td>
                    <td>
                        <?php echo $username; ?>
                    </td>
                    <td>
                        <?php echo $first_name.' '. $last_name; ?>
                    </td>
                    <td>
                        <?php echo $program; ?>
                    </td>
                    
                    <td>
<!-- MODAL BUTTONS -->
                        <a href="#view<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-success btn-sm'><span class='fa fa-eye' aria-hidden='true'></span> View</button>
                        </a>
                        <a href="#edit<?php echo $id;?>" data-toggle="modal">
                            <button disabled type='button' class='btn btn-info btn-sm'><span class='fa fa-edit' aria-hidden='true'></span> Edit Information</button>
                        </a>
                        <a href="#delete<?php echo $id;?>" data-toggle="modal">
                            <button  type='button' class='btn btn-danger btn-sm'><span class='fa fa-trash' aria-hidden='true'></span> Delete</button>
                        </a>
                    </td>
<!-- VIEW MODAL -->
                    <div id="view<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <form method="post" class="form-horizontal" role="form">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">View Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Username:</label>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="file_id" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $username; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Full Name:</label>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $first_name.' '.$last_name; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Email:</label>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $email; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Contact/s:</label>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $contact; ?>"> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="">Program:</label>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="" name=""  required readonly value="<?php echo $program; ?>"> </div>
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal"><span class="fa fa-close"></span> Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

 <!-- EDIT MODAL -->
                    <div id="edit<?php echo $id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Information</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="file_edit_id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="file_title">Title:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="file_title" name="file_title" value="<?php echo $title; ?>"required autofocus> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="file_author">Author/s:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="file_author" name="file_author" readonly 
                                                value="<?php
                                                    echo $author_1;
                                                    if($author_2 != "") {
                                                        echo ', '.$author_2;
                                                    }
                                                    if($author_3 != ""){
                                                        echo ', '.$author_3;
                                                    }
                                                    if($author_4 != ""){
                                                        echo ', '. $author_4;
                                                    }
                                                ?>"required autofocus> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="file_category">Category:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="file_category" name="file_category" value="<?php echo $category; ?>"required readonly autofocus> </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="file_type">Type:</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="file_type" name="file_type" required>
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="Article">Article</option>
                                                    <option value="Case Study">Case Study</option>
                                                    <option value="Thesis">Thesis</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="file_abstract">Category:</label>
                                            <div class="col-sm-8">
                                                <div class="form-outline w-75 mb-4">
                                                    <textarea class="form-control" id="file_abstract" rows="5" name="file_abstract" ><?php echo $abstract; ?></textarea>
                                                </div>
                                        </div>
                                        <br><br><br><br><br><br><br>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="file_link">Link:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="file_link" name="file_link" value="<?php echo $link; ?>"required autofocus> </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_file"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
<!-- DELETE MODAL -->
                    <div id="delete<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                        <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                <?php echo $title; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="delete" class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </tr>
                <?php
                        }
                        


//Update Items
                        if(isset($_POST['update_file'])){
                            $file_edit_id = $_POST['file_edit_id'];
                            $file_title = $_POST['file_title'];
                            $file_type = $_POST['file_type'];
                            $file_abstract = $_POST['file_abstract'];
                            $file_link = $_POST['file_link'];
                            $sql = "UPDATE literature SET 
                                title='$file_title',
                                form='$file_type',
                                abstract='$file_abstract',
                                link='$file_link'
                                WHERE id='$file_edit_id' ";
                            if ($conn->query($sql) === TRUE) {
                                sleep(1);
                                echo "<script>alert('Edited Successfully!')</script>";
                                echo '<script>window.location.href="works.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }

                        if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];
                            $sql = "DELETE FROM literature WHERE id='$delete_id' ";
                            if ($conn->query($sql) === TRUE) {
                                // $sql = "DELETE FROM literature WHERE id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    // $sql = "DELETE FROM literature WHERE id='$delete_id' ";
                                    sleep(1);
                                    echo "<script>alert('Deleted Successfully!')</script>";
                                    echo '<script>window.location.href="works.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            } else {
                                echo "Error deleting record: " . $conn->error;
                            }
                        }
                    }

                    //Add Item        
                    if(isset($_POST['upload_file'])){
                        $up_title = $_POST['up_title'];
                        $up_date = $_POST['up_date'];
                        $up_category = $_POST['up_category'];
                        $up_type = $_POST['up_type'];
                        $up_link = $_POST['up_link'];
                        $up_author1 = $_POST['up_author1'];
                        $up_author2 = $_POST['up_author2'];
                        $up_author3 = $_POST['up_author3'];
                        $up_author4 = $_POST['up_author4'];
                        $up_abstract = "Not Set, Please add an abstract for this document!";
                        $up_owner = $_POST['up_owner'];

                        $sql = "INSERT INTO literature (
                                        owner,
                                        title,
                                        category,
                                        form,
                                        link,
                                        abstract,
                                        date,
                                        author_1,
                                        author_2,
                                        author_3,
                                        author_4
                                        ) VALUES (
                                        '$up_owner',
                                        '$up_title',
                                        '$up_category',
                                        '$up_type',
                                        '$up_link',
                                        '$up_abstract',
                                        '$up_date',
                                        '$up_author1',
                                        '$up_author2',
                                        '$up_author3',
                                        '$up_author4'

                                        )";
                        if ($conn->query($sql) === TRUE) {
                            // $add_inventory_query = "INSERT INTO tbl_inventory(item_name,item_code,date,qty)VALUES ('$item_name','$item_code','$date','0')";

                            if ($conn->query($add_inventory_query) === TRUE) {
                                echo '<script>window.location.href="works.php"</script>';
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
?>
            </tbody>
        </table>
    </div>
    <!--Add Item Modal -->
    <div id="add_upload" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add new</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_title">Title: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_title" name="up_title" placeholder="Book/Thesis/Article Title" required autocomplete="off" value=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_date">Date Published: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="date" class="form-control" id="up_date" name="up_date" required autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_category">Category: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_category" name="up_category" placeholder="Ex. Information Technology" required autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_type">Type: </label>
                        <div class="col-sm-4">
                            <select class="form-control" id="up_type" name="up_type" required>
                                <option value="">~~SELECT~~</option>
                                <option value="Article">Article</option>
                                <option value="Case Study">Case Study</option>
                                <option value="Thesis">Thesis</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_link">Download Link: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="url" class="form-control" id="up_link" name="up_link" placeholder="https://" required autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_author1 up_author2">Author/s: </label>
                        <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author1" name="up_author1" placeholder="Author 1" required autocomplete="off" value=""> </div>
                            <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author2" name="up_author2" placeholder="Author 2"  autocomplete="off" value=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_author3 up_author4"></label>
                        <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author3" name="up_author3" placeholder="Author 3"  autocomplete="off" value=""> </div>
                            <div class="col-sm-4">
                            <input type="hidden" name="" value="">
                            <input type="text" class="form-control" id="up_author4" name="up_author4" placeholder="Author 4"  autocomplete="off" value=""> </div>
                    </div>
                    <div class="col-sm-8">
                            <h6 align="center" style="color: crimson;">*<b>1 author is required.</b></h6>
                        </div>
                        <br>
                        <br>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="ip_abstract">Abstract: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <textarea disabled type="text" rows="5" class="form-control" id="ip_abstract" name="ip_abstract" 
                            placeholder="Abstract is still on progress, but you can still add this at edit Action " 
                            required autocomplete="off" value=""></textarea>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="up_owner">Owner: </label>
                        <div class="col-sm-8">
                            <input type="hidden" name="" value="">
                            <input type="text" rows="5" class="form-control" id="up_owner" name="up_owner" placeholder="Abstract" readonly="" autocomplete="off" value="<?php echo $_SESSION['user_name']; ?>"></input>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="upload_file"><span class="glyphicon glyphicon-plus"></span> Add</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>
