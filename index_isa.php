<?php

    // Establish connection to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wasac";

    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Get all departments from the database
    $departments_query = "SELECT depID, depName FROM depertements";
    $departments_result = $con->query($departments_query);

    ?>

    <!-- Create the first select box for departments -->
    <select id="departements" name="departements" onchange="getdivision(this.value)">
        <option value="" disabled selected>--Select Department</option>
        <?php
            // Loop through all departments and create an option for each one
            while ($department = $departments_result->fetch_assoc()) {
                echo "<option value=\"" . $department['depID'] . "\">" . $department['depName'] . "</option>";
            }
        ?>
    </select>
    <br><br>

    <!-- Create the second select box for divisions -->
    <select id="divisions" name="divisions" onchange="getunits(this.value)">
        <option value="" disabled selected>--Select division First</option>
    </select>
    <br><br>

    <!-- Create the third select box for units -->
    <select id="units" name="units">
        <option value="">Select Unit First</option>
    </select>
    <br><br>

    <!-- JavaScript function to populate the units select box based on the selected department -->
    <script>
    function getdivision(department_id) {
        if (department_id == "") {
            // If no department is selected, clear the divisions select box and show "Select Department First" message
            document.getElementById("divisions").innerHTML = "<option value=\"\">Select Department First</option>";
            document.getElementById("units").innerHTML = "<option value=\"\">Select Division First</option>";
        } else {
            // If a department is selected, use AJAX to dynamically populate the units select box
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("divisions").innerHTML = this.responseText;
                    document.getElementById("units").innerHTML = "<option value=\"\">Select Unit First</option>";
                }
            };
            xhttp.open("GET", "get_division.php?depID=" + department_id, true);
            xhttp.send();
        }
    }
    </script>

    <!-- JavaScript function to populate the units select box based on the selected division -->
    <script>
    function getunits(division_id) {
        if (division_id == "") {
            // If no division is selected, clear the units select box and show "Select Unit First" message
            document.getElementById("divisions").innerHTML = "<option value=\"\">Select division First</option>";
        } else {
            // If a division is selected, use AJAX to dynamically populate the units select box
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("units").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_unit.php?divID=" + division_id, true);
            xhttp.send();
        }
}
</script>
