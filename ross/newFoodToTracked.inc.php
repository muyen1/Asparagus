<?php
//have not yet implemented for duplications, when duplicated should update into running average instead of insert
//force capitalization first letter
//find a way to notify users
session_start();
include 'includes/pdo_connect.php';
//$_SESSION['userid'] = 2;



$data = array("status" => "fail");

if(!isset($_SESSION['userid'])){
    
    echo "<script>console.log('no session user available, please log in')</script>";
    echo "no session user available, please log in";
    echo "</br>";

    //include 'error-page1.php';
    echo "<a href=\"index.php\">";
    echo "<button>Log in</button>";
    echo "</a>";

    
    
}else {

    //labeling constants to prevent php complaints
    $ID ="foodID";
    $U = "unit";
    $userID = $_SESSION['userid'];



//this is where the search/dropdown item is selected
$foodname = $_POST['searchedFood'];


//extra mysql statement to find and store variables. mainly the food ID and units based off the food name. ------------ (find better way to get)
        $query = "select foodID, unit from food where foodname = '$foodname'";
        $params = array();
        $foodData =  dataQuery($query, $params);

//storing  foodname(above) , foodID, unit and quantity. preparing for insert
$food_id = $foodData[0][$ID];

$unit = $_POST['unit'];

$timestamp = 123;
//$timestamp = date("Y-m-d h:i:sa", time());
//**need timestamp formatting





//checking for duplicates

//better way is to use 'select * from tracked where foodID = $foodID

// $query = "select foodID from tracked where userID = $userID";
// $params = array();
// $results = dataQuery($query, $params);

// foreach($results as $key => $value){
//     if($food_id == $value[$ID]){
//         $data['status'] = 'duplicate';
//         break;
//     }

    
// }



// if($data['status'] == 'duplicate'){




//     include 'header.php';
//     echo 'found duplicate item in the tracker, please go to tracker and update there';

//     echo "<a href=\"tracker.php\">";
//     echo "<button>Go to tracker</button>";
//     echo "</a>";
//     include 'footer.php';


// } else {

    $query = 'INSERT INTO tracked (foodID, userID, totalBought, totalwasted, consumption, roc, safeamount, time1, time2)
                            VALUES (?, ?,?, ?, ? ,? ,? ,? ,? )';

    $params = array($food_id, $userID, 0, 0, 0, 0, 0, $timestamp, 0 );

    $results = dataQuery($query, $params);

    header('Location: tracker.php');

//}




//**use array("status" => "fail") to validate???

}


//include 'footer.php';
?>