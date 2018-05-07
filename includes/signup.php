<?php
include 'pdo_connect.php';


if(!empty($_POST)){
    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    //password_hash
    //$upassword = password_hash($_POST['upassword'], PASSWORD_DEFAULT);
    $pwd = $_POST['pwd'];

    $query = 'INSERT INTO user (firstname, lastname, email, uid , pwd) VALUES (?,?,?,?,?)';
    
    $params = array($first, $last, $email, $uid, $pwd);

    $results = dataQuery($query, $params);
    
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    
}

?>