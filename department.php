<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body 
{
  font-family:Arial; 
  /*background-image: url("img/baby.jpg");*/
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
input[type=text], input[type=password]
{
    width: 50%;
    margin: 6px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
}
button 
{
    background-color:lightseagreen;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 30%;
    font-weight: bold;
    font-size: 15px;
    text-align: center;
    float: right;
}

button:hover 
{
    background-color:rgb(22, 50, 46);
    cursor: pointer;
}
form
{
    width:35rem;
    margin: auto;
    color:whitesmoke;
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px ;
    float:right ;
    text-align:left;
}
.mainContainer  
{
    padding: 10px;
}

  .register{
    color: white;
    text-align: center;
  }
  
  .register a{
    color: rgb(22, 146, 235);
  }
  
  .register a:link{
    text-decoration: none;
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
<title>Request page</title>
</head>
<body>
<form action="new.php" method="POST">
<div class="mainContainer">
<label for="depName">Enter Department Name</label>
<input type="text" placeholder="Enter Department Name" name="depName" required>
<br><br>            
<button type="submit"><i>register</i></button>
<p class="register">Already have an account?!<a href="login.php"><b>Get in</b></a></p>
</div>
</form>
</body>
</html>