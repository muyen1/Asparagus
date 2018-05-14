<?php
include "includes/header.php";
include "includes/dbh.inc.php";
$sql = "SELECT * 
				FROM tracked a
				JOIN food b ON a.foodID = b.foodID
				WHERE userID = 1";
$result = $conn->query($sql);
?>

<div class="buttongen">
    <span>Currently Tracked</span>
    
    <?php
    while($row = $result->fetch_assoc()){
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }  
    ?>
    
</div>

<?php
include "includes/footer.php";
?>

