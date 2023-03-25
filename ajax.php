<?php
include("db.php");
$countryId = isset($_POST['countryId']) ? $_POST['countryId'] : 0 ;
$stateId = isset($_POST['stateId']) ? $_POST['stateId'] : 0 ;
$command = isset($_POST['get']) ? $_POST['get'] : "" ;


switch ($command){
    case"country":
        $statement = "SELECT id,name FROM countries";
        $dt = mysqli_query($conn,$statement);
        while ($result = mysqli_fetch_array($dt))
        {
            echo $result1 = "<option value =" .$result['id'] . ">" .  $result['name'] . "</option";
        }
        break;
    case "state":
        $result1 = "<option>select state </option>";
        $statement = "SELECT id,name FROM states WHERE country_id=" . $countryId;
        $dt = mysqli_query($conn,$statement);
        while ($result =  mysqli_fetch_array($dt))
        break;

    }














?>