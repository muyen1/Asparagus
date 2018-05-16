<?php

include 'dbh.inc.php';

if(isset($_POST['submit'])){
    if (mysqli_real_escape_string($conn, $_POST['password']) == mysqli_real_escape_string($conn, $_POST['REpassword'])) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);

        $sql_e = "SELECT * FROM user WHERE email = '$email'";
        $res_e = mysqli_query($conn, $sql_e);

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

        $sql = "INSERT INTO user (username, pwd, email)" . " VALUES('$username', '$hashpwd', '$email')";

        $res = mysqli_query($conn,$sql);

        $Message = urlencode('Welcome back to Asparagus!');
        header("location:../tracker.php?Message=".$Message);
    }
    else {
        $Message = urlencode('Passwords do not match.  Try again!');
        header("location:../signup.php?Message=".$Message);
    }

}
else {
    header("location:../error/error-page1.php");
}

?>