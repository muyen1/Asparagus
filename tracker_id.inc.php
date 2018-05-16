<?php
include 'includes/pdo_connect.php';

//user id required for personal data.
<<<<<<< HEAD
//$_SESSION['uid'] = 1;


if(!isset($_SESSION['uid'])){
=======
$_SESSION['userid'] = 1;


if(!isset($_SESSION['userid'])){
>>>>>>> 11a9c62b351b6a5547759eb5495b9c5154b831a7
    echo "<script>console.log('no session user available, please log in')</script>";
    echo "</br>";
    echo "no session ID";
} else {
    
<<<<<<< HEAD
    $userid = $_SESSION['uid'];
=======
    $userid = $_SESSION['userid'];
>>>>>>> 11a9c62b351b6a5547759eb5495b9c5154b831a7
  
    //$query = "select foodID, totalbought, totalwasted, consumption, roc, safeamount, time1, time2 from tracked where userID = '$userid'";

    //need column names "foodID" from either tracked or food to be different to use the "JOIN" statement
    //orrr could use the AS keyword
    
    //$query = "select * from tracked join food_test on foodID = food_id where userID = $userid";

    $query = "select f.foodname, f.unit, t.* from food f join tracked t on f.foodid = t.foodid where userID = '$userid'";
    $params = array();
    $results = dataQuery($query, $params);

    $data = array("status" =>"success", "tracked" => $results);


    $json = json_encode($data);

    echo $json;


}

?>