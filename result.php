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

	 <!-- SEARCH OPTIONS -->
	 <div class="results container" style="margin-left:10%">
    <div >
      <form class="form-inline" name="search-area" method="POST">
        <input class="form-control" type="search" placeholder="Type something..." aria-label="Search" required name="search" style="width: 300px"; name="search">
		<button class="btn btn-success" type="submit" name="btnsubmit" value="Search" style="width:100px;">Search</button>
    </form>
    </div>
    <br>
    <div class="option navi_search">
	<a href="result.php" >
      		<span class=" sm"></span> All
      	</a> |
		  <a href="result_type.php?type=article" >
        	<span class=""></span> Article
      	</a> |
		  <a href="result_type.php?type=college" >
        	<span class=""></span> College Thesis
      	</a> |
		  <a href="result_type.php?type=conference" >
        	<span class=""></span> Conference Proceeding
		</a> |
		<a href="result_type.php?type=dissertation" >
        	<span class=""></span> Dissertation
    	</a> |
       	
			<a href="result_type.php?type=master" >
        	<span class=""></span> Master Thesis
      	</a>
    </div>
    <br>
<div class="result-bar"> 

	<!-- SQL QUERY --> 

	<?php
      
      include 'config.php';
       
        //search
        $search_this = $_SESSION['searching'];

        $sqlselect = mysqli_query($conn,"select *  from literature where title like '%$search_this%' "); 
        $sqlselectresult= mysqli_num_rows($sqlselect);

    ?>


	<!-- SEARCH RESULT --> 
	
	<div class="results">
	<?php
			$authors1 =array();
        while ($results=mysqli_fetch_object($sqlselect)){
              	  echo "<div class='res2'>
					<ul><li><b>";
              	  echo"<a href='display.php?let=$results->id'>$results->title ";
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
		//IF NO RESULTS FOUND
		if($sqlselectresult == 0){
			echo'No results found!';
		} 

    ?>
	</div>
</div>

</body>
</html>