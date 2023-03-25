<?php
$email = $_POST['email'];
$password = $_POST['password'];
$error = "";
$success = "";

if(isset($_POST['submit']))
{
  if($email == "admin"){
    if($password == "password"){
      $error = "";
      $success = "welcome admin";
    }
    else{
      $error = "Invalid password!!";
      $success = "";
    }
  }
  else{
    $error = "Invalid email!!!";
    $success = "";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body 
{
  padding-bottom: 20px;
  font-family:Arial; 
  background-image: url("img/wtr.webp");
 
}
input[type=text], input[type=password]
{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
}
button 
{
    background-color: #87CEEB;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
}

button:hover 
{
    opacity: 0.6;
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
    border: 1px solid rgba(255, 255, 255, 0.125);
    float:center;
    text-align:left;
}
.headingsContainer
{
    text-align: center;
}
.mainContainer  
{
    padding: 16px;
}
span.forgotpsd a {
    float: right;
    color: whitesmoke;
    padding-top: 16px;
  }

.forgotpsd a{
    color: rgb(74, 146, 235);
  }
  
.forgotpsd a:link{
    text-decoration: none;
  }

  .register{
    color: white;
    text-align: center;
  }
  
  .register a{
    color: rgb(74, 146, 235);
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







    <title>Login page</title>
</head>
<body>
    <form action="">
       
       <br><br>
        <div class="mainContainer">
          <p class="error"><?php echo $error;?></p><p class="success"><?php echo $success; ?></p>
            <label for="email">email</label>
            <input type="email" placeholder="Enter email" name="email" required>
                <br><br>
            <label for="password">Your password</label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br><br>
            <div class="subcontainer">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <p class="forgotpsd"> <a href="#">Forgot Password?</a></p>
            </div>
            
            <button type="submit">Login</button>
            <p class="register">Not a member?  <a href="signup.php">Register here!?</a></p>
        </div>

    </form>
</body>
</html>
