<?php
include("config.php");
session_start();
$email=$_POST['v_email'];
$pass=md5($_POST['v_pass']);
$role=$_POST['v_role'];

$query=mysqli_query($connect,"SELECT * FROM voting WHERE v_email='$email' and v_pass='$pass' and v_role='$role' ");

    if(mysqli_num_rows($query)==1)
    {
        $userdata=mysqli_fetch_array($query);
        $group=mysqli_query($connect,"SELECT * FROM voting WHERE v_role=2");
        $groupsdata=mysqli_fetch_all($group,MYSQLI_ASSOC);

        $_SESSION['userdata']=$userdata;
        $_SESSION['groupsdata']=$groupsdata;
        header('location:voting.php');
    }

else
{
    echo '<script> alert("Invalid Credentials or User Not Found");
    window.location="login.php";</script>';

}

?>

