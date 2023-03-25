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
  background-image: url("img/baby.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
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
    background-color:gray;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 50%;
    font-weight: bold;
    font-size: 18px;
    text-align: center;
}

button:hover 
{
  background-color:whitesmoke;
  color: black;
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
    padding: 16px;
}
span.forgotpsd a {
    float: right;
    color: whitesmoke;
    padding-top: 16px;
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
<?php
// define variables and set to empty values
$FnameErr = $LnameErr = "";

$Fname = $Lname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fname"])) {
    $FnameErr = "Name is required";
  } else {
    $Fname = test_input($_POST["Fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$Fname)) {
      $FnameErr = "Only letters";
    }
  }

  if (empty($_POST["Lname"])) {
    $LnameErr = "Name is required";
  } else {
    $Lname = test_input($_POST["Lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$Lname)) {
      $LnameErr = "Only letters";
    }
  }   

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





    <title>Signup page</title>
</head>
<body>
    <form action="">
        <div class="mainContainer">
            <label for="Fname">first name</label>
            <input type="text" placeholder="Enter first name" name="FirstName" required>
                <br><br>
                <label for="Lname">last name</label>
            <input type="text" placeholder="Enter last name" name="LastName" required>
                <br><br>
                <label for="username">username</label>
            <input type="text" placeholder="Enter username" name="username" required>
                <br><br>
            <label for="pswrd">Your password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>
            <br><br>
            <div class="subcontainer">
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            
            <button type="submit">Sign in</button><button type="reset">clear</button>
            <p class="register">Already have an account?!<a href="login.php">Get in</a></p>
        </div>

    </form>
    <?php
echo $Fname;
echo "<br>";
echo $Lname;
echo "<br>";
?>
</body>
</html>
