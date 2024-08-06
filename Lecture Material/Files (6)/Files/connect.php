<?php

$dsn='mysql:host=localhost;dbname=the_db';
$username='root';
$password='root';

try{
    $pdo= new PDO($dsn,$username,$password);
}catch(PDOException $e)
{
    die('Connection error'.$e->getMessage());
}

$sql="CREATE TABLE IF NOT EXISTS my_table(
    id INT(7) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
)";

$pdo_statement=$pdo->prepare($sql);

if($pdo_statement->execute()){
    echo "Table created successfully";
}else{
    echo "error in creating the table".$pdo_statement->error;
}

echo "Connection successful";
$pdo_statement->close();
$pdo=null;

?>