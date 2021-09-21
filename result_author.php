<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	</head>
  <style>
  *{
	text-decoration: none;
	list-style-type:none;
}
  </style>
  <body>
  <?php include 'header.php'; ?>

	<?php
        error_reporting(0);
		session_start();
	
        // SEARCH PROCESS
	    if($_POST['btnsubmit']){
           
            $_SESSION['searching'] = $_POST['search'];
            header('Location: Result.php');    
		}
    ?>

	<!-- SQL QUERY --> 

	<?php

        include 'config.php';

        if(isset($_GET['lname'])){
          
        $let = $_GET['lname'] ;
       
        }else
        $let ='';
        

        $sqlselect = mysqli_query($conn,"select  * from literature where author_1 like '%$let%'  "); // FOR AUTHOR_1
        $sqlselect2 = mysqli_query($conn,"select * from literature where author_2 like '%$let%' ");  // FOR AUTHOR_2
        $sqlselect3 = mysqli_query($conn,"select * from literature where author_3 like '%$let%' ");  // FOR AUTHOR_3
        $sqlselect4 = mysqli_query($conn,"select  * from literature where author_4 like '%$let%' ");  // FOR AUTHOR_4
    ?>


	<!-- SEARCH RESULT --> 
	
	<div class="results container" style="margin-left:10%">
    <div >
      <form class="form-inline" name="search-area" method="POST">
        <input class="form-control" type="search" placeholder="Type something..." aria-label="Search" required name="search" style="width: 300px"; name="search">
        <!-- <br> -->
        <button class="btn btn-success" type="submit" name="btnsubmit" value="Search" style="width:100px;">Search</button>
    </form>
    </div>
    <br>
    <div class="option navi_search">
        <a href="Result.php" >
            <span class=""> All</span>
        </a>
    </div>
    <br>
  <div class="result-bar">
  
	<?php
        $authors1 = array();
        $authors20 = array();
        $authors30 = array();
        $authors40 = array();
              //author 1
              while ($results=mysqli_fetch_object($sqlselect)){
                echo "<div class='res2'>
                <ul><li><b>";
                echo"<a href='Display.php?let=$results->id'>$results->title ";
                echo "</a></li></b>";   
      
            echo "<li><i>";
            $authors1[] = $results->author_1; 
            $authors1[] = $results->author_2;
            $authors1[] = $results->author_3;
            $authors1[] = $results->author_4;
            $cleanarray1= array_filter($authors1);
            $uniquearray1 = array_unique($cleanarray1);
            $printauthors1 = implode(",", $uniquearray1);
            echo $printauthors1;
            $authors1 =array(0);
            
            echo "</li></i>";
      
            echo "<li><i>";
            echo "$results->date </li></i>
            </ul>
            </div> ";
              }
          //author 2
              while ($results=mysqli_fetch_object($sqlselect2)){
            echo "<div class='res2'>
                  <ul><li><b>";
            echo"<a href='Display.php?let=$results->id'>$results->title ";
            echo "</a></li></b>";   
        
            echo "<li><i>";
            $authors20[] = $results->author_1; 
            $authors20[] = $results->author_2;
            $authors20[] = $results->author_3;
            $authors20[] = $results->author_4;
            $cleanarray2= array_filter($authors20);
            $uniquearray2 = array_unique($cleanarray2);
            $printauthors2 = implode(",", $uniquearray2);
            echo $printauthors2;
            $authors20 =array(0);
            echo "</li></i>";
        
            echo "<li><i>";
            echo "$results->date </li></i>
                </ul>
                </div> ";
            }
            //author 3
            while ($results=mysqli_fetch_object($sqlselect3)){
            echo "<div class='res2'>
                  <ul><li><b>";
            echo"<a href='Display.php?let=$results->id'>$results->title ";
            echo "</a></li></b>";   
        
            echo "<li><i>";
            $authors30[] = $results->author_1; 
            $authors30[] = $results->author_2;
            $authors30[] = $results->author_3;
            $authors30[] = $results->author_4;
            $cleanarray3= array_filter($authors30);
            $uniquearray3 = array_unique($cleanarray3);
            $printauthors3 = implode(",", $uniquearray3);
            echo $printauthors3;
            $authors30 =array(0);
            echo "</li></i>";
        
            echo "<li><i>";
            echo "$results->date </li></i>
                </ul>
                </div> ";
            }
            //author 4
            while ($results=mysqli_fetch_object($sqlselect4)){
            echo "<div class='res2'>
                  <ul><li><b>";
            echo"<a href='Display.php?let=$results->id'>$results->title ";
            echo "</a></li></b>";   
        
            echo "<li><i>";
            $authors40[] = $results->author_1; 
            $authors40[] = $results->author_2;
            $authors40[] = $results->author_3;
            $authors40[] = $results->author_4;
            $cleanarray4= array_filter($authors40);
            $uniquearray4 = array_unique($cleanarray4);
            $printauthors4 = implode(",", $uniquearray4);
            echo $printauthors4;
            $authors40 =array(0);
            echo "</li></i>";
        
            echo "<li><i>";
            echo "$results->date </li></i>
                </ul>
                </div> ";
            }
        
    ?>
  </div>
    
</div>
</body>
</html>