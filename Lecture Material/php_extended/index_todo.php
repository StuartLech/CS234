<!DOCTYPE html>
<html>
<head>
<title> TO DO LIST </title>
</head>
<body>

<h1> TO DO LIST </h1>
<form action="index.php" method="get">
  <input type="text" name="task" placeholder ="Add a new task...">
  <input type="submit" value="Add">
</form>

<?php

session_start();

$to_do=$_SESSION['to_do'];

if($_GET['task']){
  $to_do[]=$_GET['task'];
  $_SESSION['to_do']=$to_do;

}

echo "<ul>";
foreach($to_do as $task){
  echo '<li>'.$task.'</li>';
}
echo '</ul>';


?>
</body>
</html>