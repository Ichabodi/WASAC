<?php
function check_login($con)
{
    if(isset($_SESSION['InternID']))
    {
        $id = $_SESSION['InternID'];
        $query = "select* from identity where InternID = '$id' limit 1";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to the login
    header("Location:login.php");
    die;
}

?>