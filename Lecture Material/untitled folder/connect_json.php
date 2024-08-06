<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];

    $json_data=file_get_contents("my_file.json");
    $old_data=json_decode($json_data,true);

    $new_data=array(
        "name"=>$name,
        "email"=>$email
    );

    $old_data[]=$new_data;

    $upload_json_data=json_encode($old_data);
    file_put_contents("my_file.json",$upload_json_data);
}

?>