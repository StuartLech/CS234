<!-- File: ifelseif.php
 Modified: Type your name here -->

 <?php
    // Turn on error reporting.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    // Randomly generate a salary.
    $salary = rand(0, 200000);

    // Type your code here
    

    
 ?>

<!-- HTML rendered as is. Note the PHP drop-ins, i.e. PHP tags. -->
 <!DOCTYPE html>
 <html>
     <head>
         <title>p1-ifElseif</title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     </head>

     <body class="w3-panel">
         <header class="w3-container w3-khaki"><h1>p1-If Elseif</h1></header>
         
         <main>
            <p>
                <label class="w3-input">Salary: <?php echo '$' . number_format($salary, 0); ?></label>
            </p>
            <p>
                <label class="w3-input">tax rate: <?php echo number_format($taxRate, 0) . '%'; ?></label>
            </p>
            <p>
                <label class="w3-input">tax: <?php echo '$' . number_format($tax, 0); ?></label>
            </p>
         </main>

         <footer class="w3-panel w3-center w3-text-gray w3-small">
             &copy; <?php echo $year; ?> Type your name here
        </footer>
     </body>
 </html>