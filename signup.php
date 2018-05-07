<?php include 'header.php'; ?>

<head>
	<meta charset="utf-8">
	<title>Sign Up for Asparagus</title>
	<style>
		<?php include 'main.css'; ?>
	</style>
</head>

<section>
		<h1>Sign Up</h1>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>	
</section>

<section>
	<div class="signup">
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="uid" placeholder="username">
			<input type="text" name="pwd" placeholder="password">
			<button class="dropbtn" type="submit" name="submit">Sign Me Up!</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
