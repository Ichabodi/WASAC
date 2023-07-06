<?php
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

// Retrieve data from the database
$sql = "SELECT * FROM request";

$result = mysqli_query($con, $sql);

// Create an HTML table to display the data
//echo"<tr>table of requests</p>";
echo "<table border=1 style='width: 100%'>";
echo "<tr>
<th>ReqID</th>
<th>ID</th>
<th>EducationLevel</th>
<th>instutition</th>
<th>department</th>
<th>division</th>
<th>unit</th>
<th>appLetter</th>
<th>ToWhom</th>
<th>healthInsu</th>
<th>propertyInsu</th>
<th>DateOfApp</th>
<th>status</th>
<th>Action</th>
</tr>";
while ($row = mysqli_fetch_array($result)) {
  echo "<tr>
  <td>" . $row['ReqID'] . "</td>
  <td>" . $row['ID'] ."</td>
   <td>" . $row['educationLevel'] . "</td>
   <td>" . $row['institution'] . "</td>
   <td>" . $row['departements'] . "</td>
   <td>" . $row['divisions'] . "</td>
   <td>" . $row['units'] . "</td>
   <td>" . $row['appLetter'] . "</td>
   <td>" . $row['ToWhom'] . "</td>
   <td>" . $row['healthInsu'] . "</td>
   <td>" . $row['propertyInsu'] . "</td>
   <td>" . $row['dateOfApp'] . "</td>
   <td>" . $row['status'] . "</td>
   <td><a href='accept.php?applicant=".$row['ReqID']."'>Accept</a> <a href='decline.php?applicant=".$row['ReqID']."'>Decline</a></td>
   </tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($con);
?>

<style>
  table{
    width: 350px;
    height: 20px;
    border:0.2px;
    padding: 30px;
    background:#ACD1E9;
    border-radius: 5px;}
  tr{
    width:auto;
  }
  th{
    width: 50px;
    height: 50px;
  }
  /*p{
    text-align: center;
    font-weight: bold;
  }*/
  
</style>

