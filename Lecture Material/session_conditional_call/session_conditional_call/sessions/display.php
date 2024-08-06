<?php

session_start();

if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    echo "<h2> Hello $username </h2>";
    echo "<form action='logout.php' method='post'>";
    echo "<input type='submit' value='Logout'>";
    echo "</form>";
}

?>


