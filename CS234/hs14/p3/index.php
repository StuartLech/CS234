<?php
session_start(); // Start the session.

// Check if session variables are set and display them.
if (isset($_SESSION['first']) && isset($_SESSION['color']) && isset($_SESSION['music'])) {
    echo "<h1 style='color: " . $_SESSION['color'] . ";'>Welcome " . $_SESSION['first'] . ". Your favorite color is " . $_SESSION['color'] . " and music is " . $_SESSION['music'] . ".</h1>";
    $loggedIn = true;
} else {
    echo "<h1>Welcome to our site!</h1>";
    $loggedIn = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Preferences</title>
</head>
<body>
    <?php if (!$loggedIn): ?>
        <form action="connect.php" method="post">
            First name: <input type="text" name="first"><br>
            Last name: <input type="text" name="last"><br>
            Favorite Color: <input type="text" name="color"><br>
            Favorite Music Genre: <input type="text" name="music"><br>
            <input type="submit" value="Submit">
        </form>
    <?php else: ?>
        <form action="logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    <?php endif; ?>

    <footer>
        <p>&copy; Stuart Lech</p>
    </footer>
</body>
</html>
