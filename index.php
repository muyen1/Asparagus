<?php
	include 'header.php';
?>


<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
  
		    <form class="login-form" action="includes/login.inc.php" method="POST">
				<input type="text" name="email" placeholder="email">
				<input type="text" name="uid" placeholder="username">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Log In !</button>
				<h3>Don't have an acount?</h3>
          	    <a href="signup.php">Sign up here</a>
			</form>

		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>	
	</div>
</section>


<?php
	include 'footer.php';
?>
