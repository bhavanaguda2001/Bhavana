<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign_up</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!--end validation js-->
<script type="text/javascript">
	 //validation Rules
	  $(document).ready(function(){
        $("#Sign_up").validate({
            rules:{
                v_Name:"required",
                v_cont:{
                	required:true,
                	number:true,
                	minlength:10,
                    maxlength:10
               	  },
				v_email:{
                    required:true,
                    email:true
                },
                v_pass:"*",
                v_address:"*",
                v_image:"*",
                v_role:"*"
            },
            //display alert Messages when filed is blank
            messages:{
                v_name:"*",
                v_cont:{
                    required:"*",
                    number:"Please enter Valid Number",
               		minlength:"Contact should Be 10 Digit"
                   	},
                v_email:{
                    required:"*",
                    email:"Enter Valid Email"
                },
                v_pass:"*",    
                v_address:"*",
                v_image:"*",
               	v_role:"*"
                },
                submitHandler:function(form){
                    alert("Data is Correct..!!");
                    form.submit();
                }

        });
    });
</script>

</head>

<body>
	<style>
		#regibtn{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
		}

	#v_address{
		padding: 10px;
    	border-radius: 5px;
    	width: 27.5%;
    	border: 2px solid black;	

	}

	#Sign_up{

			padding: 5px;
			font-size: 15px;
			border-radius: 5px;
	}
	#img{
		padding: 10px;
		width: 27.5%;
		border-radius: 5px;
		border: 2px solid black;
	}
	</style>
	<center>
	<div id="headersection">
	<h1>Online Voting System</h1>
	<hr></br>
	</div>
	<div id="bodysection">
		
	<form action="" id="Sign_up" method="POST" enctype="multipart/form-data">
	<h2>Sign Up</h2>
	<input type="text" name="v_name" id="v_name" required="" placeholder="Name">
	<input type="text" name="v_cont" id="v_cont" required=""  minlength="10" maxlength="10" placeholder="Mobile"></br></br>
	<input type="email" name="v_email" id="v_email" required="" placeholder="Email">
	<input type="password" name="v_pass" id="v_pass" required="" placeholder="Password"></br></br>
	<textarea name="v_address" id="v_address" required="" placeholder="Address"></textarea></br></br>
	<center>	
		<div id="img">
		Upload Image<input type="file" name="v_image" id="v_image" required="">	
		</div>
		</br>
		<div id="roleid">
			Select Role:
		<select id="v_role" name="v_role">
		<option value="1"> Voter</option>
		<option value="2"> Group</option>
		</select>
		</center>
	
		</div>	
		</br></br>
	<button id="regibtn">Sign_up</button></br></br>
	Already User?<a href="login.php">Login here</a>
	</form>
	</div>
</body>
</html>
<?php
include("config.php");
$path="image1/";
$valid_image_formate=array("jpg","png","gif","bmp","JPG");
if ($_SERVER['REQUEST_METHOD']=="POST") {
	// code...
	$time=time();
	$name=$_POST['v_name'];
	$cont=$_POST['v_cont'];
	$email=$_POST['v_email'];
	$address=$_POST['v_address'];
	$pass=md5($_POST['v_pass']);

	//uploading image
	$actual_image=$_FILES['v_image']['name'];
	$origanal_image=$time.$actual_image;
	$size=$_FILES['v_image']['size'];
	$tmp=$_FILES['v_image']['tmp_name'];//check the correct image or not in file
	$extend=explode('.', $actual_image);

	$role=$_POST['v_role'];
	if (in_array($extend['1'], $valid_image_formate)) {
		// code...
		if (move_uploaded_file($tmp, $path.$origanal_image)) {
			// code...
		$query=mysqli_query($connect,"INSERT INTO voting(v_name,v_cont,v_email,v_address,v_pass,v_image,v_role,v_votes,v_status) values('$name','$cont','$email','$address','$pass','$origanal_image','$role',0,0)");
			echo '<script> alert("Sign_up Successfull");
			window.location="login.php"</script>';
		}
		else
		{
				echo '<script> alert("Some Error Occured");
			window.location="regi.php"</script>';
		
		}
	}
	else{
		echo '<script> alert("Invalid Image Formate");
			window.location="regi.php"</script>';
		
	}
}
?>