<?php
session_start(); 


$color = isset($_SESSION['color']) ? $_SESSION['color'] : 'black';
$firstName = isset($_SESSION['first']) ? $_SESSION['first'] : 'User';


session_unset();
session_destroy();


echo "<h1 style='color: " . $color . ";'>" . $firstName . " you are successfully logged out of the system.</h1>";
?>
