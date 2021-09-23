<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LitChecker</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	
</head>
<style>
li
{
	list-style-type: none;
}
a
{
	text-decoration:none;
	color: #107896;
}
</style>

  

<body>
<?php include 'header.php';?> 
 	<!-- MENU BAR --> 
<div  class="container" >
    <!--MAIN SECTION -->
    <section class = "body" style="color: black;">
    <br>
    <!--LETTER LIST --> 
    <a href="search_author.php?let=A"> A </a> | 
    <a href="search_author.php?let=B"> B </a> | 
    <a href="search_author.php?let=C"> C </a> | 
    <a href="search_author.php?let=D"> D </a> | 
	<a href="search_author.php?let=E"> E </a> | 
	<a href="search_author.php?let=F"> F </a> | 
	<a href="search_author.php?let=G"> G </a> | 
	<a href="search_author.php?let=H"> H </a> | 
	<a href="search_author.php?let=I"> I </a> | 
	<a href="search_author.php?let=J"> J </a> | 
	<a href="search_author.php?let=K"> K </a> | 
	<a href="search_author.php?let=L"> L </a> | 
	<a href="search_author.php?let=M"> M </a> | 
	<a href="search_author.php?let=N"> N </a> | 
	<a href="search_author.php?let=O"> O </a> | 
	<a href="search_author.php?let=P"> P </a> | 
	<a href="search_author.php?let=Q"> Q </a> | 
	<a href="search_author.php?let=R"> R </a> | 
	<a href="search_author.php?let=S"> S </a> | 
	<a href="search_author.php?let=T"> T </a> | 
	<a href="search_author.php?let=U"> U </a> | 
	<a href="search_author.php?let=V"> V </a> | 
	<a href="search_author.php?let=W"> W </a> | 
	<a href="search_author.php?let=X"> X </a> | 
	<a href="search_author.php?let=Y"> Y </a> | 
    <a href="search_author.php?let=Z"> Z </a>  
    <br><br>
    
    <!--DISPLAYING AUTHOR LIST -->

        <!--SQL CONNECTION -->
        <?php
         session_start();
  
         $server = "localhost";
         $user ="root";
         $pass ="";
         $con=mysqli_connect($server,$user,$pass);
         $db="litcheck";
         mysqli_select_db($con,$db);

        if(isset($_GET['let']))
            $let = $_GET['let'];
        else
            $let='A';

            $sqlselect = mysqli_query($con,"select DISTINCT last_name,first_name,username from user where last_name like '$let%' "); 
         
       ?>

        <ul>

        <?php

           //AUTHOR LIST
            while ($results=mysqli_fetch_object($sqlselect)){
                echo "<li>";
                echo"<a href='Result_author.php?lname=$results->first_name+$results->last_name'>";
                echo ''.$results->last_name.", ".$results->first_name." ";    
                echo "</a>";   
                echo "</li>";
            }
            
        ?>
            
        </ul>
    </section>
</div>
</body>
</html>