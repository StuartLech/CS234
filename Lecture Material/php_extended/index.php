<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $jsonData=file_get_contents("json_data.json");

        $jsonArray=json_decode($jsonData,true);

        $name=$jsonArray[2]["name"];
        $age=$jsonArray[2]["age"];
        $occupation=$jsonArray[2]["occupation"];

        foreach ($jsonArray as $person){
            echo '<h1> Name: '.$person["name"].'</h1>';
            echo '<h1> Age: '.$person["age"].'</h1>';
            echo '<h1> occupation: '.$person["occupation"].'</h1>';
        }

    ?>
</body>
</html>
