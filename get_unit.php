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

    // Get the division_id from the URL parameter
    $division_id = $_GET['divID'];

    // Get all units for the selected unit from the database
    $unit_query = "SELECT UnitID, UnitName FROM units WHERE divID = " . $division_id;
    $unit_result = $conn->query($unit_query);

    // Create the options string for the units select box
    $options = "<option value=\"\">Select unit</option>";
    while ($unit = $unit_result->fetch_assoc()) {
        $options .= "<option value=\"" . $unit['UnitID'] . "\">" . $unit['UnitName'] . "</option>";
    }

    echo $options;

    $conn->close();

?>
