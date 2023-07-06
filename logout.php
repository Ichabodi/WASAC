<?php
// Start a session
session_start();

// If the user clicks on the signout button
if(isset($_POST['signout'])) {
    // Destroy the session data
    session_destroy();
    // Redirect the user to the login page
    header('Location:homepage.php');
}
?>

