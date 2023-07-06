<?php
  include('connection.php') ;
 if(isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    if(empty($email)){
        echo("email is required,please");
      exit(); 
    }
    else if(empty($password)){
        echo("password is required,please");
        exit(); 
    } else {
        $sql= "SELECT * FROM admin WHERE email='$email' AND password = '$password' ";
        $result = mysqli_query($con,$sql);}
        if(mysqli_num_rows($result) ===1 )
        {
            $row = mysqli_fetch_assoc($result);
            if($row['email']===$email && $row['password']===$password){
                header("location:admin1.php");
            }
            else{
                echo("Incorrect email or password");
                exit();
            }}
        else {
            header("location:homepage.php?error = Incorrect email or password");
            exit();  
        }
        }
    
     
    else{
    header("location:homepage.php");
    exit();
 }

 
 
 
 ?>
