<?php
//have not yet implemented for duplications, when duplicated should update into running average instead of insert
//force capitalization first letter
//find a way to notify users
session_start();
include 'includes/pdo_connect.php';
//$_SESSION['userid'] = 2;



$data = array("status" => "fail");

if(!isset($_SESSION['userid'])){
    
    $Message = urlencode('no session user available, please log in');
	header("location:tracker.php?Message=".$Message);

    
    
}else {

    //labeling constants to prevent php complaints
    $ID ="foodID";
    $U = "unit";
    $userID = $_SESSION['userid'];



//this is where the search/dropdown item is selected
$foodname = $_POST['searchedFood'];
$unit = $_POST['unit'];


//extra mysql statement to find and store variables. mainly the food ID and units based off the food name. ------------ (find better way to get)
        $query = "select foodID, unit from food where foodname = '$foodname' and unit = '$unit'";
        $params = array();
        $foodData =  dataQuery($query, $params);

//storing  foodname(above) , foodID, unit and quantity. preparing for insert
$food_id = $foodData[0][$ID];

//echo json_encode($foodData);

$timestamp = 123;
//$timestamp = date("Y-m-d h:i:sa", time());
//**need timestamp formatting





//checking for duplicates



 $query = "select foodID from tracked where userID = $userID AND foodID = $food_id";
 $params = array();
 $results = dataQuery($query, $params);
 
 if(sizeof($results)>0){
     
     $Message = urlencode("$foodname is already being tracked!");
	header("location:tracker.php?Message=".$Message);
	
 } else {
        $query = 'INSERT INTO tracked (foodID, userID, totalBought, totalwasted, consumption, roc, safeamount, time1, time2)
                                    VALUES (?, ?,?, ?, ? ,? ,? ,? ,? )';
                
        $params = array($food_id, $userID, 0, 0, 0, 0, 0, $timestamp, 0 );
                
        $results = dataQuery($query, $params);
                    
        
        $Message = urlencode('Success! starting to track');
	    header("location:tracker.php?Message=".$Message);
        //success message ask ross
        //
        //
        //

}

}


//**use array("status" => "fail") to validate???




//include 'footer.php';
?>