<!Doctype html>

<head>
	<title>Update Office Hours</title>
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

	$post_id = "";

	if(isset($_GET['edit'])){

		$edit_id = $_GET['edit'];
		$edit_query = "select * from u2 where Id= '$edit_id'";
		$run_edit = mysql_query($edit_query) or die($edit_query."<br/><br/>".mysql_error());

		while ($row = mysql_fetch_array($run_edit)) {
			
			$post_name 		= $row['Name'];
			$post_title 	= $row['Title'];
			$post_location 	= $row['Location'];
			$post_semester 	= $row['Semester'];
			$post_year 	    = $row['Year'];	
			$dow1			= explode(",", $row['Mon']);
			$dow2			= explode(",", $row['Tue']);
			$dow3			= explode(",", $row['Wed']);
			$dow4			= explode(",", $row['Thu']);
			$dow5			= explode(",", $row['Fri']);

			// var_dump($dow1);
		//	 var_dump($post_semester);
	}
}

?>

<form method="post" action="u2_up.php?edit_form=<?php echo $edit_id; ?>"enctype="multipart/form-data">


		<table name="dataTable" id="t1" width="800" align="center" border="10">
			<tr>
				<td align="center" bgcolor="Green">
					<h1>Update the Data Here</h1>
				</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $post_name; ?>"></td>
			</tr>

			<tr>
				<td>Title</td>
				<td><input type="text" name="designation" value="<?php echo $post_title; ?>"></td>
			</tr>

			<tr>
				<td>Office Location</td>
				<td><input type="text" name="location" value="<?php echo $post_location; ?>"></td>
			</tr>

			<tr>
				<td>Select the days for Office hours</td>
			</tr>

			<tr id = "tr1">
				<td><input id="c1" class="chk1" type="checkbox"  name="Day1[]" value="Monday" <?php echo ($dow1[0]!="-" ? 'checked' : '-');?>>Monday<br></td>
					
			</tr>

			<tr id = "tr2">
				<td><input id="c2" class="chk2" type="checkbox" name="Day2[]" value="Tuesday" <?php echo ($dow2[0]!="-" ? 'checked' : '-');?>>Tuesday<br></td>
			
			</tr>	

			<tr id = "tr3"> 
				<td><input id="c3" class="chk3" type="checkbox" name="Day3[]" value="Wednesday" <?php echo ($dow3[0]!="-" ? 'checked' : '-');?>>Wednesday</td>
			</tr>	

			<tr id = "tr4">
				<td><input id="c4" class="chk4" type="checkbox" name="Day4[]" value="Thursday" <?php echo ($dow4[0]!="-" ? 'checked' : '-');?>>Thursday<br></td>
			</tr>	

			<tr id = "tr5">
				<td><input id="c5" class="chk5" type="checkbox" name="Day5[]" value="Friday" <?php echo ($dow5[0]!="-" ? 'checked' : '-');?>>Friday<br></td>
			</tr>	

			

			<script src="js/add_meets_3.js">   		</script>
	<!--
			<script src="js/get_time.js">   		</script>

	-->
		<tr>
				<td>Select the Semester</td>
				<td>
					<select name="Semester">
					  <option <?php if($post_semester =='Fall') echo 'selected="selected"'; ?> value="Fall">Fall </option>
					  <option <?php if($post_semester =='Spring') echo 'selected="selected"'; ?>value="Spring">Spring </option>
					  <option <?php if($post_semester =='Summer') echo 'selected="selected"'; ?>value="Summer">Summer </option>
					</select>
				</td>
		</tr>	

		<tr>
				<td>Select the Year</td>
				<td><input type="text" name="year" value="<?php echo $post_year; ?>"></td>
		</tr>

		<tr>
				<td align="center" colspan="5"><input type="submit" name="submit" value="Update Info"></td>
		</tr>

		</table>

	</form>

		<script type="text/javascript">

				$(function(){

			      if (document.getElementById('c1').checked)
			           {
			              $('<td>Meeting Start Time</td> <td><input class="start_time" type="text" class="time" name="Day1[]" id="st0" value="<?php echo $dow1[1]; ?>" /></td>').appendTo("#tr1");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day1[]' id='et0' value='<?php echo $dow1[2]; ?>'  /></td>").appendTo("#tr1");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
             });

			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });

		   }

		  });
			

