<?php
// session_start();

require_once 'connection.php';

$applicantId = $_GET['applicant'];

mysqli_query($con, "UPDATE `request` SET `status` = 'Declined' WHERE `request`.`ReqID` = '".$applicantId."'");
header('location: report_req.php');


?>