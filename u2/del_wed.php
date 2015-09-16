
<!Doctype html>

<head>
	<title>Delete Office Hours</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
	<script type="text/javascript" src="js/jquery.timepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.timepicker.css" />

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.css" />

    <script type="text/javascript" src="js/modify_time.js"></script>

    <link rel="stylesheet" type="text/css" href="css/jquery.datepick.css"> 
	<script type="text/javascript" src="js/jquery.plugin.js"></script> 
	<script type="text/javascript" src="js/jquery.datepick.js"></script>

</head>

<body>

<?php
	
	include("connect.php");


	$dow3 = "";

	if(isset($_POST['wed'])){

	$edit_id = $_POST['wed'];
	$query = "select * from u2 Wed='$edit_id";
	$run   = mysql_query($query);

	while ($row = mysql_fetch_array($run)) {

		$post_id	   = $row['id'];
		$post_name     = $row['Name'];
		$post_title    = $row['Title'];
		$post_location = $row['Location'];
		$post_semester = $row['Semester'];
		$post_year 	   = $row['Year'];	
		
		$dow3			= explode(",", $row['Wed']);
		
	}

}

	$dow3[0] = "-";
	$dow3[1] = "-";
	$dow3[2] = "-";

	$var3 = array();

	foreach($dow3 as $key => $value)
			$var3[$key] = $value; 

	$var3 = implode(",", $var3);

	$select="update u2 set Wed='$var3'";
	$query=mysql_query($select) or die($select);

	echo "<script>window.open('u2_view_post.php','_self')</script>";


	

?>																																																																																																																		