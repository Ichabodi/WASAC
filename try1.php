<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "wasac";
//create connection
$con = mysqli_connect($serverName,$userName,$password,$dbName );

if(isset($_POST['submit'])){
    #upload directory path
$uploads_dir = 'images/';

#retrieve file title
    $title = $_POST["Name"];
#file name with a random number so that similar dont get replaced


    $up_file0 = $uploads_dir . basename($_FILES["file0"]["name"]);
    $up_file1 = $uploads_dir . basename($_FILES["file1"]["name"]);
    $up_file2 = $uploads_dir . basename($_FILES["file2"]["name"]);
    $up_file3 = $uploads_dir . basename($_FILES["file3"]["name"]);

#To move the uploaded file to specific location
   if( move_uploaded_file($_FILES["file0"]["tmp_name"], $up_file0) && 
   move_uploaded_file($_FILES["file1"]["tmp_name"], $up_file1) && 
   move_uploaded_file($_FILES["file2"]["tmp_name"], $up_file2) && 
   move_uploaded_file($_FILES["file3"]["tmp_name"], $up_file3)) {

     #sql query to insert into database
     $sql = "INSERT into try(Name,file0,file1,file2,file3) VALUES ('$title','$up_file0','$up_file1','$up_file2','$up_file3')";

     if(mysqli_query($con,$sql)){
 
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
<form method='post' enctype="multipart/form-data">

<label>title</label>
<input type="Name" name="Name" required>
<br><br>
<label>file0</label>
<input type="file" name="file0">
<br><br>
<label>file1</label>
<input type="file" name="file1">
<br><br>
<label>file2</label>
<input type="file" name="file2">
<br><br>
<label>file3</label>
<input type="file" name="file3">
<br><br>
<input type="submit" name="submit">
</form>