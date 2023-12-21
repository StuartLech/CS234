<?php
function getDatabaseConnection() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=project', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

function createTables($pdo) {
    $registrationTable = "CREATE TABLE IF NOT EXISTS registration (
        username VARCHAR(200) NOT NULL,
        password VARCHAR(200) DEFAULT NULL,
        PRIMARY KEY (username)
    );";

    $postsTable = "CREATE TABLE IF NOT EXISTS posts (
        ID INT(11) NOT NULL AUTO_INCREMENT,
        title VARCHAR(100) DEFAULT NULL,
        body TEXT,
        username VARCHAR(200) DEFAULT NULL,
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (ID),
        FOREIGN KEY (username) REFERENCES registration(username)
    );";

    $statsTable = "CREATE TABLE IF NOT EXISTS stats (
        ID INT(11) NOT NULL,
        liked INT(11) DEFAULT 0,
        disliked INT(11) DEFAULT 0,
        PRIMARY KEY (ID),
        FOREIGN KEY (ID) REFERENCES posts (ID)
    );";

    // Execute the queries
    $pdo->exec($registrationTable);
    $pdo->exec($postsTable);
    $pdo->exec($statsTable);
}


?>
