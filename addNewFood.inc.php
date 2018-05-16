<?php
include 'includes/pdo_connect.php';
include 'includes/dbh.inc.php';

session_start();

$data = array("status" => "fail");


//$_SESSION['uid'] = 2;

if(isset($_POST['add']) && isset($_SESSION['userid'])){

        //CONSTANTS convention to prevent php from complaining
        $fn = 'foodname';
        $u = 'unit';
        

        
        
            //$foodname = ucwords(strtolower(mysqli_real_escape_string($conn, $_POST['foodname'])));
            //$unit = ucwords(strtolower((mysqli_real_escape_string($conn, $_POST['unit']))));
            
                    //$query = "select foodname, unit from food where foodname = $foodname";
        
        // $result = mysqli_query($conn, $query);
        // if(mysqli_num_rows($results) > 0 ) {
        //     echo "sorry food already exsists";
        // }
        
        
        //formats the input. Every word first letter is upper cased. Eg. Dragon Fruit
        
        //units always lower caps

        $foodname = ucwords(strtolower($_POST['foodname']));
        $unit = strtolower($_POST['unit']);




        
        //layer of query meant to check for duplicates

        $query = 'select foodname, unit from food';
        $params = array();
        $selectAllResults = dataQuery($query, $params);


        //data array stoing the status and the current food list
        $data = array('status' => 'checking for duplicates', 'foodlist' => $selectAllResults);

        //if duplicate is found, changes the status to 'duplicate'
        foreach($data['foodlist'] as $key => $value){

            if($value[$fn] == $foodname && $value[$u] == $unit){
                $data['status'] = 'duplicate';
                break;
            }


        }

        //bases the decision of the status message
        if($data['status'] == 'duplicate'){
            
            echo $data['status'];
            
            $Message = urlencode('found duplicate item in the food database');
        	header("location:tracker.php?Message=".$Message);
        	
        	
            

        } else {
 
            $data['status'] = 'inserted into the food db';

                    
            $query = 'insert into food (foodname, unit) VALUES (?,?)';
            
            $params = array($foodname, $unit);
            
            $results = dataQuery($query, $params);
            
            echo $data['status'];
            
            
            $Message = urlencode('found duplicate item in the food database');
         	header("location:error/error-page1.php?Message=".$Message);

            //needs redirection here

        }


    
} else {
    
    echo 'no ssession user available please log in';
    
    $Message = urlencode('no session user available, please log in test');
	header("location:error/index.php?Message=".$Message);

}


?>