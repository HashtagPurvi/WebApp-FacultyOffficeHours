<!DOCTYPE HTML> 
<html>
<head>
   <title>Admin Login</title>
</head>
<body> 

<h2>Please Enter your Username and Password for Authentication</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>
   Password: <input type="password" name="pass">
   <br><br>
   <input type="submit" name="Submit" value="Submit"> 
</form>


</body>
</html>

<?php

session_start();

echo $pass;
echo "<br>";

include("connect.php");

if(isset($_POST['Submit']))
   {
      $user_name = $_POST['name'];
      $user_pass = $_POST['pass'];

	
      $admin_query = "select * from a1 where user_name = '$user_name' AND user_pass = '$user_pass' ";

     $run = mysql_query($admin_query);

     if(mysql_num_rows($run) > 0)
      {
       echo $user_name;
         $_SESSION['user_name'] = $user_name;

         header('Location: u2_Main_Login.php');
       }
   }
?>


