<?php
session_start();
$sql = "SELECT * 
				FROM tracked a
				JOIN food b ON a.foodID = b.foodID
				WHERE userid = $_SESSION[userid]";
$result = $conn->query($sql);
?>

<div class="buttongen">
    <div>Currently Tracked</div>
    <div>
        		<script>
			function updateFunction(){
				<?php
				$Message = urlencode($row[foodid]);
				header("location:../signup.php?Message=".$Message);
				?>
			}
		</script>

    <?php
    while($row = $result->fetch_assoc()){ 
        echo "<button onclick='updateFunction()' class='trackedbtn$row[userid]'><span>$row[foodname]<br/>$row[safeamount] $row[unit]</span></button><br/>";
    }  
    ?>
        		<script>
			function updateFunction(){
				<?php
				$Message = urlencode($row[foodid]);
				header("location:../signup.php?Message=".$Message);
				?>
			}
		</script>
	</div>
    
</div>
