<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page1</title>
<style>
body 
{
  font-family:Arial; 
  background-image: url("img/sanit.jpg");
  background-repeat: repeat-x;
  
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
  padding-left: 0px;
  
}

li a {
  background-color:rosybrown;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 35px;
  text-decoration: none;
  font-weight: bold;
}

li a.active {
  background-color: white;
  color: black;}

li a:hover, .dropdown:hover .dropbtn {
  background-color:aqua;
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
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: blue;}

.dropdown:hover .dropdown-content {
  display: block;
}
/* Create two columns/boxes that floats next to each other */
/*nav {
  float: left;
  width: 20%;
  height: 400px;  only for demonstration, should be removed 
  background:#f1f1f1 ;
  padding: 20px;
}*/

/* Style the list inside the menu 
nav ul {
  list-style-type: none;
  padding: 1px;
}*/

/*article {
  float: right;
  padding: 80px;
  width: 50%;
  background-color: #f1f1f1;
  height: 270px; only for demonstration, should be removed }*/


/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer 
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}*/


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
      <li><a href="logout.php" target="content">Logout</a></li>
      <li><a href="#" target="_blank">help</a></li>
      <li><a href="#" target="_blank">About</a></li>
      <li><a href="request.php" target="content">request internship</a></li>
      <li><a class="active" href="index_pirate.php" target="content">home</a></li>
     
    </ul>
  </nav></header>
<section>

</section>

<!--<footer>
  <p>Footer</p>
</footer>-->




</body>