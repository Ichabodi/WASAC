<?php
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
echo "connected successfully";
?>
