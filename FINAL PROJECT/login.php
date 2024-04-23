<?php 
require "includes/header.php"; 
require "config.php";

session_start();

if(isset($_SESSION['username'])) {
    header("location: index.php");
    exit;
}

$message = '';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $pdo = getDatabaseConnection();
    $login = $pdo->prepare("SELECT * FROM registration WHERE username = :username");
    $login->bindParam(':username', $username);
    $login->execute();

    if($login->rowCount() > 0) {
        $data = $login->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $data['password'])) {
            $_SESSION['username'] = $data['username'];
            header("location: index.php");
        } else {
            $message = "Wrong Password";
        }
    } else {
        $message = "User not registered";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-card-4 w3-light-grey w3-margin w3-padding-large" style="max-width: 500px; margin: auto;">
    <h2 class="w3-center">Please Sign In</h2>
    <?php if($message != ''): ?>
        <p class="w3-text-red w3-center"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="login.php" class="w3-container">
        <p>      
            <label for="username" class="w3-text-black">Username:</label>
            <input class="w3-input w3-border" type="text" id="username" name="username" placeholder="Enter your username" required>
        </p>
        <p>      
            <label for="password" class="w3-text-black">Password:</label>
            <input class="w3-input w3-border" type="password" id="password" name="password" placeholder="Enter your password" required>
        </p>
        <p>
            <button class="w3-button w3-black w3-section" type="submit" name="submit">Login</button>
        </p>
    </form>
</div>

</body>
</html>

<?php require "includes/footer.php"; ?>