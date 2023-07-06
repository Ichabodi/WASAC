<?php
// Start a session
session_start();

// Connect to the database
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "wasac";
//create connection
$con = mysqli_connect($serverName,$userName,$password,$dbName );
if(mysqli_connect_errno())
{
    echo "connection failed";
    exit();
}

// If the form is submitted
if(isset($_POST['submit'])) {
  $name = $_POST['Names'];
  $ID = $_POST['ID'];
  $phone = $_POST['phone'];
  $birthdate = $_POST['birthdate'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $country = $_POST['country'];
  
  // Validate user input
  if(empty($name) || empty($ID) || empty($phone) || empty($birthdate) || empty($gender) || empty($email) || empty($password) || empty($country)) {
      echo "All fields are required<br>";
   
  } else {
      // Insert data into the database
      $sql = "INSERT INTO identity (Names,ID,phone,birthdate,gender,email,password,country) VALUES ('$name','$ID','$phone','$birthdate','$gender','$email','$password', '$country')";
      if(mysqli_query($con, $sql)) {
          header('Location: index_pirate.php');
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
  }
  
}
?>


<style>
body 
{
  font-family:Arial; 
  background-image: url("img/water1.jpg");
  background-repeat: no-repeat, repeat;
  background-size: cover;
}
input[type=text], input[type=password],input[type=email],input[type=date]
{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
}
button 
{
    background-color:darkcyan;
    color: white;
    padding: 9px;
    border-radius: 5px;
    margin: 7px 0;
    width: 30%;
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
  padding: 5px;  
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
    color:palegreen;
    text-align: center;
  }
  
  .register a{
    color:whitesmoke;
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

   
<title>Signup page</title>
</head>
<body>
<!-- Signup form HTML code -->

<form method="post" action="">
        <label for="Names">Names</label>
        <input id="text" type="text" placeholder="Enter names" name="Names" value="Names" required>
        <br><br>

        <label for="ID">ID</label>
        <input id="text"  type="text" placeholder="Enter your ID/passport numbers" name="ID" required>
        <br><br>

        <label for="phone">phone number</label>
        <input id="text" type="text" placeholder="only numbers" name="phone" size="10" required>
        <br><br>

        <label >birthdate</label>
        <input type="date" id="birthdate" name="birthdate" value="birthdate">
        <br><br>

        <label >gender</label>
        <br><br>
        <input id="radio" type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input id="radio" type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input id="radio" type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <br><br>
        <label for="CID" >Select country:</label>
        <select name="country">
            <option disabled selected>-- Select country </option>
            <?php
                include "connection.php";  // Using database connection file here
                $records = mysqli_query($con, "SELECT CID,CName From country");  // Use select query here 
                while($row = mysqli_fetch_array($records))
                {
                    // displaying data in option menu
                    echo "<option value='". $row['CID'] ."'>" . $row['CName'] ."</option>"; 
                }   
            ?>  
        </select>

        <br><br>
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="Enter the email" name="email" required>
        <br><br>
            
        <label for="password">Your password</label>
        <input id="text" type="password" placeholder="Enter Password" name="password" required>
        <br><br>
                
        <button name="submit" type="submit">register</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <button type="reset">clear</button>
        <p class="register">Already have an account?!<a href="login.php"><b>Get in</b></a></p>
    </form>
</div>
</body>
</html>