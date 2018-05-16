<?php
include 'includes/pdo_connect.php';
include 'includes/dbh.inc.php';

session_start();

$data = array("status" => "fail");


//$_SESSION['uid'] = 2;

if(isset($_POST['add']) && isset($_SESSION['userid'])){

        //CONSTANTS
        $fn = 'foodname';
        $u = 'unit';
        

        //formats the input. Every word first letter is upper cased. Eg. Dragon Fruit
            //$foodname = ucwords(strtolower(mysqli_real_escape_string($conn, $_POST['foodname'])));
            //$unit = ucwords(strtolower((mysqli_real_escape_string($conn, $_POST['unit']))));

        $foodname = ucwords(strtolower($_POST['foodname']));
        $unit = ucwords(strtolower($_POST['unit']));


        //$query = "select foodname, unit from food where foodname = $foodname";
        
        // $result = mysqli_query($conn, $query);
        // if(mysqli_num_rows($results) > 0 ) {
        //     echo "sorry food already exsists";
        // }

        
        //layer of query meant to check for duplicates

        $query = 'select foodname, unit from food';
        $params = array();
        $selectAllResults = dataQuery($query, $params);


        //data array stoing the status and the current food list
        $data = array('status' => 'validating', 'foodlist' => $selectAllResults);

        //if duplicate is found, changes the status to 'duplicate'
        foreach($data['foodlist'] as $key => $value){

            if($value[$fn] == $foodname && $value[$u] == $unit){
                $data['status'] = 'duplicate';
                break;
            }


        }

        //bases the decision of the status message
        if($data['status'] == 'duplicate'){

            $Message = urlencode('found duplicate item in the food database');
        	header("location:error/error-page1.php?Message=".$Message);

        } else {
 
            $data['status'] = 'inserted into the food db';

                    
            $query = 'insert into food (foodname, unit) VALUES (?,?)';
            
            $params = array($foodname, $unit);
            
            $results = dataQuery($query, $params);
            
            echo $data['status'];

            //needs redirection here

        }


    
} else {
    
    echo "check";
    
    $Message = urlencode('no session user available, please log in test');
	header("location:error/error-page1.php?Message=".$Message);

}


?>