<?php
	include 'header.php';
?>

<style>
<?php
	include 'main.css'; ?>
</style>

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
		<p id="p1"></p>
	</div>
	<div id="newItemButton">
		Mark code goes here
	</div>
	<div id="trackedItemsButtons"></div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
			e.preventDefault();
			$.ajax({
				url:"buttonData.php",
				dataType: "html",
				type: "GET",
				data: {output: 'html'},
				success: function(data) {
					console.log(data);
						$("#trackedItemsButtons").append(data);		
					},
					error: function(jqXHR, textStatus, errorThrown) {
						$("#p1").text(textStatus + " " + errorThrown);
					}
				});
			});
	</script>
</section>

<?php
	include 'footer.php';
?>