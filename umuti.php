<?php
//connecting to database
include("connection.php");

// uploading the fille
$target_dir = ".../";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// If the form is submitted
if(isset($_POST["submit"])) {
  $ID = $_POST['ID'];
  $educationLevel = $_POST['educationLevel'];
  $instutition = $_POST['instutition'];
  $departements = $_POST['departements'];
  $divisions = $_POST['divisions'];
  $units = $_POST['units'];
  $appLetter = $_POST['appLetter'];
  $ToWhom = $_POST['ToWhom'];
  $healthInsu = $_POST['healthInsu'];
  $PropertyInsu = $_POST['PropertyInsu'];
  $DateOfApp = $_POST['DateOfApp'];
}
 // Insert data into the database
$sql = "INSERT INTO request (InternID,FieldOfStudy,educationLevel,Instutition,UnitOfInterest,appletter,ToWhom,healthInsu,propertyInsu,dateOfApp) 
VALUES('$ID','$educationLevel', '$instutition','$departements','$divisions','$units','$appLetter', '$ToWhom','$healthInsu', '$PropertyInsu','$DateOfApp')";

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "pdf" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>