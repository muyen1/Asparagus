<?php

session_start();

//require_once('pdo_connect.php');
include 'pdo_connect.php';


//if(isset($_POST['submit'])){
    
if(!empty($_POST)){
    
    $query = 'SELECT pwd FROM user WHERE uid = ?';
    $params = array($_POST['username']);
    
    $results = dataQuery($query, $params);
    
    //whats dataQuery? boolean or an array now...
    echo $results[0]['pwd'] . "test";
    $hash = $results[0]['pwd'];
    
    
    if((password_verify($_POST['username'], $hash))==1){
        
        $_SESSION['loggedin-user'] = $_POST['username'];
        
        header('Location: stats.php');
    
    }else {
        echo "unable to login, try again";
        
        var_dump($results);
        
        
   
    }
    
  
    
}

?>