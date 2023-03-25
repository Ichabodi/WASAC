<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
<style>
body 
{
  font-family:Arial; 
  background-image: url("img/pipe2.jpg");
  background-repeat: no-repeat;
}
header{
float: left;
}
img{
  width: 20%;
  height: auto;
  float: left;
}


 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
li {
  float:right;
}

li a {
  
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;
}
li a:hover {
  background-color:darkolivegreen;
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

article {
  float: right;
  padding: 80px;
  width: 50%;
  background-color: #f1f1f1;
  height: 270px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}


@media screen and (max-width: 600px) {
    form{
      width: 25rem;
    }
  }
  
  @media screen and (max-width: 400px) {
    form{
      width: 20rem;
    }
  }
</style>
<body>

<header>
<img src="img/WASAClogo.png">
<ul>
<li><a href="signup.php"><i>Sign Up</i></a></li>
<li><a href="login.php"><i>Log In</i></a></li>
</ul></header>
<section>
  <nav class="">
    <ul>
      <li><a href="request.php" target="content">request internship</a></li>
      <li><a href="department.php" target="content">Department</a></li>
      <li><a href="division.php" target="content">division</a></li>
      <li><a href="units.php" target="content">units</a></li>
      <li><a href="man.php" target="content">manager</a></li>
      <li><a href="secretary.php" target="content">secretary</a></li>
      <li><a href="#" target="_blank">About</a></li>
      <li><a href="#" target="_blank">Logout</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>




</body>