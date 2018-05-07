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
    

//echo $fname;
    $params = array($first, $last, $email, $uid, $pwd);

    $results = dataQuery($query, $params);
    //print_f($results);
    //echo $json_encode($results);
    // var_export($results);
    
    echo 0 == $results ? 'Thanks for registering' . $fname : 'something went wrong with registering, but for some reason still works?!?!?!';    
    //var_dump($results);
    
}



?>