<?php
include 'pdo_connect.php';

//$_SESSION['uid'] = 1;
if(isset($_POST['add']) && isset($_SESSION['uid'])){
    
    $foodname = $_POST['foodname'];
    $unit = $_POST['unit'];
    
    $query = 'insert into food (foodname, unit) VALUES (?,?)';
    
    $params = array($foodname, $unit);
    
    $results = dataQuery($query, $params);
    
    
    
    header("Location:../tracker.php");
    
    //**need to validate for duplicates
    //also formatting. Capitalizing
    //delete function
    
} else {
    echo "user uid is not set. please log in";
}


?>