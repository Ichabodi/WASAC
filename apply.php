<?php

require_once 'connection.php';

if(isset($_POST['submit'])){

  $ID = $_POST['InternID'];
  $educationLevel = $_POST['educationLevel'];
  $instutition = $_POST['instutition'];
  $departements = $_POST['departements'];
  $divisions = $_POST['divisions'];
  $units = $_POST['units'];

    #upload directory path
    $uploads_dir = 'images/';

    $appLetter = $uploads_dir . basename($_FILES["appLetter"]["name"]);
    $ToWhom = $uploads_dir . basename($_FILES["ToWhom"]["name"]);
    $healthInsu = $uploads_dir . basename($_FILES["healthInsu"]["name"]);
    $PropertyInsu = $uploads_dir . basename($_FILES["PropertyInsu"]["name"]);

  
  $DateOfApp = $_POST['DateOfApp'];

#To move the uploaded file to specific location
   if(
    move_uploaded_file($_FILES["appLetter"]["tmp_name"], $appLetter) && 
    move_uploaded_file($_FILES["ToWhom"]["tmp_name"], $ToWhom) && 
    move_uploaded_file($_FILES["healthInsu"]["tmp_name"], $healthInsu) && 
    move_uploaded_file($_FILES["PropertyInsu"]["tmp_name"], $PropertyInsu)) {

     #sql query to insert into database
     $sql = "INSERT INTO `request` (`ReqID`, `ID`, `educationLevel`, `institution`, `departements`, `divisions`, `units`, `appLetter`, `ToWhom`, `healthInsu`, `propertyInsu`, `dateOfApp`, `status`) 
     VALUES (NULL, '".$ID."', '".$educationLevel."', '".$instutition."', '".$departements."', '".$divisions."', '".$units."', '".$appLetter."', '".$ToWhom."', '".$healthInsu."', '".$PropertyInsu."', '".$DateOfApp."', 'Pending')";

     if(mysqli_query($con, $sql)){
 
         echo"file successfully uploaded";
     }
     else{
         echo"error";
     }

   } 
   else
   {
    echo"not uploaded";

   }
}
?>