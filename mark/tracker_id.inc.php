<?php
include 'includes/pdo_connect.php';

//user id required for personal data.
$_SESSION['userid'] = 1;


if(!isset($_SESSION['userid'])){
    echo "<script>console.log('no session user available, please log in')</script>";
    echo "</br>";
    echo "no session ID";
} else {
    
    $userid = $_SESSION['userid'];
  
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