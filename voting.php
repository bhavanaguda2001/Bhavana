<?php
session_start();
if(!isset($_SESSION['userdata']))
{
    header('location:login.php');
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];
if ($_SESSION['userdata']['v_status']==0) {
	// code...
	$status='<b style="color:red">Not Voted</b>';
}
else{
$status='<b style="color:green">Voted</b>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Voting</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<style>
		#backbtn{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
			float: left;
			margin: 10px;
		}

		#logoutbtn{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
			float: right;
			margin: 10px;
		}
		#profile{
			background-color: white;
			width: 30%;
			padding: 20px;
			float: left;
		}
		#Group{
			background-color: white;
			width: 60%;
			padding: 20px;
			float: right;
			
		}
		#votebtn{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
		}
		#mainpanel{
			padding: 10px;
		}
		#voted{
		padding: 5px;
			font-size: 15px;
			background-color: green;
			color: white;
			border-radius: 5px;	
		}
	</style>
	<div id="mainsection">
		<div id="headersection">
		<a href="login.php"><button id="backbtn">Back</button></a>
		<a href="logout1.php"><button id="logoutbtn">Logout</button></a>
		<h1>Online Voting System</h1>
	</div>
	<hr>
	
	<div id="mainpanel">
	
	<div id="profile">
	<center><img src="image1/<?php echo $userdata['v_image']?>"height="100" width="100"></br></br></center>
	<b>Name:</b><?php echo $userdata['v_name']?></br></br>
	<b>Email:</b><?php echo $userdata['v_email']?></br></br>
	<b>Contact:</b><?php echo $userdata['v_cont']?></br></br>
	<b>Address:</b><?php echo $userdata['v_address']?></br></br>
	<b>Status:</b><?php echo $status?></br></br>
	
	</div>

				<div id="Group">
				<?php
				if($_SESSION['groupsdata']){
				for ($i=0; $i < count($groupsdata) ; $i++) { 
				// code...
				?>
				<div>

				<img style="float: right;" src="image1/<?php echo $groupsdata[$i]['v_image']?>" height="100" width="100">
				<b >Group Name:</b> <?php echo $groupsdata[$i] ['v_name']?></br></br>
				</br></br>
				<form action="voting1.php" method="POST" >
					<input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['v_votes']?>">
					<input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['v_id']?>">
					<?php
					if($_SESSION['userdata']['v_status']==0){
						?>
					<input type="submit" name="votebtn" value="Vote" id="votebtn">
						<?php
					}
					else{
						?>
						<button disabled  type="button" name="votebtn" value="Vote" id="voted">Voted</button>
						<?php
					}
					?>
				</form>
				</div>
				<hr>
				<?php
			}
		}
		else{

		}
	?>
	</div>
	</div>

</div>
</body>
</html>