$(function(){
            	if (document.getElementById('c2').checked)
			           {
			              $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day2[]' id='st0' value='<?php echo $dow2[1]; ?>' /></td>").appendTo("#tr2");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day2[]' id='et0' value='<?php echo $dow2[2]; ?>' /></td>").appendTo("#tr2");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                
                     });

			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });
 
			    }
			});

$(function(){
	            	if (document.getElementById('c3').checked)
			           {
			              $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day3[]' id='st0' value='<?php echo $dow3[1]; ?>'></td>").appendTo("#tr3");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day3[]' id='et0' value='<?php echo $dow3[2]; ?>' /></td>").appendTo("#tr3");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                
                     });

			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });

			    }		});

$(function(){
			        if (document.getElementById('c4').checked)
			           {
			              $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day4[]' id='st0' value='<?php echo $dow4[1]; ?>' /></td>").appendTo("#tr4");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day4[]' id='et0' value='<?php echo $dow4[2]; ?>' /></td>").appendTo("#tr4");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                
                     });

			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });

			    }
			});

$(function(){
            	if (document.getElementById('c5').checked)
			           {
			              $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day5[]' id='st0' value='<?php echo $dow5[1]; ?>' /></td>").appendTo("#tr5");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day5[]' id='et0' value='<?php echo $dow5[2]; ?>' /></td>").appendTo("#tr5");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                
                     });

			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });

			    }
			});



		</script>
	</body>

</html>

<?php
	
	if(isset($_POST['submit']))
	{

	  $edit_id	 		= $_GET['edit_form'];
	  $post_name 		= $_POST['name'];
      $post_title1 		= $_POST['designation'];
	  $post_location1 	= $_POST['location'];
	  $post_semester1  	= $_POST['Semester'];
	  $post_year1       = $_POST['year'];
	  $day1 			= $_POST['Day1'];		// Retrieving Monday and its timings
	  $day2 			= $_POST['Day2'];	
	  $day3 			= $_POST['Day3'];	
	  $day4 			= $_POST['Day4'];	
	  $day5 			= $_POST['Day5'];	

      $var1 = array();
	  $var2 = array();
	  $var3 = array();
	  $var4 = array();
	  $var5 = array();

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
//		var_dump($_POST['Days']);
		foreach($day1 as $key => $value)
		{
			//if($day1[$key] != '')
				$var1[$key] = $value; 
			//else
			//	$var1[$key] = ""; 
		}

		foreach($day2 as $key => $value)
		{
			//if($day2[$key] != '')
				$var2[$key] = $value; 
			//else
			//	$var2[$key] = " "; 		
			
		}

		foreach($day3 as $key => $value)
		{
			//if($day3[$key] != '')
				$var3[$key] = $value; 
			//else
			//	$var3[$key] = " ";
		}

		foreach($day4 as $key => $value)
		{
			//if($day4[$key] != '')
				$var4[$key] = $value; 
			//else
			//	$var4[$key] = " ";
		}

		foreach($day5 as $key => $value)
		{
			//if($day5[$key] != '')
				$var5[$key] = $value; 
			//else
		//		$var5[$key] = " ";
		}

//var_dump($var3);
		$var1 = implode(",", $var1);
		$var2 = implode(",", $var2);
		$var3 = implode(",", $var3);
		$var4 = implode(",", $var4);
		$var5 = implode(",", $var5);

		if($post_name=='' or $post_title1=='' or $post_location1 =='' or $post_semester1==''or $post_year1=='')
		{
			echo "<script>alert('Please enter all the fields')</script>";
			exit();
		}

	else {
	
			$update_query = "update u2 set Name='$post_name', Title='$post_title1', Location='$post_location1', Semester='$post_semester1', year='$post_year1', Mon='$var1', Tue='$var2', Wed='$var3', Thu='$var4', Fri='$var5' where Id='$edit_id'";
		
			if(mysql_query($update_query))
			{
			
//			echo "<script>alert('Post has been updated')</script>";
			
			echo "<script>window.open('u2_view_post.php','_self')</script>";
		
			}
	
		}
	}



?>

																																																																																																																		