<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $_SESSION['first'] = $_POST['first'];
    $_SESSION['last'] = $_POST['last'];
    $_SESSION['color'] = $_POST['color'];
    $_SESSION['music'] = $_POST['music'];

    header("Location: index.php"); 
}
?>
