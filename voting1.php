<?php
session_start();
include("config.php");

$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['v_id'];

$update_votes=mysqli_query($connect,"UPDATE voting SET v_votes='$total_votes' WHERE v_id='$gid' ");
$update_user_status=mysqli_query($connect,"UPDATE voting SET v_status=1 WHERE v_id='$uid' ");

if ($update_votes and $update_user_status)
{
	// code...
	$group=mysqli_query($connect,"SELECT * FROM voting WHERE v_role=2");
	$groupsdata=mysqli_fetch_all($group,MYSQLI_ASSOC);
	$_SESSION['userdata']['v_status']=1;
	$_SESSION['groupsdata']=$groupsdata;

	echo '<script> 
	alert("Voting  Successfull!");
    window.location="voting.php";
    </script>';
 
}
else
{
	echo '<script> 
	alert("Some Error is Occured!");
    window.location="voting.php";
    </script>';

}

?>