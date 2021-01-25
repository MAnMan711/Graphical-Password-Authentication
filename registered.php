<?php
session_start();
ob_start();
?>

<html>
<head>
<title>Successful!</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->   
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="css/style-footer.css">
<link href="css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
</head>

<?php

include('db.php');

$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];
	
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$email=$_SESSION['a'][3];
$phone=$_SESSION['a'][4];
$image1=$_SESSION['a'][5];
$slice1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$slice2=$_SESSION['a'][8];
$image3=$_SESSION['a'][9];
$slice3=$_SESSION['a'][10];

$query="INSERT into user(username,password,name,email,phone,image1,slice1,image2,slice2,image3,slice3,userimage) 
values('$name','$password','$realname','$email',$phone,'$image1','$slice1','$image2','$slice2','$image3','$slice3','../user/images/user/default.png')";
$result=mysqli_query($con, $query);

?>

<body>
<!--Main Header-->
<nav class="navbar navbar-default">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<a class="navbar-brand" style="color:#fff">Graphical Password Authentication System</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                          <li class="active">
                                <a href="../index.html">Home</a>
                          </li>
                          <li>
                                <a href="../about.html">About Us</a>
                          </li>

                          <li>
                                <a href="../contact.html">Contact Us</a>
                          </li>                                             
                    </ul>
              </div>
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!--End Main Header -->

<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form ">
					<span class="login100-form-title p-b-43">Create New Account</span>
					<p class="account1">You have succesfully registered .</p>
				<p class="account2">Click <a href="../log_in/login.html">here</a> to login</p>
				</div>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
			</div>
		</div>


<!--footer-main-->
 <footer class="footer-distributed" style="height:300px">
  <div id="page-content">
    <div class="container text-center">
      <div class="footer-center">
          <h2 style="color:#ffff">Sticky Footer using Flexbox</h2>
		  </div>
          <p style="color:#fff">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
    
      </div>
    </div>
  
  <div class="footer-right">
        <div>
          <i class="fa fa-map-marker" style="color:#fff"></i>
          <p style="color:#fff" ><span>21 House# No# Streat No# Mawatha</span> city, Country</p>
        </div>
</div>
      <div class="footer-icons pull-right">
                                      
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://github.com/" target="_blank"><i class="fa fa-github"></i></a>
                                      
                  </div>
				  </div>
</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>


<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>