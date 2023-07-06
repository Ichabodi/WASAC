<!DOCTYPE html>
<html>
 
<head>
    <title> </title>
</head>
 
<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $con = mysqli_connect("localhost", "root", "", "wasac");
         
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        //$depID =  $_REQUEST['depID'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO admin VALUES ('','$name','$email','$password')";
         
        if(mysqli_query($con, $sql)){
           // echo "<h3>Department Inserted in a database successfully.";
                //. " Please browse your localhost php my admin"
                //. " to view the updated data</h3>";
 
            //echo nl2br("\n$depID\n $depName\n ");
                //. "$gender\n $address\n $email");
                include_once('admin_Add.php') ;
        } else{
            echo "Error $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
    </center>
</body>
 
</html>