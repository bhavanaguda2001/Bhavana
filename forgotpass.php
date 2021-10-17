<?php
include("config1.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $email=$_POST['a_email'];
    $pass=md5($_POST['a_pass']);
    $query=mysqli_query($connect,"UPDATE Online_voting.admin SET a_pass='$pass' WHERE admin.a_email='$email' ");
     if($query==true){
         echo "password  Updated";
         header('location:adminlogin.php');
     }
     else{
         echo "not".mysqli_error();
     }
}


?>

<!DOCTYPE html>
<head>
<title>Admin Login</title>
<style type="text/css">
    
    #a_pass{

    width: 20%;
    padding: 15px 0px 15px 15px;
    border: 1px solid #fff;
    outline: none;
    font-size: 14px;
    color: #fff;
    margin: 14px 0px;
    background: none;
    }
    #a_email{

    width: 20%;
    padding: 15px 0px 15px 15px;
    border: 1px solid #fff;
    outline: none;
    font-size: 14px;
    color: #fff;
    margin: 14px 0px;
    background: none;
        
    }
     #submit{

            padding: 5px;
            font-size: 15px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            }
            #bodysection{
                padding: 10px;
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
        <form action="#" method="post">
            <h2>Forgot_password</h2>
             <hr>
             <p>Enter Your Detailas below</p>
            <input type="text" name="a_email" id="a_email" value="" placeholder="Enter Username" required=""><br>
            <input type="password" name="a_pass" id="a_pass" value="" placeholder="update Password"
            required=""></br></br>
            <button type="submit" id="submit">Submit</button>
            </br>Home<a href="adminlogin.php">Back</a>
            
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