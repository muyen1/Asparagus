<?php include 'header.php'; ?>

<head>
	<meta charset="utf-8">
	<title>Tips</title>
	<style>
		<?php include 'main.css'; ?>
	</style>

<section>
    <h1>Tips</h1>
</section>

<section>
    <div class="tips">
        <div class="container">
        <div class="mySlides">
        <div class="numbertext"><h2>Save and eat leftovers</h2><p><br></p></div>
        <img class="tipimage" src="images/leftovers.jpg">
  		</div>
		</div>

  	<div class="mySlides">
    	<div class="numbertext">,<h2>Store food in the right places</h2><p><br></p></div>
		<img class="tipimage" src="images/bananas.jpg">
  	</div>

  	<div class="mySlides">
		<div class="numbertext"><h2>Do not over serve food</h2><p><br></p></div>
		<img class="tipimage" src="images/breakfast.jpg">
  	</div>
    
  	<div class="mySlides">
    	<div class="numbertext"><h2>Try canning if you can</h2><p><br></p></div>
		<img class="tipimage" src="images/jars.jpg">
  	</div>

  	<div class="mySlides">
    	<div class="numbertext"><h2>Do not be too scared of best before date(smell and sight is more reliable)</h2><p><br></p></div>
    	<img class="tipimage" src="images/breadTags.jpg">
  	</div>
    
  	<div class="mySlides">
    	<div class="numbertext"><h2>Stop shopping too much in the first place!</h2><p><br></p></div>
    	<img class="tipimage" src="images/tomatoes.jpg">
	</div>
    
  	<a class="prev" onclick="plusSlides(-1)">❮	</a>
  	<a class="next" onclick="plusSlides(1)">❯</a>

  	<div class="caption-container">
    	<p id="caption"></p>
  	</div>
	</div>
    
</section>


<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
  		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
  		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
  		if (n > slides.length) {slideIndex = 1}
  		if (n < 1) {slideIndex = slides.length}
  		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
  		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
  		}
  		slides[slideIndex-1].style.display = "block";
  		dots[slideIndex-1].className += " active";
  		captionText.innerHTML = dots[slideIndex-1].alt;
	}
</script>

<?php include_once 'footer.php'; ?>
