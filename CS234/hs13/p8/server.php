<?php

function getDatabaseConnection() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=my_db', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

function isValidPassword($password) {
    $length = strlen($password);
    $hasUppercase = strtolower($password) !== $password;
    return ($length >= 7 && $length <= 12 && $hasUppercase);
}

function registerUser($username, $password) {
    $pdo = getDatabaseConnection();

    $stmt = $pdo->prepare("SELECT * FROM user_info WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return "Username already exists.";
    }

    if (!isValidPassword($password)) {
        return "Invalid password format.";
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $insertStmt = $pdo->prepare("INSERT INTO user_info (username, password) VALUES (:username, :password)");
    $insertStmt->bindParam(':username', $username);
    $insertStmt->bindParam(':password', $hashedPassword);
    $insertStmt->execute();

    return "User registered successfully!";
}

$userStatus = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = getDatabaseConnection();
    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";
    $userStatus = registerUser($username, $password);
}

echo $userStatus;

$createTableQuery = "CREATE TABLE IF NOT EXISTS user_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
$pdo->exec($createTableQuery);

?>
