<?php
// Variables for the database connection
$host = 'localhost';
$db   = 'my_db';
$user = 'root';
$pass = 'root';
$charset = 'utf8mb4';
$port = '8889';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Establishing a PDO connection
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Creating the table my_data
    $sql = "CREATE TABLE IF NOT EXISTS my_data (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        age INT NOT NULL,
        occupation VARCHAR(255) NOT NULL
    )";
    $pdo->exec($sql);

    // Reading JSON file
    $jsonData = file_get_contents('my_data.json');
    $data = json_decode($jsonData, true);

    // Insert data into the database
    $stmt = $pdo->prepare("INSERT INTO my_data (name, age, occupation) VALUES (:name, :age, :occupation)");

    foreach ($data as $item) {
        $stmt->execute([
            ':name' => $item['name'],
            ':age' => $item['age'],
            ':occupation' => $item['occupation'],
        ]);
    }

    // Select and display data from the database
    $stmt = $pdo->query("SELECT * FROM my_data");
    $persons = $stmt->fetchAll();

    // Close the database connection
    $pdo = null;
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
    die();
}
?>
