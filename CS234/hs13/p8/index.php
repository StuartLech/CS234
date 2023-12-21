<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        
        body {
            font-family: 'Times New Roman', serif;
        }
        .error {
            color: yellow;
        }
    </style>
</head>
<body>
    <h2>Password Requirements:</h2>
    <p>Password should be between 7-12 characters and contain at least one capital letter.</p>

    <form action="server.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Register">
    </form>

    <?php if (isset($userStatus)): ?>
        <p class="<?php echo $userStatus === 'User registered successfully!' ? 'success' : 'error'; ?>">
            <?php echo $userStatus; ?>
        </p>
    <?php endif; ?>

    <footer class="w3-panel w3-center w3-text-gray w3-small">
        &copy; <?php echo date('Y'); ?> Stuart Lech
    </footer>
</body>
</html>
