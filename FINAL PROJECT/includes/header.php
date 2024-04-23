<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .topnav a {
            float: right;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="w3-bar w3-black">
    <?php if(!isset($_SESSION['username'])): ?>
        <a href="login.php" class="w3-bar-item w3-button w3-right">Login</a>
        <a href="register.php" class="w3-bar-item w3-button w3-right">Register</a>
    <?php else: ?>
        <a href="index.php" class="w3-bar-item w3-button w3-right"><?php echo $_SESSION['username']; ?></a>
        <a href="create.php" class="w3-bar-item w3-button w3-right">Create</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-right">Logout</a>
    <?php endif; ?>
</div>

</body>
</html>
