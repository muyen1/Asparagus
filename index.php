<?php
	include 'header.php';
?>

<?php
if(isset($_GET['Message'])){
    echo $_GET['Message'];
}
?>

<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
</head>

<body>
	<div id="login">
		<h1><strong>Welcome </strong>Please Login:</h1>
		<form action="includes/login.inc.php" method="POST">
    		<fieldset>
				<p><input type="text" name="uidORpwd" placeholder="username/email" required>
				<p><input type="password" name="password" placeholder="password" required>
      			<p><a href="signup.php">Need Sign Up?</a></p>
      			<p><a href='includes/login.inc.php'><input type="submit" name="submit" value="Login"></a></p>    
			</fieldset>	
		</form>
	</div>
</body>

<?php
	include 'footer.php';
?>
