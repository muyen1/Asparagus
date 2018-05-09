<?php
	include 'header.php';
?>

	<div class="signup">
	<h1><strong>Sign Up</strong></h1>
		<form class="signup-form" action="includes/signup.php" method="POST">
			<input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
			<button type="submit" name="submit">I'm In !</button>
		</form>
	</div>


<?php
	include_once 'footer.php';
?>
