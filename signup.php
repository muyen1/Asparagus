<?php
	include 'includes/header.php';
?>

<?php
if(isset($_GET['Message'])){
    echo $_GET['Message'];
}
?>

	<div class="signup">
	<h1><strong>Sign Up</strong></h1>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="email" name="email" placeholder="email" required>
			<input type="text" name="username" placeholder="username" required>
			<input type="password" name="password" placeholder="password" required>
			<input type="password" name="REpassword" placeholder="confirm password" required>
			<input type="submit" name="submit" value="submit">
		</form>
	</div>

<?php
	include 'includes/footer.php';
?>
