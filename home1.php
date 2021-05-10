
<html>
<head>
  <title>Design 4</title>
  <link rel="stylesheet" type="text/css" href="Design4.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="e3.jpg" style="width:100%">
  <div class="text"><a href="#" id="Engagment">Engagment</a></div>
</div>

<div class="mySlides fade">
   <img src="e1.jpg" style="width:100%">
   <div class="text"><a href="#" id="Weeding"> Weeding</a></div>
</div>

<div class="mySlides fade">
   <img src="9.jpg" style="width:100%">
   <div class="text"><a href="#" id="Casual">     Casual</a></div>
</div>
<div class="mySlides fade">
   <img src="pic1.jpg" style="width:100%">
   <div class="text"><a href="#" id="Others">  Others</a></div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
  <section class="about-area" style="margin-top: 300px;">
  <h3 class="section-title">Vision</h3>
  <ul class="about-content">
    <li class="about-left"></li>
      <p style="margin-left: -600px;font-size: 22px;">To make our clients always satisfy with the prices and quality </p>
    </li>
  </ul>

  </section>
</section>
  <section class="services-area" id="services">
    <h3 class="section-title">Contact us</h3>
    <ul class="services-content">
      <li><i class="fa fa-phone"></i>
      <p>01025913676</p>
      <br></li>
      <li><i class="far fa-envelope"></i>
      <p>afnanghxdd44@gamil.com</p></li>
    </ul>
  </section>
  



  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}
</script>
</body>
</html>
<?php 
include 'Main_Nav.php';

?>