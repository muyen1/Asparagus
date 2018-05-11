<?php

session_start();

if(isset($_POST['submit'])){
    
	include 'dbh.inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uidORpwd']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	
	$sql = "SELECT * FROM user WHERE uid = '$uid' OR email = '$uid'";
	
	$result = mysqli_query($conn, $sql);
	
	$resultCheck = mysqli_num_rows($result);
	
	if ($row = mysqli_fetch_assoc($result)){
		
		$hashpwdCheck = password_verify($pwd, $row['pwd']);
		
		if ($hashpwdCheck == false) {
			$Message = urlencode('Sorry, wrong password.');
			header("location:../index.php?Message=".$Message);
		}
		if ($hashpwdCheck == true) {
			$_SESSION['uid'] = $row['uid'];
			$Message = urlencode('Welcome back to Asparagus!');
			header("location:../tracker.php?Message=".$Message);
		}
		else {
			header("location:../error-page3.php");
		}
	}
	else {
		$Message = urlencode('Sorry, username or email not found');
		header("location:../index.php?Message=".$Message);
	}
}
else {
		header("location:../error-page3.php");
}
?>
