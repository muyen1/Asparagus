<?php
include 'includes/pdo_connect.php';

    $data = array("status"=> "fail", "foods" => "not yet retrieved from db");

    $query = 'select * from food';

    $params = array();

    $results = dataQuery($query, $params);

//need validation
    //if(results==1){
        $data['status'] = "success";
        
        $data['foods'] = $results;

        $json = json_encode($data);
        
        echo $json;


        
        
    //}


?>