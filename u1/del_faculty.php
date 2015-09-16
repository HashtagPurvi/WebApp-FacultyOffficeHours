
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


	$dow1 = "";

	if(isset($_POST['mon'])){

	$edit_id = $_POST['mon'];
	$query = "select * from please Mon='$edit_id";
	$run   = mysql_query($query);

	while ($row = mysql_fetch_array($run)) {

		$post_id	   = $row['id'];
		$post_name     = $row['Name'];
		$post_title    = $row['Title'];
		$post_location = $row['Location'];
		$post_semester = $row['Semester'];
		$post_year 	   = $row['Year'];	
		$dow1			= explode(",", $row['Mon']);
		$dow2			= explode(",", $row['Tue']);
		$dow3			= explode(",", $row['Wed']);
		$dow4			= explode(",", $row['Thu']);
		$dow5			= explode(",", $row['Fri']);
	}

}

	$dow1[0] = "-";
	$dow1[1] = "-";
	$dow1[2] = "-";

	$var1 = array();

	foreach($dow1 as $key => $value)
			$var1[$key] = $value; 

	$var1 = implode(",", $var1);

	$select="update please set Mon='$var1'";
	$query=mysql_query($select) or die($select);

	echo "<script>window.open('u1_view_post.php','_self')</script>";

?>																																																																																																																		