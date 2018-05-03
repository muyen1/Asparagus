<?php
	include 'header.php';
?>

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
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
  				var js, fjs = d.getElementsByTagName(s)[0];
  					if (d.getElementById(id)) return;
  					js = d.createElement(s); js.id = id;
  					js.src = 'https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v3.0';
  					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
			</script>

		<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>

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