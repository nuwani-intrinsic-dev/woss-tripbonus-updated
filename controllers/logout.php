<?php
session_start();
// Unset all session variables
$_SESSION = array();
// Destroy the session.
session_destroy();
// Redirect to login page or home page
header("Location: ../index.php");
exit(); 