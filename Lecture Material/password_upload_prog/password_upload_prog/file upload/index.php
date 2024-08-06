<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Upload an image </h1>
    <form action ="connect.php" method="POST" enctype="multipart/form-data">
        <label for="upload">Upload an image</label>
        <input type="file" id="upload" name="fileToUpload">
        <br>
        <input type="submit" value="Upload">
</form>
</body>
</html>