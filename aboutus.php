<?php include 'header.php'; ?>

<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<style>
		<?php include 'main.css'; ?>
	</style>
</head>

<section>
		<h1>About Us</h1>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>	
</section>

<section>
	<h2>About Us</h2>
    <p>To save the world by reducing food waste and the environmental impact that comes with it.</p>
</section>
	 
<section>
	<h2>Who are we?</h2>
	<p>We are five Computer Systems Technology students at BCIT, working on a project.</p>
	<p>Ross is the Time Lord, responsible for organizing and time keeping</p>
	<p>Mark is the team critic, challenging every assumption</p>
	<p>Ki is the Veteran, and brings a strong background of real world experience</p>
	<p>John is our artist, responsible for creating the overal aesthetic of our application</p>
	<p>Jason is our glue, our front man and evangelist</p>
	<p></p>
	<p></p>
</section>

<section>
    <h2><strong>About Asparagus</strong></h2>
	<p>We imagined an application which was not a food tracker, but instead a rate of use calculator which informed users how much perishable product they can safely use before it spoils.</p>
	<p>We focused on making the application as easy to use as possible, so people were more likely to actually use it.</p>
	<p>People can use this application for as many or few items as they'd like,<br> and only need to select a food to track, and input when they use new product</p>
	<p></p>
	<p></p>
</section>
	
<section>
	<h2>What We've Learned Along the Way</h2>
	<p>How To Handle Time</p>
	<p>The application at some point gives a good idea of how much a person can buy. </p>
	<p>Further use can further refine the calculation, but at some point enough data has been gathered to estimate effectively. </p>
	<p>We ran into the problem that if we use our time variable as number of days between date started tracking and present, <br>if a user stopped using when enough data had been input, number of days would continue to tick up and change the purchasable amount. </p>
	<p>We realized that we could time stamp every user input, but that this would create an overly complicated algorithm. </p>
	<p>We instead settled on offering the user a stop (and possibly restart) button to address this problem.</p>
</section>

<?php
	include 'footer.php';
?>
