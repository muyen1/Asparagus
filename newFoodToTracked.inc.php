<?php
//have not yet implemented for duplications, when duplicated should add into running average

include 'includes/pdo_connect.php';
//$_SESSION['uid'] = 1;

if(!isset($_SESSION['uid'])){
    echo "<script>console.log('no session user available, please log in')</script>";
    
}else {
    $userID = $_SESSION['uid'];


//labeling constants to prevent php complaints
$ID ="foodID";
$U = "unit";

//this is where the search/dropdown item is selected
$foodname = $_POST['searchedFood'];

//extra mysql statement to find and store variables. mainly the food ID and units based off the food name. ------------ (find better way to get)
        $query = "select foodID, unit from food where foodname = '$foodname'";
        $params = array();
        $foodData =  dataQuery($query, $params);

//storing  foodname(above) , foodID, unit and quantity. preparing for insert
$food_id = $foodData[0][$ID];
$unit = $foodData[0][$U];
$quant = $_POST['quant'];


$timestamp = 123;
//$timestamp = date("Y-m-d h:i:sa", time());
//**need timestamp formatting


//validation ------put somewhere else and find more validations



$query = 'INSERT INTO tracked (foodID, userID, totalBought, totalwasted, consumption, roc, safeamount, time1, time2)
                        VALUES (?, ?,?, ?, ? ,? ,? ,? ,? )';

$params = array($food_id, $userID, $quant, 0, 0, 0, 0, $timestamp, 0 );

$results = dataQuery($query, $params);

header('Location: tracker.php');

//**use array("status" => "fail") to validate???

}

?>