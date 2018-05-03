<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Asparagus</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" property="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script>
	/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
			function myFunction() {
    			document.getElementById("myDropdown").classList.toggle("show");
			}

	// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
  				if (!event.target.matches('.dropbtn')) {

   					var dropdowns = document.getElementsByClassName("dropdown-content");
    				var i;
    					for (i = 0; i < dropdowns.length; i++) {
      					var openDropdown = dropdowns[i];
      						if (openDropdown.classList.contains('show')) {
        					openDropdown.classList.remove('show');
      					}
    				}
  				}
			}
</script>
</head>
<body>


<header>
	
		<div class="main-wrapper">
		<a href="index.php" class="logo"><img src="images/logo.png" height="80px" width="105px"></a>	
		<div class="dropdown">
      			<button onclick="myFunction()" class="dropbtn">Menu</button>
        			<div id="myDropdown" class="dropdown-content">
					    <a href="index.php">Home</a>
         				<a href="stats.php">Stats</a>
						<a href="tips.php">Tips</a>
						<a href="signup.php">Sign Up</a>
						<a href="aboutus.php">About Us</a>
						<a href="tracker.php">Tracker</a>
        			</div>
		
					

		
		</div>


</header>
