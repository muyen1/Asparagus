<?php
	include 'header.php';
?>


<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
  

		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>	
	</div>
</section>

<section>
	<div>
		<h2>Vision Statement</h2>
		<p>To save the world by reducing food waste and the environmental impact that comes with it.</p>
	</div>
	<div>
		<h2>Who are we?</h2>
		<p>We are five Computer Systems Technology students at BCIT, working on a project.</p>
		<ul>
			<li>Ross is the Time Lord, responsible for organizing and time keeping</li>
			<li>Mark is the team critic, challenging every assumption</li>
			<li>Ki is the Veteran, and brings a strong background of real world experience</li>
			<li>John is our artist, responsible for creating the overal aesthetic of our application</li>
			<li>Jason is our glue, our front man and evangelist</li>
		</ul>
	</div>
	<div>
		<h2>About Asparagus</h2>
		<p>We imagined an application which was not a food tracker, but instead a rate of use calculator which informed users how much perishable product they can safely use before it spoils.<br>We focused on making the application as easy to use as possible, so people were more likely to actually use it.<br>People can use this application for as many or few items as they'd like, and only need to select a food to track, and input when they use new product</p>
	</div>
	<div>
		<h2>What We've Learned Along the Way</h2>
		<dl>
			<dt>How To Handle Time</dt>
			<dd><br>The application at some point gives a good idea of how much a person can buy.  Further use can further refine the calculation, but at some point enough data has been gathered to estimate effectively.  We ran into the problem that if we use our time variable as number of days between date started tracking and present, if a user stopped using when enough data had been input, number of days would continue to tick up and change the purchasable amount.  We realized that we could time stamp every user input, but that this would create an overly complicated algorithm.  We instead settled on offering the user a stop (and possibly restart) button to address this problem.</dd>
		</dl>
	</div>
</section>


<?php
	include 'footer.php';
?>
