<?php
	include 'header.php';
?>
<?php
    if(isset($_SESSION['loggedin-user'])){
      require 'stats.php';
    }

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
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <script src="https://apis.google.com/js/api:client.js"></script>
  <script>
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
        client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          document.getElementById('name').innerText = "Signed in: " +
              googleUser.getBasicProfile().getName();
        }, function(error) {
          alert(JSON.stringify(error, undefined, 2));
        });
  }
  </script>
    
	<title>Login with Facebook or Twitter</title>

	<link rel="stylesheet" href="index.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>

	<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

      <div id="login">
<?php
$log = "Please login";

if(isset($_SESSION['loggedin-user'])){
    $log = $_SESSION['loggedin-user'];
}

		echo "<h1><strong>Welcome </strong>$log</h1>"
?>

<form action="index.php" method="POST">

    <fieldset>

      <p><input type="text" name="username">
    
      <p><input type="password" name="password">
    
      <p><a href="#">Need Sign Up?</a></p>
      <p><input type="submit" value="Login"></p>

    
      <button type="submit" name="submit">Login</button>
      
    
    </fieldset>

</form>

<?php
    error_reporting(0);
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(isset($_POST['submit'])){
        mysql_connect("localhost","asparagu_jt", "team8gumby");
        mysql_select_db("asparagu_main");
        $query =mysql_query("select * from user");
        
        $verified = false;
        while($row=mysql_fetch_array($query)){
            $u =$row['uid'];
            $p = $row['pwd'];
            
           if($username == $u && $password == $p){
            
            $verified = true;
            //break;
        
        }
        
        }
        
       if($verified==1){
            echo "successfully login";
            $_SESSION['loggedin-user'] = $u;
            echo "<p><a href='logout.php'>logout</a></p>";
            
            
        
       } else {
           echo "unsuccessful, please try logging in again";
       }
        

        

        
    
    

            
        
        
        
    }
    

?>


		<p>

			<a class="facebook-before"><span class="fontawesome-facebook"></span></a>
			<button class="facebook" onclick="_login();" type="submit">Login Using Facebook</button>

		</p>
        
        <script>
  // Load the SDK asynchronously
  (function(thisdocument, scriptelement, id) {
    var js, fjs = thisdocument.getElementsByTagName(scriptelement)[0];
    if (thisdocument.getElementById(id)) return;
    
    js = thisdocument.createElement(scriptelement); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js"; //you can use 
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
    
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1449392918617564', //Your APP ID
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.1' // use version 2.1
  });

  // These three cases are handled in the callback function.
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };
    
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      _i();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }  
  
  function _login() {
    FB.login(function(response) {
       // handle the response
       if(response.status==='connected') {
        _i();
       }
     }, {scope: 'public_profile,email'});
 }
 
 function _i(){
     FB.api('/me', function(response) {
        document.getElementById("inputFname").value = response.first_name;
        document.getElementById("inputLname").value = response.last_name;
        document.getElementById("inputEmail").value = response.email;
    });
 }

</script>
        
		
        
        
        <div id="gSignInWrapper">
    <div id="customBtn" class="customGPlusSignIn">
      <span class="icon"></span>
    </div>
  </div>
  <div id="name"></div>
  <script>startApp();</script>
        
        
        <div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 300,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


<?php
	include 'footer.php';
?>
