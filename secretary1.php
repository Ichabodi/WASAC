<!DOCTYPE html>
<html>
 
<head>
    <title>php of secretary </title>
</head>
 
<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "wasac");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        //$depID =  $_REQUEST['depID'];
        $fullName = $_REQUEST['fullName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO secretary  VALUES ('','$fullName','$email','$password')";
         
        if(mysqli_query($conn, $sql)){
           // echo "<h3>Department Inserted in a database successfully.";
                //. " Please browse your localhost php my admin"
                //. " to view the updated data</h3>";
 
            //echo nl2br("\n$depID\n $depName\n ");
                //. "$gender\n $address\n $email");
                include_once('secretary.php') ;
        } else{
            echo "Error $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>