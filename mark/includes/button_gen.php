<?php
session_start();
$sql = "SELECT * 
				FROM tracked a
				JOIN food b ON a.foodID = b.foodID
				WHERE userid = $_SESSION[userid]";
$result = $conn->query($sql);
?>

<div class="buttongen">
    <span>Currently Tracked</span>
    
    <?php
    while($row = $result->fetch_assoc()){ 
        
        
        echo "<button id='test' name='$row[foodname]' value='$row[foodid]' class='trackedbtn$row[userid]'><span>$row[foodname]<br/>$row[safeamount] $row[unit]</span></button><br/>";
        
        
        
    }  
    ?>
    
</div>
