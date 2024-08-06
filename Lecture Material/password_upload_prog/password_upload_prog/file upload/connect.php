<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $target_dir="uploads/";
    $target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
    $status=1;

    if(file_exists($target_file)){
        echo "FILE ALREADY EXIST";
        $status=0;
    }

    if($_FILES["fileToUpload"]["size"]>500000){
        echo "ERROR:FILE TOO LARGE";
        $status=0;
    }

    $image_format=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($image_format != "jpg" && $image_format != "png"){
        echo "PLEASE UPLOAD JPG OR PNG FILE";
        $status=0;
    }

    if($status==0){
        echo "error uploading the file";
    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
        {
            echo "file uploades successfully";
        }else{echo "error uploading the file";}
    }

}


?>