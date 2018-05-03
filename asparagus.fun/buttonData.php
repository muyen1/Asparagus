<?php

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
				
				$sqlUser = "SELECT Tracked.FoodID FROM Tracked WHILE Tracked.UserID = this.UserID";
				
				$statementUser = $conn->prepare($sqlUser);
				$statementCustomer->execute();
				
				$data = array("status" => "success","Tracked" => $statementCustomer->fetchAll(PDO::FETCH_ASSOC));
									
			} catch(PDOException $e) {
				$data = arrray("error", $e->getMessage()); //what is this
			}
			
			foreach($data['FoodID'] as $key => $user) {
				echo "<button type="button">"$user['foodname']"<br>"$user['consumption']"</button>";
			}
		}
	}

?>