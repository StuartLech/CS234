<?php

$username=$_GET["username"]; #WARNING

switch($username){
    case 'admin':
        include ('admin_page.php');
        break;
    default:
        include('user_page.php');
        break;
        
}

?>