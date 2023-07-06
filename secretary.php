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
<title>Secretary entry</title>
</head>
<body>
<form action="secretary1.php" method="POST">
<div class="mainContainer">
<label for="Names">Secreatry name</label>
<input type="text" placeholder="Enter secretary full name" name="fullName" required>
<br><br>  
<label for="email">email</label>
<input type="email" placeholder="Enter the email " name="email" required>
<br><br>
<label for="password"> password</label>
<input type="password" placeholder="Enter the password" name="password" required>
<br><br>          
<button type="submit"><i>register</i></button>

</div>
</form>
</body>
</html>