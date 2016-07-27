<?php 
session_start();
// Clear session
session_destroy();
// Redirect login
header('location:index.php');
?>