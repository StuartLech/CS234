<?php
$dsn='mysql:host=localhost;dbname=my_db';
$username="root";
$password="root";

try{
    $pdo= new PDO($dsn,$username,$password);
}catch(PDOException $e){
    die("connection error".$e->getMessage());
}

$sql="CREATE TABLE IF NOT EXISTS my_table (
    id INT(7) NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    PRIMARY KEY(id)
)";

$stmt=$pdo->prepare($sql);

if ($stmt->execute()){
    echo "table created successfully";
}else {
    echo "error in creating the table".$stmt->error;
}

$sql="INSERT INTO my_table (name,email) VALUES (:name,:email)";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);

$name="john wick";
$email="john@siue.edu";
$stmt->execute();

$name="sponge bob";
$email="bob@water.edu";
$stmt->execute();

$sql="UPDATE my_table SET email=:new_email WHERE name=:name";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(":name","john wick");
$stmt->bindValue(":new_email","wick@japan_enjoying.com");

$stmt->execute();

$sql="SELECT * FROM my_table";
$stmt=$pdo->query($sql);

$results=$stmt->fetchALL();

foreach ($results as $result){
    echo '<br>'.$result['name'].'-'.$result['email'].'<br>';
}

$stmt->close();
$pdo=null;


?>