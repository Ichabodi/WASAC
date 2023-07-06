<?php

    // Establish connection to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wasac";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the department_id from the URL parameter
    $department_id = $_GET['depID'];

    // Get all divisions for the selected department from the database
    $division_query = "SELECT divID, divName FROM division WHERE depID= " . $department_id;
    $division_result = $conn->query($division_query);

    // Create the options string for the divisions select box
    $options = "<option value=\"\">Select division</option>";
    while ($division = $division_result->fetch_assoc()) {
        $options .= "<option value=\"" . $division['divID'] . "\">" . $division['divName'] . "</option>";
    }

    echo $options;

    $conn->close();

?>
