<?php

	$methodType = $_SERVER['REQUEST_METHOD'];
	$servername = "localhost"; //need to change to our actual server name
	$dblogin = "asparagu_jt";<?php

	$methodType = $_SERVER['REQUEST_METHOD'];
	$servername = "localhost"; //need to change to our actual server name
	$dblogin = "asparagu_jt";
	$password = "team8gumby";
	$dbname= "asparagu_main";
	$data = array("status" => "fail", "msg" => "On $methodType"); //how does this need to change

	if ($methodType === 'GET') {
		if(isset($_GET['output'])) {
			$output = $_GET['output'];
			
			try{
				$conn = new PDO("mysql:host = $servername; dbname = $dbname", $dblogin, $password);
				
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$sqlUser = "SELECT tracked.foodID FROM tracked WHERE tracked.userID = " . 1;//this.userID;
				
				$statementUser = $conn->prepare($sqlUser);
				$statementUser->execute();
				
				$data = array("status" => "success","tracked" => $statementCustomer->fetchAll(PDO::FETCH_ASSOC));
									
			//} catch(PDOException $e) {
			//	$data = array("error", $e->getMessage()); //what is this
			//}
			
			foreach($data['tracked'] as $key => $foodID) {
				echo "<button class='foodbutton' type='button' onclick='databaseUpdate()'>" . $foodID['foodname'] . "<br>" . $foodID['safeamount'] . "</button>";
			}
		}
	}


    print $sqlUser;
	$password = "team8gumby";
	$dbname= "asparagu_main";
	$data = array("status" => "fail", "msg" => "On $methodType"); //how does this need to change

	if ($methodType === 'GET') {
		if(isset($_GET['output'])) {
			$output = $_GET['output'];
			
			try{
				$conn = new PDO("mysql:host = $servername; dbname = $dbname", $dblogin, $password);
				
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$sqlUser = "SELECT Tracked.FoodID FROM Tracked WHILE Tracked.UserID = this.UserID";
				
				$statementUser = $conn->prepare($sqlUser);
				$statementCustomer->execute();
				
				$data = array("status" => "success","Tracked" => $statementCustomer->fetchAll(PDO::FETCH_ASSOC));
									
			} catch(PDOException $e) {
				$data = arrray("error", $e->getMessage()); //what is this
			}
			
			foreach($data['FoodID'] as $key => $user) {
				echo "<button type="button" onclick="databaseUpdate()">"$user['foodname']"<br>"$user['consumption']"</button>";
			}
		}
	}
?>

echo "<script>
	function databaseUpdate() {
		var bought = prompt("Input new purchase amount", 0);
		var wasted = prompt("Input new wasted amount", 0);
		if (bought!=null) {
			<-- databaseUpdate fn() -->
			echo "Record updated successfully";
		}
		if (wasted!=null) {
			<-- databaseUpdate fn() -->
			echo "Record updated successfully"
		}
	}
</script>";