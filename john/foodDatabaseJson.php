<?php
    error_reporting(0);

    include 'pdo_connect.php';
    
    
    // $conn = new mysqli(localhost, root, "", test);

    // if($conn->connect_error){
    //     die("Connection failed: " . $conn->connect_error);
    // }

    $sql="SELECT foodname, unit FROM food";
    // $result =$conn->query($sql);

        $result = query($sql);

    $data = array("item" => $result);

    echo $json = json_encode($data);     

    
  

        // $data = array("food" => $row);

        // echo $data;
       // echo $json;
        


?>
