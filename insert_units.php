<?php
 $conn = mysqli_connect("localhost", "root", "", "wasac");
         
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 5 values from the form data(input)
 //$depID =  $_REQUEST['depID'];
 $divID = $_REQUEST['divID'];
 $UnitName = $_REQUEST['UnitName'];
 // Performing insert query execution
 // here our table name is college
 $sql="INSERT INTO units  VALUES ('','$divID','$UnitName')"; 
 if(mysqli_query($conn,$sql)){
    // echo "<h3>Department Inserted in a database successfully.";
         //. " Please browse your localhost php my admin"
         //. " to view the updated data</h3>";

     //echo nl2br("\n$depID\n $depName\n ");
         //. "$gender\n $address\n $email");
         include_once('units.php') ;
 } else{
     echo "Error $sql. "
         . mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>
