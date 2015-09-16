<!-- Page opened after Admin Log in Page to Set, update or Cancel Office Hours -->

<?php

  session_start();            // Checking if authorized person is logged in the page or not
  
  if(!isset($_SESSION['user_name']))
  {
    header("location: ../u2/admin1.php");
  }
  
  else
  {
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Updating Office Hours !!</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--My custom CSS -->

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </head> 
  <body>
      <nav id="myNavbar" class=" navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container  ">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                 
                  <h1 class="pull-left">BGSU Computer Science</h1>   

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
                      <li><a href="logout.php"> Admin Logout</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <div class="container">
          <div class="jumbotron">
          	  <h1>WELCOME !</h1>
              <h2>Please select an Option to Modify your Office Hours</h2>
              
          </div>
          <div class="row">
              <div class="col-md-6">
                  <h2><a href="u1_set.php"> Set Office Hours  </a> </h2>
                  <p>Select the link if you want to SET your office hours</p>
                    
              </div>
             

           <!--   <div class="col-md-4 ">
                  <h2><a href="#">Cancel Office Hours </a></h2>
                  <p>Select the link if you want to CANCEL your office hours</p>
               
              </div>
-->
             <div class="col-md-6">
                  <h2><a href="u1_view_post.php">View, Update and Cancel Office Hours </a></h2>
                  <p>Select the link if you want to View the office hours</p>
               
              </div>

             
             
          </div>
          <hr>
          <div class="row">
              <div class="col-sm-12">
                  <footer>
                      <p>&copy; BGSU Computer Science</p>
                  </footer>
              </div>
          </div>
      </div>
  </body>
</html>

<?php } 	
