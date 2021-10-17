<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<style>
	#loginbtn{

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
	
	<div id="headersection">
	<h1>Online Voting System</h1>
	</div>
	<hr></br>

	<div id="bodysection">
	<form action="logininsert.php" id="login" method="POST">
		<h2>Login</h2>
	<input type="email" name="v_email" id="v_email" required="" placeholder="Enter Email"></br></br>
	<input type="password" name="v_pass" id="v_pass" required="" placeholder="Enter Password"></br></br>
	<select name="v_role" id="v_role">
		<option value="" selected="">None</option>
		<option value="1"> Voter</option>
		<option value="2"> Group</option>
	</select></br></br>
	<button id="loginbtn" name="login" > Login</button></br></br>
	New User?<a href="Regi.php">Register here</a>
	</form>
	</div>
</body>
</html>