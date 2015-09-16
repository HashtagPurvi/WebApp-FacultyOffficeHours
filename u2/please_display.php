<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BGSU Computer Science Faculty Office Hours !!</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--My custom CSS -->

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head> 
  <body>
      <nav id="myNavbar" class=" navbar navbar-default navbar-inverse navbar-fixed-top custom" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container  ">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                 
                  <h1 class="pull-left">BGSU</h1>   

            <!--      <h2><a class="navbar-brand" href="#">BGSU Computer Science</a></h2> -->

              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul  class="pull-right nav navbar-nav">
                      <!--<li class="active"><a href="#" >Home</a></li> 
                      <li><a href="please_display.php" >Faculty Office Hours</a></li>
                      -->
                      <li><a href="#" >Graduate Assistant Office Hours</a></li>
                      
                  </ul>

                  <ul class="pull-right nav navbar-nav navbar-right">
                      <li><a href="admin1.php"> Admin Login</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <hr>
     
     <div class="jumbotron">
      <div id="content">
         <h2>BGSU Computer Science Faculty Office Hours</h2>
       </div>
     </div>
     <!-- <div id="sidebar">
     	<h1>Dept. of Computer Science<h1>
     	<p>
			221 Hayes Hall
			Bowling Green, Ohio 43403-0172
			1-419-372-2337
			email: bgcs@bgsu.edu
		</p>
     </div> -->
     <div id="section">


     </div>

  </body>
</html>

<?php

	include("connect.php");

	$select_post = "select * from please";
	$run_posts   =  mysql_query($select_post);

	//retrieving data one by one from run_post collected in $row 
	while ($row = mysql_fetch_array($run_posts)) {
	
		$name 		= $row['Name'];
		$title 		= $row['Title'];
		$location 	= $row['Location'];
		$semester 	= $row['Semester'];
		$year 		= $row['Year'];
		$day1		= $row['Mon'];
		$day2		= $row['Tue'];
		$day3		= $row['Wed'];
		$day4		= $row['Thu'];
		$day5		= $row['Fri'];
	
		$dow1 = explode(",", $day1);
		$dow2 = explode(",", $day2);
		$dow3 = explode(",", $day3);
		$dow4 = explode(",", $day4);
		$dow5 = explode(",", $day5);

	echo "<h2 id='section'>".$name. "</h2>" ;
	echo " ";
	echo "<p id='section' ><strong>Position:</strong> ".$title. "</p>";
	echo "<p id='section' ><strong>Address: </strong>".$location;
	echo "<p id='section' ><strong>Semester:</strong> ".$semester;
	echo "<p id='section' ><strong>Year: </strong>".$year;	
	
	echo "<p id='section' ><strong>Office Hours Days: </strong> <br/>" ;

	if($dow1[0] =="-")
		echo "";
	else
		echo $dow1[0]. ": ". $dow1[1]."-". $dow1[2]."<br/>";		
	
	if($dow2[0] =="-")
		echo "";
	else
		echo $dow2[0]. ": ". $dow2[1]."-". $dow2[2]."<br/>";		

	if($dow3[0] =="-")
		echo "";
	else
		echo $dow3[0]. ": ". $dow3[1]."-". $dow3[2]."<br/>";		

	if($dow4[0] =="-")
		echo "";
	else
		echo $dow4[0]. ": ". $dow4[1]."-". $dow4[2]."<br/>";		

	if($dow5[0] =="-")
		echo "";
	else
		echo $dow5[0]. ": ". $dow5[1]."-". $dow5[2]."<br/>";		
	
	}
	echo "<hr>";
// Display from u2 table

	$select_post = "select * from u2";
	$run_posts   =  mysql_query($select_post);

	//retrieving data one by one from run_post collected in $row 
	while ($row = mysql_fetch_array($run_posts)) {
	
		$u2_name 		= $row['Name'];
		$u2_title 		= $row['Title'];
		$u2_location 	= $row['Location'];
		$u2_semester 	= $row['Semester'];
		$u2_year 		= $row['Year'];
		$u2_day1		= $row['Mon'];
		$u2_day2		= $row['Tue'];
		$u2_day3		= $row['Wed'];
		$u2_day4		= $row['Thu'];
		$u2_day5		= $row['Fri'];
	
		$u2_dow1 = explode(",", $u2_day1);
		$u2_dow2 = explode(",", $u2_day2);
		$u2_dow3 = explode(",", $u2_day3);
		$u2_dow4 = explode(",", $u2_day4);
		$u2_dow5 = explode(",", $u2_day5);

	echo "<h2  id='section'>".$u2_name. "</h2>" ;
	echo " ";
	echo "<p id='section' ><strong>Position:</strong> ".$u2_title;
	echo "<br/> ";
	echo "<p id='section' ><strong>Address:</strong> ".$u2_location;
	echo "<br/> ";
	echo "<p id='section' ><strong>Semester:</strong> ".$u2_semester;
	echo "<br/> ";
	echo "<p id='section' ><strong>Year: </strong>".$u2_year;	
	echo " ";
	echo "<br/>";
//	echo $dow1[0];
	$i=0;
	echo "<p id='section' ><strong>Office Hours Days:</strong> <br/>" ;
	//foreach ($u2_dow1 as $key1 => $u2_value) {
			
	if($u2_dow1[0] =="-")
		echo "";
	else
		echo $u2_dow1[0]. ": ". $u2_dow1[1]."-". $u2_dow1[2]."<br/>";		
	
	if($u2_dow2[0] =="-")
		echo "";
	else
		echo $u2_dow2[0]. ": ". $u2_dow2[1]."-". $u2_dow2[2]."<br/>";		
		
	if($u2_dow3[0] =="-")
		echo "";
	else
		echo $u2_dow3[0]. ": ". $u2_dow3[1]."-". $u2_dow3[2]."<br/>";		

	if($u2_dow4[0] =="-")
		echo "";
	else
		echo $u2_dow4[0]. ": ". $u2_dow4[1]."-". $u2_dow4[2]."<br/>";		

	if($u2_dow5[0] =="-")
		echo "";
	else
		echo $u2_dow5[0]. ": ". $u2_dow5[1]."-". $u2_dow5[2]."<br/>";				
			
/*
		
	foreach ($u2_dow2 as $key2 => $u2_value) {
		
			if($u2_dow2[$key2] !="-")
				echo $u2_value. " ";		
			
		}
	echo "<br/> ";
	
	foreach ($u2_dow3 as $key3 => $u2_value) {
		
			if($u2_dow3[$key3] !="-")
			echo $u2_value. " ";		

			}

	echo "<br/> ";
	foreach ($u2_dow4 as $key4 => $u2_value) {
		
			if($u2_dow4[$key4] !="-")
			echo $u2_value. " ";		

			}

	echo "<br/> ";
	foreach ($u2_dow5 as $key5 => $u2_value) {
		
			if($u2_dow5[$key5] !="-")
			echo $u2_value. " ";		

			}*/

	}
	


?>

<hr>
          <div class="row">
              <div class="col-sm-12">
                  <footer>
                      <p align="center">&copy; BGSU Computer Science</p>
                  </footer>
              </div>
          </div>