<?php
	include 'includes/header.php';
?>



<div style="text-align:center">
  <br><br>
  <video id="video1" width="100%">
    <source src="video/pitch.mp4" type="video/mp4">
  </video>
</div> 

<div align="left"> 
  <br><button onclick="playPause()" align="left" float="left">Play/Pause</button>
</div>

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 


<p><br>Thank you instructors and fellow students for indulging us.<br><br>TEAM ASPARAGUYS!!!</p>

<?php
	include 'includes/footer.php';
?>
