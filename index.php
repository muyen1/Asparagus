<?php
	include 'includes/header.php';
?>

<?php
	if($_SESSION) {
	    header("location:tracker.php");
	}
?>



<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
	<div id="login">
		<h1><strong>Welcome </strong>Please Login:</h1>
		<form action="includes/login.inc.php" method="POST">
    		<fieldset>
				<p><input type="text" name="username" placeholder="username/email" required>
				<p><input type="password" name="password" placeholder="password" required>
      			<p><a href="signup.php">Need to Sign Up?</a></p>
      			<p><a href='includes/login.inc.php'><input type="submit" name="submit" value="Login"></a></p>    
			</fieldset>	
		</form>
	</div>

	<!-- login btn -->
	<div>
		<fb:login-button scope="public_profile,email" 
		onlogin="checkLoginState();"> Facebook Login </fb:login-button>
	</div>
	
	<script>
		//Load the SDK asynchronously
		window.fbAsyncInit = function() {
			FB.init({
			appId      : '382748258795563',
			xfbml      : true,
			version    : 'v3.0'
			});
			FB.AppEvents.logPageView();
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
				}
			js = d.createElement(s); 
			js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		//checking login state
		function checkLoginState(){
			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});
		}

		function statusChangeCallback(response) {
			console.log('You can check various information through response');
			console.log(response);
			if (response.status === 'connected') {
				console.log('The user logged in the Facebook and the app');
				FB.api('/me', function(response) {
					console.log('Successful login for: ' + response.name);
				});
			} else if (response.status === 'not_authorized') {
				console.log('The user not logged in the app but logged in the Facebook');
			} else {
				console.log('The user not logged in Facebook and '
				+ 'it is not possible to know the conneting status in the app ')
			}
		}

	</script>


</body>

<?php
	include 'includes/footer.php';
?>