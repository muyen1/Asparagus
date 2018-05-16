<?php
session_start();
$sql = "SELECT * 
				FROM tracked a
				JOIN food b ON a.foodID = b.foodID
				WHERE userID = $_SESSION[userid]";
$result = $conn->query($sql);
?>

<div class="buttongen">
    <span>Currently Tracked</span>
    
    <?php
    while($row = $result->fetch_assoc()){ 
        echo "<button><span>$row[foodname]</span></button>";
    }  
    ?>
    
</div>
