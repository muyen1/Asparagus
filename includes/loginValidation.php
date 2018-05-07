<?php
include 'pdo_connect.php';

if(!empty($_POST)){
    
    $query = "SELECT 'pwd' FROM 'user' WHERE 'uid' = ?";
    $params = array($_POST['username']);
    //$params = array($_GET['username']);
    $results = dataQuery($query, $params);
    
 
    $hash = $results[0]['password'];
    
    echo password_verify($_POST['upassword'], $hash) ? 'Login success' : 'unable to log in, try agian';

    //header('Location: stats.php');
    
}

?>