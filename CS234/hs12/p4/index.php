<!DOCTYPE html>
<html>
    <head>
        <title>p4-phpUpdateTable</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body class="w3-panel">
        <header class="w3-container w3-khaki"><h1>p4 - PHP Update Table</h1></header>
        <main class="w3-panel">
            <div>
                <?php displayRecords(); ?>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <p>
                    <label>Change grade to: <?php echo gradeDropdown(); ?></label>
                    <label>for record id: <?php echo idDropdown(); ?></label>
                </p>
                <p>
                    <button class="w3-button w3-green w3-block w3-round">Update Grade</button>
                </p>
            </form>
        </main>
        <footer class="w3-panel w3-center w3-text-gray w3-small">
            &copy; <?php echo date("Y"); ?>
        </footer>
    </body>
</html>
