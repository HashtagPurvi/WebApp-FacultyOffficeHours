<!-- Page to view Office Hours and option to update and delete them -->

<Doctype html !>

<html>

	<head>
		<title>View Office Hours</title>
		<script type="text/javascript" src="js/delete_times.js"></script>
	</head>

	<body>
		<h2><a href="u2_Main_Login.php">Back to Admin Home Page</a></h2>
		<table width="1000" border="2" align="center">
			<tr>
				<td colspan="12" align="center" bgcolor="orange"><h1>View All Office Hours</h1</td>
			</tr>
			<tr bgcolor="lightbrown">
				<th>ID</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Office Location</th>
				<th>Semester</th>
				<th>Year</th>
				<th>Office Hours Days and Timings</th>
				<th>Delete Office Hours</th>
			</tr>

	<?php
			include ("connect.php");

			$query = "select * from u2";
			$run   = mysql_query($query);

			while ($row = mysql_fetch_array($run)) {

				$post_id	   = $row['id'];
				$post_name     = $row['Name'];
				$post_title    = $row['Title'];
				$post_location = $row['Location'];
				$post_semester = $row['Semester'];
				$post_year 	   = $row['Year'];	
				$dow1      	   = $row['Mon'];
				$dow2          = $row['Tue'];
				$dow3          = $row['Wed'];
				$dow4          = $row['Thu'];
				$dow5          = $row['Fri'];
			 
	?>
				<td><?php echo $post_id; ?></td>
				<td><?php echo $post_name; ?></td>
				<td><?php echo $post_title; ?></td>
				<td><?php echo $post_location; ?></td>
				<td><?php echo $post_semester; ?></td>
				<td><?php echo $post_year; ?></td>
				
				<td colspan="4" align="center" bgcolor="#ffa500"><a href="u2_up.php?edit=<?php echo $post_id; ?>"><strong>Add or Edit Officce Hours</strong></a></td>


				<tr>
					<td><?php echo $post_id; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $dow1; ?></td>
					<!-- <td><a href="del_faculty.php?del=<?php echo $post_id; ?>">Delete</a></td> -->
					<td>
						<form name="delete_Mon" action="del_faculty.php" method="post">
							<INPUT TYPE="submit" CLASS="Button" onClick="delRow()" VALUE="Delete Row">
							<INPUT TYPE="hidden" name="delete_Mon" value="mon=<?php echo $dow1; ?>">
						</form>
					</td>
				<!--
					<td><a href="up.php?edit=<?php echo $post_id; ?>">Edit</a></td>
				-->
				</tr>
				
				<tr>
					<td><?php echo $post_id; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $dow2; ?></td>
					<td>
						<form name="delete_Tue" action="del_tue.php" method="post">
							<INPUT TYPE="submit" CLASS="Button" onClick="delRow()" VALUE="Delete Row">
							<INPUT TYPE="hidden" name="delete_Tue" value="tue=<?php echo $dow2; ?>">
						</form>
					</td>
				<!--
					<td><a href="up.php?edit=<?php echo $post_id; ?>">Edit</a></td>
				-->
				</tr>

				<tr>
					<td><?php echo $post_id; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $dow3; ?></td>
					<td>
						<form name="delete_Wed" action="del_wed.php" method="post">
							<INPUT TYPE="submit" CLASS="Button" onClick="delRow()" VALUE="Delete Row">
							<INPUT TYPE="hidden" name="delete_Tue" value="wed=<?php echo $dow3; ?>">
						</form>
					</td>
				<!--<td><a href="#">Delete</a></td>
					<td><a href="up.php?edit=<?php echo $post_id; ?>">Edit</a></td>
				-->
				</tr>

				<tr>
					<td><?php echo $post_id; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $dow4; ?></td>
					<td>
						<form name="delete_Thu" action="del_thu.php" method="post">
							<INPUT TYPE="submit" CLASS="Button" onClick="delRow()" VALUE="Delete Row">
							<INPUT TYPE="hidden" name="delete_Thu" value="thu=<?php echo $dow4; ?>">
						</form>
					</td>
				<!--
					<td><a href="#">Delete</a></td>
					<td><a href="up.php?edit=<?php echo $post_id; ?>">Edit</a></td>
				-->
				</tr>

				<tr>
					<td><?php echo $post_id; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $dow5; ?></td>
					<td>
						<form name="delete_Fri" action="del_fri.php" method="post">
							<INPUT TYPE="submit" CLASS="Button" onClick="delRow()" VALUE="Delete Row">
							<INPUT TYPE="hidden" name="delete_Fri" value="fri=<?php echo $dow5; ?>">
						</form>
					</td>
				<!--
					<td><a href="#">Delete</a></td>
					<td><a href="up.php?edit=<?php echo $post_id; ?>">Edit</a></td>
				-->
				</tr>
				
				<tr></tr>
				<tr></tr>
				<tr></tr>
			</tr>

		<?php } ?>

		</table>
	</body>

</html>

