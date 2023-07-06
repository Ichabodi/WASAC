

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
<form action="apply.php" method="POST" enctype="multipart/form-data">
<div class="mainContainer">
<label for="InternID">ID</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" placeholder="Enter your ID/passport numbers" name="InternID" required>
<br><br>
<label for="educationLevel">level of education</label>
<select id="educationLevel" name="educationLevel" required>
<option disabled selected>--choose level </option>
  <option value="undergraduate">undergraduate</option>
  <option value="postgraduate">postgraduate</option>
  <option value="masters">masters</option>
</select>
<br><br>
  <label for="InstuID" >Instutition:</label>
    <select name="instutition" required>
      <option disabled selected>--Select Instutition </option>
        <?php
                include "connection.php";  // Using database connection file here
                $records = mysqli_query($con, "SELECT InstuName FROM instutition");  // Use select query here 
                while($row = mysqli_fetch_array($records))
                {
                    // displaying data in option menu
                    echo "<option value='". $row['InstuID'] ."'>" . $row['InstuName'] ."</option>"; 
                }   
        ?>  
        </select>
        <br><br>
        <label>AppLetter</label>
<input type="file" name="appLetter">
<br><br>
<label>ToWhom</label>
<input type="file" name="ToWhom">
<br><br>
<label>healthIns</label>
<input type="file" name="healthInsu">
<br><br>
<label>propertyIns</label>
<input type="file" name="PropertyInsu">
        <br><br>
        <?php

// Establish connection to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wasac";

$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get all departments from the database
$departments_query = "SELECT depID, depName FROM depertements";
$departments_result = $con->query($departments_query);

?>
<fieldset>
  <legend>interesting option</legend>
<!-- Create the first select box for departments -->
<label for="departements" >department:</label>
<select id="departements" name="departements" onchange="getdivision(this.value)" required>
    <option value="" disabled selected>--Select Department first</option>
    <?php
        // Loop through all departments and create an option for each one
        while ($department = $departments_result->fetch_assoc()) {
            echo "<option value=\"" . $department['depID'] . "\">" . $department['depName'] . "</option>";
        }
    ?>
</select>
<br><br>

<!-- Create the second select box for divisions -->
<label for="divisions" >division:</label>
<select id="divisions" name="divisions" onchange="getunits(this.value)" required>
    <option value="" disabled selected >--Then select division </option>
</select>
<br><br>

<!-- Create the third select box for units -->
<label for="units" >unit:</label>
<select id="units" name="units" required>
    <option value="" disabled selected >--And then select Unit </option>
</select>
<br><br>
 <!-- JavaScript function to populate the units select box based on the selected department -->
 <script>
    function getdivision(department_id) {
        if (department_id == "") {
            // If no department is selected, clear the divisions select box and show "Select Department First" message
            document.getElementById("divisions").innerHTML = "<option value=\"\">Select Department First</option>";
            document.getElementById("units").innerHTML = "<option value=\"\">Select Division First</option>";
        } else {
            // If a department is selected, use AJAX to dynamically populate the units select box
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("divisions").innerHTML = this.responseText;
                    document.getElementById("units").innerHTML = "<option value=\"\">Select Unit First</option>";
                }
            };
            xhttp.open("GET", "get_division.php?depID=" + department_id, true);
            xhttp.send();
        }
    }
    </script>

    <!-- JavaScript function to populate the units select box based on the selected division -->
    <script>
    function getunits(division_id) {
        if (division_id == "") {
            // If no division is selected, clear the units select box and show "Select Unit First" message
            document.getElementById("divisions").innerHTML = "<option value=\"\">Select division First</option>";
        } else {
            // If a division is selected, use AJAX to dynamically populate the units select box
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("units").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_unit.php?divID=" + division_id, true);
            xhttp.send();
        }
}
</script>
</fieldset>
<br><br>
<label >Date of application</label>
<input type="date" name="DateOfApp" id="DateOfApp" value="<?php echo $DateOfApp;?>">
<br><br>            
   <button type="submit" name="submit"><i>register</i></button><button type="reset"><i>clear</i></button>
   
</div>
</form>

</body>
</html>
