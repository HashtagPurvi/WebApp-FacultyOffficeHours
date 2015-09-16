
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


	$dow4 = "";

	if(isset($_POST['thu'])){

	$edit_id = $_POST['thu'];
	$query = "select * from u2 Thu='$edit_id";
	$run   = mysql_query($query);

	while ($row = mysql_fetch_array($run)) {

		$post_id	   = $row['id'];
		$post_name     = $row['Name'];
		$post_title    = $row['Title'];
		$post_location = $row['Location'];
		$post_semester = $row['Semester'];
		$post_year 	   = $row['Year'];	
		
		$dow4			= explode(",", $row['Thu']);
		
	}

}

	$dow4[0] = "-";
	$dow4[1] = "-";
	$dow4[2] = "-";

	$var4 = array();

	foreach($dow4 as $key => $value)
			$var4[$key] = $value; 

	$var4 = implode(",", $var4);

	$select="update u2 set Thu='$var4'";
	$query=mysql_query($select) or die($select);

	echo "<script>window.open('u2_view_post.php','_self')</script>";


	

?>																																																																																																																		