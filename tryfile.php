<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "wasac";
//create connection
$con = mysqli_connect($serverName,$userName,$password,$dbName );

if(isset($_POST['submit'])){
#retrieve file title
    $title = $_POST["Name"];
#file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
#temporary file name to store file
    $tmane = $_FILES["file"]["tmp_name"];
#upload directory path
$uploads_dir = '/images';
#To move the uploaded file to specific location
    move_uploaded_file($uploads_dir.'/'.$pname);

    #sql query to insert into database
    $sql = "INSERT into try(Name,file) VALUES ('$title','$pname')";

    if(mysqli_query($con,$sql)){

        echo"file successfully uploaded";
    }
    else{
        echo"error";
    }

}
?>
<form method='post' enctype="multipart/form-data">

<label>title</label>
<input type="Name" name="Name" required>
<br>
<label>file</label>
<input type="file" name="file">
<br><br>
<input type="submit" name="submit">
</form>