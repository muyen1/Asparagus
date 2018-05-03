<?php
	include 'header.php';
?>

<style>
<?php
	include 'main.css'; ?>
</style> 

<section>
	<div>
		<p id="p1">Tracker</p>
	</div>
	<div id="newItemButton">
		Mark code goes here
	</div>
	<div class="tracker">
	

	</div>
	<div id="trackedItemsButtons"></div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
			e.preventDefault();
			$.ajax({
				url:"buttonData.inc.php",
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