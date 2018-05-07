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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
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
	
<header class="main-header">
	<div class="main-wrapper">
		<a href="index.php" class="logo"><img  class="logoImage" src="images/logo.png"></a>
	</div>
	<div class="dropdown">
    	<button onclick="myFunction()" class="dropbtn">Menu</button>
    		<div id="myDropdown" class="dropdown-content">
			    <a href="index.php">Home</a>
				<a href="signup.php">Sign Up</a>
				<a href="trackedItems.php">Tracked items</a>
         		<a href="stats.php">Stats</a>
				<a href="tips.php">Tips</a>
				<a href="signup.php">Sign Up</a>
				<a href="aboutus.php">About Us</a>
        </div>
	</div>

	
</header>
	
