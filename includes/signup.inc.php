<?php

include 'dbh.inc.php';

if(isset($_POST['submit'])){
	if (mysqli_real_escape_string($conn, $_POST['password']) == mysqli_real_escape_string($conn, $_POST['REpassword'])) {
		
    	$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['username']);
    	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
		
		$sql_u = "SELECT * FROM user WHERE uid = '$uid'";
		$sql_e = "SELECT * FROM user WHERE email = '$email'";
		$res_u = mysqli_query($conn, $sql_u);
		$res_e = mysqli_query($conn, $sql_e);
		
		if ((mysqli_num_rows($res_u)) > 0) {
			$Message = urlencode('Sorry, username already taken!  Please try again.');
			header("location:../signup.php?Message=".$Message);	
		}
		if ((mysqli_num_rows($res_e)) > 0) {
			$Message = urlencode('Sorry, that email already used!  Please try again.');
			header("location:../signup.php?Message=".$Message);
		}
		
		$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
		
		//if (!preg_match("/^[a-zA-Z]*$", $uid)) {
			//$Message = urlencode('Username must be uppercase or lowercase letters, or the characters /, ^, *, or $');
			//header("location:../signup.php");
		//}
		//if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	
		$sql = "INSERT INTO user (uid, pwd, email)" . " VALUES('$uid', '$hashpwd', '$email')";

		$res = mysqli_query($conn,$sql);
	}
	else {
		$Message = urlencode('Passwords do not match.  Try again!');
		header("location:../signup.php?Message=".$Message);
	}
	
}
else {
		header("location:../error-page1.php");
	}

?>