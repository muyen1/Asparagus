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
<<<<<<< HEAD

        echo $json;
=======
        
        echo $json;


        
        
>>>>>>> 11a9c62b351b6a5547759eb5495b9c5154b831a7
    //}


?>