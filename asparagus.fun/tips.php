<?php
  include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Tips</h2>
         
        <div class="container">
        <div class="mySlides">
        <div class="numbertext">1 / 6</div>
        <img src="1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Save and eat leftovers">
    </div>
    <div class="column">
      <img class="demo cursor" src="2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Store food in the right places">
    </div>
    <div class="column">
      <img class="demo cursor" src="3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Do not over serve food">
    </div>
    <div class="column">
      <img class="demo cursor" src="4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Try canning if you can">
    </div>
    <div class="column">
      <img class="demo cursor" src="5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Do not be too scared of best before date(smell and sight is more reliable)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Stop shopping too much in the first place!">
    </div>
    
  </div>
  
</div>
<!-- <h1>Save and eat leftovers</h1><p></p>
          -->
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




<?php
  include_once 'footer.php';
 ?>
