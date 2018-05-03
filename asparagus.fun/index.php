<?php
	include 'header.php';
?>


<!--
<section class="main-container">
	<div class="main-wrapper">
		<h5>Welcome to Asparagus</h5>
  
		    <form class="login-form" action="includes/login.inc.php" method="POST">
				<input type="text" name="uid" placeholder="username">
				<input type="password" name="pwd" placeholder="password">
				<button type="submit" name="submit">Log In !</button>
				<h3>Don't have an acount?</h3>
          	    <a href="signup.php">Sign up here</a>
			</form>
-->

<head>

	<meta charset="utf-8">
    
	<title>Login with Facebook or Twitter</title>

	<link rel="stylesheet" href="index.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>

	<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

      <div id="login">

		<h1><strong>Welcome.</strong> Please login.</h1>

		<form action="javascript:void(0);" method="get">

			<fieldset>

				<p><input type="text" required value="Username" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Username" -->

				<p><input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "></p> <!-- JS because of IE support; better: placeholder="Password" -->

				<p><a href="#">Forgot Password?</a></p>

				<p><input type="submit" value="Login"></p>

			</fieldset>

		</form>

		<p><span class="btn-round">or</span></p>

		<p>

			<a class="facebook-before"><span class="fontawesome-facebook"></span></a>
			<button class="facebook">Login Using Facbook</button>

		</p>

		<p>

			<a class="twitter-before"><span class="fontawesome-twitter"></span></a>
			<button class="twitter">Login Using Twitter</button>

		</p>

	</div> <!-- end login -->


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
