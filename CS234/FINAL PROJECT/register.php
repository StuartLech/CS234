<?php 
require "includes/header.php"; 
require "config.php";

session_start();

$message = '';

if(isset($_POST['submit'])) {
    if($_POST['username'] == '' OR $_POST['password'] == '') {
        $message = 'Username or Password cannot be empty';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $pdo = getDatabaseConnection();
        $stmt = $pdo->prepare("SELECT * FROM registration WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $message = "Username already exists.";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $insert = $pdo->prepare("INSERT INTO registration (username, password) VALUES (:username, :password)");
            $insert->bindParam(':username', $username);
            $insert->bindParam(':password', $hashedPassword);
            $insert->execute();
            $message = "User successfully registered";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<div class="w3-container w3-card-4 w3-light-grey w3-margin w3-padding-large" style="max-width: 500px; margin: auto;">
    <h2 class="w3-center">New User Registration</h2>
    <?php if($message != ''): ?>
        <p class="w3-text-red w3-center"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="register.php" class="w3-container">
        <p>      
            <label class="w3-text-black">Username:</label>
            <input class="w3-input w3-border" type="text" id="username" name="username" placeholder="Choose a username" required>
        </p>
        <p>      
            <label class="w3-text-black">Password:</label>
            <input class="w3-input w3-border" type="password" id="password" name="password" placeholder="Choose a password" required>
        </p>
        <p>
            <button class="w3-button w3-black w3-section" type="submit" name="submit">Register</button>
        </p>
    </form>
</div>

</body>
</html>

<?php require "includes/footer.php"; ?>
