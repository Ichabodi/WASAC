<?php
if (isset($_POST['submit'])){
  $file = $_FILES['file'];

$fileName = $_FILES['file']['appLetter'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png','pdf');

if(in_array($fileActualExt,$allowed)){
 if($fileError === 0){
  if($fileSize < 1000000){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
     $fileDestination = '.../'.$fileNameNew; 
     move_uploaded_file($fileTmpName,$fileDestination);
     header("location:index_pirate.php/uploadingsuccessful");

  
  }
  else{
    echo"your file is too big";
  }
 }
 else{
  echo"there was an error uploading your file";
 }
}else {
  echo"you can not upload file of this type!! ";
}
}





?>
