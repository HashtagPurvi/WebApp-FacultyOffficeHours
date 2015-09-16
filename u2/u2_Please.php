<!Doctype html>

<head>
	<title>Set Office Hours</title>
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
<h1><a href="u2_Main_Login.php">Back to Admin Home Page</a></h1>
<form method="post" action="u2_Please.php" enctype="multipart/form-data">
		<table name="dataTable" id="t1" width="800" align="center" border="10">
			<tr>
				<td align="center" bgcolor="Green">
					<h1>Insert Data</h1>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Title</td>
				<td><input type="text" name="designation"></td>
			</tr>

			<tr>
				<td>Office Location</td>
				<td><input type="text" name="location"></td>
			</tr>

			<tr>
				<td>Select the days for Office hours</td>
			</tr>

			<tr id = "tr1">
				<td><input class="chk1" type="checkbox"  name="Day1[]" value="Monday">Monday<br></td>
			</tr>

			<tr id = "tr2">
				<td><input class="chk2" type="checkbox" name="Day2[]" value="Tuesday">Tuesday<br></td>
			</tr>	

			<tr id = "tr3"> 
				<td><input class="chk3" type="checkbox" name="Day3[]" value="Wednesday">Wednesday</td>
			</tr>	

			<tr id = "tr4">
				<td><input class="chk4" type="checkbox" name="Day4[]" value="Thursday">Thursday<br></td>
			</tr>	

			<tr id = "tr5">
				<td><input class="chk5" type="checkbox" name="Day5[]" value="Friday">Friday<br></td>
			</tr>	

			

			<script src="js/add_meets_3.js">   		</script>


		<tr>
				<td>Select the Semester</td>
				<td>
					<select name="Semester">
					  <option value="Fall">Fall </option>
					  <option value="Spring">Spring </option>
					  <option value="Summer">Summer </option>
					</select>
				</td>
		</tr>	

		<tr>
				<td>Select the Year</td>
				<td><input type="text" name="year"></td>
		</tr>

		<tr>
				<td align="center" colspan="5"><input type="submit" name="submit" value="Submit Info"></td>
		</tr>

		</table>

	</form>
	</body>

</html>


<!--  PHP code for connection to database and entering values to DB -->

<?php

	$ret = mysql_connect("","","");
	if($ret == FALSE) 
		{ 
			echo "mysql_connect error<br/>";
		}

	else
		$ret = mysql_select_db("");

	

	if(isset($_POST['submit']))				// If the submit is clicked the following actions takes place
	{
		$faculty_name 	= $_POST['name'];
		$designation 	= $_POST['designation'];
		$location 		= $_POST['location'];
		$semester  		= $_POST['Semester'];
		$year 	   		= $_POST['year'];
		$day1 			= $_POST['Day1'];		// Retrieving Monday and its timings
		$day2 			= $_POST['Day2'];	
		$day3 			= $_POST['Day3'];	
		$day4 			= $_POST['Day4'];	
		$day5 			= $_POST['Day5'];	

		var_dump($day1);
		if($day1[0] =="")
		{
			$day1[0]="-";
			$day1[1]="-";
			$day1[2]="-";
		}

		if($day2[0] =="")
		{
			$day2[0]="-";
			$day2[1]="-";
			$day2[2]="-";
		}

		if($day3[0] =="")
		{
			$day3[0]="-";
			$day3[1]="-";
			$day3[2]="-";
		}

		if($day4[0] =="")
		{
			$day4[0]="-";
			$day4[1]="-";
			$day4[2]="-";
		}

		if($day5[0] =="")
		{
			$day5[0]="-";
			$day5[1]="-";
			$day5[2]="-";
		}

		$var1 = array();
		$var2 = array();
		$var3 = array();
		$var4 = array();
		$var5 = array();

		//var_dump($_POST['Day1']);
		foreach($day1 as $key => $value)
		{
			if($value != "")
			{	$var1[] = $value; 
			}
		}

		//var_dump($var1);
		foreach($day2 as $key => $value)
		{
			if($day2[$key] != "")
				$var2[$key] = $value; 
		}

		foreach($day3 as $key => $value)
		{
			if($value != "")
			{	$var3[] = $value; 
			}
		}

		foreach($day4 as $key => $value)
		{
			if($value != "")
			{	$var4[] = $value; 
			}
		}

		foreach($day5 as $key => $value)
		{
			if($value != "")
			{	$var5[] = $value; 
			}
		}

		$var1 = implode(",", $var1);
		$var2 = implode(",", $var2);
		$var3 = implode(",", $var3);
		$var4 = implode(",", $var4);
		$var5 = implode(",", $var5);

//		var_dump($var1);
//		var_dump($var2);
		
		if($faculty_name=='' or $designation=='' or $location =='' or $semester==''or $year=='')
		{
			echo "<script>alert('Please enter all the fields')</script>";
			exit();
		}

		else
		{
//			echo "Entering data in db<br/>";
			$insert_query = "INSERT INTO `u2` (Name, Title, Location, Semester,Year, Mon, Tue, Wed, Thu, Fri) 
			VALUES ('$faculty_name','$designation','$location', '$semester','$year', '$var1','$var2' , '$var3', '$var4', '$var5' )";

			
			if($ret == FALSE)
			 	{ 
			 		echo "mysql_connect mysql_select_dberror<br/>";
			 	}

			if(mysql_query($insert_query) == TRUE)
			{
				echo "Your Office Hours have been Set";
			
			echo "<script>window.open('u2_Main_Login.php','_self')</script>";
		
			}
			else{
				echo "Insert Query Failed<br/>";
				echo $insert_query . "<br/>";
			}
		}
		
		
	}

?>
			
																																												</html>