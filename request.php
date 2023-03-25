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
<?php
//connecting to database
 include("connection.php");

// define variables and set to empty values
$InternIDErr = $FieldOfStudyErr = $educationLevelErr = $InstutitionErr = $UnitOfInterestErr = $appLetterErr = $ToWhomErr = $healthInsuErr = $PropertyInsuErr =$DateOfAppErr ="";

$InternID = $FieldOfStudy = $educationLevel = $Instutition= $UnitOfInterest = $appLetter = $ToWhom = $healthInsu = $PropertyInsu =$DateOfApp ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["InternID"])) {
        $InternIDErr = "ID is required";
      } else {
        $InternID = test_input($_POST["InternID"]);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[0-9]+$/',$InternID)) {
          $InternIDErr = "Only numbers";
        }
      }

  if (empty($_POST["FieldOfStudy"])) {
    $FieldOfStudyErr = "Name is required";
  } else {
    $FieldOfStudy = test_input($_POST["FieldOfStudy"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$FieldOfStudy)) {
      $FieldOfStudyErr = "Only letters";
    }
  }

  if (empty($_POST["educationLevel"])) {
    $educationLevelErr = "Name is required";
  } else {
    $educationLevel = test_input($_POST["educationLevel"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$educationLevel)) {
      $educationLevelErr = "Only letters";
    }
  }   

  if (empty($_POST["Instutition"])) {
    $InstutitionErr = "Instutition is required";
  } else {
    $Instutition = test_input($_POST["Instutition"]);
  }

  if (empty($_POST["UnitOfInterest"])) {
    $UnitOfInterestErr = "UnitOfInterest is required";
  } else {
    $UnitOfInterest = test_input($_POST["UnitOfInterest"]);
  }

  if (empty($_POST["appLetter"])) {
    $appLetterErr = "appLetter is required";
  } else {
    $appLetter = test_input($_POST["appLetter"]);
  }

  if (empty($_POST["ToWhom"])) {
    $ToWhomErr = "ToWhom is required";
  } else {
    $ToWhom = test_input($_POST["ToWhom"]);
  }

  if (empty($_POST["healthInsu"])) {
    $healthInsuErr = "healthInsurance is required";
  } else {
    $healthInsu = test_input($_POST["healthInsu"]);
  }

  if (empty($_POST["PropertyInsu"])) {
    $PropertyInsuErr = "PropertyInsurance is required";
  } else {
    $PropertyInsu = test_input($_POST["PropertyInsu"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
//$sql = "INSERT INTO internrequest (InternID,FieldOfStudy,educationLevel,Instutition,UnitOfInterest,appletter,ToWhom,healthInsu,propertyInsu,dateOfApp) 
//VALUES(?,?,?,?,?,?,?,?,?,?)";


$sql = "INSERT INTO internrequest (InternID,FieldOfStudy,educationLevel,Instutition,UnitOfInterest,appletter,ToWhom,healthInsu,propertyInsu,dateOfApp) 
VALUES('$InternID', '$FieldOfStudy', '$educationLevel', '$Instutition','$UnitOfInterest','$appLetter', '$ToWhom','$healthInsu', '$PropertyInsu','$DateOfApp')";

?>
    <title>Request page</title>
</head>
<body>
<form action="" method="post">
<div class="mainContainer">
<label for="InternID">ID</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" placeholder="Enter your ID/passport numbers" name="InternID" required>
<br><br>
<label for="FieldOfStudy">Field of study</label>
<input type="text" placeholder="Enter your FieldOfStudy" name="FieldOfStudy" required>
<br><br>
<label for="educationLevel">Education level</label>
<select id="educationLevel" name="educationLevel" autocomplete="educationLevel" enterkeyhint="done" required>
<option selected value="SPACER"> </option>
<option value="high School">high School</option>	
<option value="under graduate">under graduate</option>
<option value="graduate">graduate</option>
<option value="post graduate">post graduate</option>
<option value="masters">masters</option></select>
<br><br>
<label for="Instutition">Instutition</label>
<select id="Instutition" name="Instutition" autocomplete="Instutition" enterkeyhint="done" required>
<option selected value="SPACER"> </option>
<option value="University of Rwanda">University of Rwanda</option>	
<option value="University of Global Health Equity">University of Global Health Equity</option>
<option value="Kibogora Polytechnic">Kibogora Polytechnic</option>
<option value="Institut d'Enséignement Supérieur de Ruhengeri">Institut d'Enséignement Supérieur de Ruhengeri</option>
<option value="Université Libre de Kigali">Université Libre de Kigali</option>
<option value="University of Kigali">University of Kigali</option>	
<option value="University of Tourism Technology and Business Studies">University of Tourism Technology and Business Studies</option>	
<option value="Adventist University of Central Africa">Adventist University of Central Africa</option>	
<option value="University of Lay Adventists of Kigali">University of Lay Adventists of Kigali</option>
<option value="Catholic University of Rwanda">Catholic University of Rwanda</option>	
<option value="Protestant Institute of Arts and Social Sciences">Protestant Institute of Arts and Social Sciences</option>	
<option value="University of Technology and Arts of Byumba">University of Technology and Arts of Byumba</option>	
<option value="Université Catholique de Kabgayi">Université Catholique de Kabgayi</option>	
<option value="East African University Rwanda">East African University Rwanda</option>	
<option value="Institute of Legal Practice and Development">Institute of Legal Practice and Development</option>
<option value="Vatel School Rwanda">Vatel School Rwanda</option>	
<option value="MKU International University of Technology">MKU International University of Technology</option>	
<option value="University of Gitwe">University of Gitwe</option>	
<option value="KIM University">KIM University</option>
<option value="Jomo Kenyatta University of Agriculture and Technology">Jomo Kenyatta University of Agriculture and Technology</option>
<option value="Mahatma Gandhi University Rwanda">Mahatma Gandhi University Rwanda</option>	
<option value=">Christian University of Rwanda">Christian University of Rwanda</option>	
<option value="Nile Source Polytechnic of Applied Arts">Nile Source Polytechnic of Applied Arts</option>	
<option value="Rusizi International University">Rusizi International University</option>	
<option value="African Leadership University">African Leadership University</option>
<option value="University of Kibungo">University of Kibungo</option></select>
<br><br>
<label for="UnitOfInterest">unit of interest</label>
<select id="UnitOfInterest" name="UnitOfInterest" autocomplete="UnitOfInterest" enterkeyhint="done" required>
<option selected value="SPACER"> </option>
<option value="high School">high School</option>	
<option value="under graduate">under graduate</option>
<option value="graduate">graduate</option>
<option value="post graduate">post graduate</option>
<option value="masters">masters</option></select>
<br><br>
<label for="appLetter">application letter</label>
<input type="file" placeholder="Enter your application file" name="appLetter" required>
<br><br>
<label for="ToWhom">To whom letter</label>
<input type="file" placeholder="Enter To whom file" name="ToWhom" required>
<br><br>
<label for="healthInsurance">health insurance</label>
<input type="file" placeholder="Enter health insurance file" name="healthInsurance" required>
<br><br> 
<label for="PropertyInsurance">health insurance</label>
<input type="file" placeholder="Enter property insurance file" name="PropertyInsurance" required>
<br><br>
<label >Date of application</label>
<input type="datetime-local" id="DateOfApp" name="DateOfApp" value="<?php echo $DateOfApp;?>">
   <br><br>             
            
<button type="submit"><i>register</i></button>
<p class="register">Already have an account?!<a href="login.php"><b>Get in</b></a></p>
</div>

</form>

</body>
</html>
