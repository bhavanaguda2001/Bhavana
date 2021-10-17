
<!DOCTYPE html>
<head>
<title>Admin Login</title>
<style type="text/css">
	
	#a_pass{

    width: 25%;
    padding: 15px 0px 15px 15px;
    border: 1px solid #fff;
    outline: none;
    font-size: 14px;
    color: #fff;
    margin: 14px 0px;
	background: none;
	}
	#a_email{

    width: 25%;
    padding: 15px 0px 15px 15px;
    border: 1px solid #fff;
    outline: none;
    font-size: 14px;
    color: #fff;
    margin: 14px 0px;
	background: none;
		
	}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="katareinfo-main">
	<br><br><br>
	<center>
	<h2>Sign In </h2>
	<hr>
		<form action="#" method="post">
			<input type="email" class="ggg" name="a_email" id="a_email" placeholder="E-MAIL" required=""><br>
			<input type="password" class="ggg" name="a_pass" id="a_pass"  placeholder="PASSWORD" required=""><br>
			<h6><a href="forgotpass.php">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
</center>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

<?php
session_start();
include("config1.php");
if(isset($_SESSION['userdata']))
{
	header("location:view.php");
}
if ($_SERVER['REQUEST_METHOD']=="POST") {
	// code...

	$userdata=$_SESSION['userdata'];
	$groupsdata=$_SESSION['groupsdata'];

	$username=$_POST['a_email'];
	$password=md5($_POST['a_pass']);
	$query="SELECT a_id FROM admin WHERE a_email='$username' and a_pass='$password' ";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        $_SESSION['userdata']=$username;
        header("location:main.php");    
    }

else
{
	echo "invalid Username and Password";
}
}
?>