<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
* {box-sizing: border-box}
body{
  background-image: url("img/wtr.webp");
  font-family: Verdana, sans-serif;
   margin:0;
  }
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #0d0d0d;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-weight:bold
  ;
}

/* Number text (1/3 etc) 
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}*/

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
li {
  float:right;
  padding-left: 9px;
}

li a {
  
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;
  background-color:rgb(47, 62, 22);
  word-spacing: 5px;
}
li a:hover .dropdown:hover .dropbtn{
  color:white;
  background-color:rgb(47, 62, 22);
}
li.dropdown {
  display: inline-block;}
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;}
  .dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgb(128, 200, 233);
;}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 400px; /* only for demonstration, should be removed */
  background:#f1f1f1 ;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 1px;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
  <header>
    <img src="img/WASAClogo.png" style="float: left;width: 20%;height: auto;float: left;">
    <ul>
      <li><a href="signup1.php"><i>Sign up</i></a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Log in</a>
        <div class="dropdown-content">
          
          <a href="login.php">As intern</a>
          <a href="admin.php">As admin</a>
          <a href="login_man.php">As manager</a>
          <a href="login_sec.php">As secretary</a>
        </div>
      </li>
    </ul></header>

<div class="slideshow-container">

<div class="mySlides fade">
    <!--<div class="numbertext">1 / 3</div>-->
  <img src="img/pipe2.jpg" style="width:100%">
  <div class="text">water for citizen</div>
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">2 / 3</div>-->
  <img src="img/u.jpeg" style="width:100%">
  <div class="text">learn from experts</div>
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">3 / 3</div>-->
  <img src="img/h.jpg" style="width:100%">
  <div class="text">be successful</div>
</div>


<div class="mySlides fade">
  <!--<div class="numbertext">3 / 3</div>-->
  <img src="img/n.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)"> << </a>
<a class="next" onclick="plusSlides(1)"> >> </a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
}
</script>

</body>
</html> 
