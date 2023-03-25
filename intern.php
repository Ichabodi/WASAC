<html>
<head>
<title>Interns form page</title>
<link rel="stylesheet" href="intern1.css">
</head>
<body>  

<?php
// define variables and set to empty values
$FnameErr = $LnameErr = $emailErr = $genderErr = $bathdateErr = $phoneErr = $addressErr = $fieldOfStudyErr = 
$instutitionErr = $divisionOfInterestErr = $educationLevelErr = $countryErr = "";

$Fname = $Lname = $email = $gender = $bathdate = $phone = $address = $fieldOfStudy = 
$instutition = $divisionOfInterest = $educationLevel = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Fname"])) {
    $FnameErr = "Name is required";
  } else {
    $name = test_input($_POST["Fname"]);
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

  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if address only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) {
      $addressErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["instutition"])) {
    $instutitionErr = "instutition is missing";
  } else {
    $instutition = test_input($_POST["instutition"]);
    // check if address only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$instutition)) {
      $instutitionErr = "Only letters and white space allowed";
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
<img src="img/WASAClogo.png">
<p><b>REGISTER YOURSELF</b></p>
<p>Enter only relevant information!!</p>

<form method="post" action=""> 
  <br> 
  Your First name: <br><input type="text" name="Fname"  placeholder="Enter your first name" value="<?php echo $Fname;?>">
  <span class="error">* <?php echo $FnameErr;?></span>
  <br><br>
  Last name: <br><input type="text" name="Lname" placeholder="Enter your last name" value="<?php echo $Lname;?> ">
  <span class="error">* <?php echo $LnameErr;?></span>
  <br><br>
  Address<br><input type="text" name="address" placeholder="Enter your address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>
  <br><br>
  E-mail: <br><input type="text" name="email" placeholder="Enter your email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Bathdate:<br><input type="date" id="birthday" name="birthday" value="<?php echo $bathdate;?>">
   <br><br>

  Gender:<br><br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Instutition:<br><input type="text" name="instutition" placeholder="Enter your instutition" value="<?php echo $instutition;?>">
  <span class="error">* <?php echo $instutitionErr;?></span>
   <br><br>
  Field of Study:<br><br> <textarea name="fieldOfStudy" rows="5" cols="40"></textarea>
  <br><br>
  division of Interest: <br><input type="text" name="division of Interest" placeholder="Enter division you want" value="<?php echo $divisionOfInterest;?>">
  <span class="error">* <?php echo $divisionOfInterestErr;?></span>
  <br><br>
</form>
<br>
  <button type="submit">Login</button>

<?php
echo $Fname;
echo "<br>";
echo $Lname;
echo "<br>";
echo $bathdate;
echo "<br>";
echo $address;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $country;
echo "<br>";
echo $gender;
echo "<br>";
echo $educationLevel;
echo "<br>";
echo $instutition;
echo "<br>";
echo $fieldOfStudy;
echo "<br>";
echo $divisionOfInterest;
echo "<br>";
?>

</body>
</html>