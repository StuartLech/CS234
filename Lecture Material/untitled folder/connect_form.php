<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];

    try{
        $pdo=new PDO('mysql:host=localhost;dbname=my_db','root','root');

        $sql="INSERT INTO my_table(name,email) VALUES(:name,:email)";
        $statement=$pdo->prepare($sql);

        $statement->bindParam(':name',$name);
        $statement->bindParam(':email',$email);

        if($statement->execute()){
            echo "Data entered successfully";
        } else{
            echo "error entering the data";
        }


    }catch(PDOException $e){
        echo "Error in creating the PDO".$e->getMessage();
    }
}

?>
