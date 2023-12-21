<?php

    // Turn on error reporting.

    error_reporting(E_ALL);

    ini_set('display_errors', '1');

 

    // Randomly generate a salary.

    $salary = rand(0, 200000);

    $year = 2023;

 

    const TAX_RATE_10 = 0.0;

    const TAX_RATE_50 = 15.0;

    const TAX_RATE_70 = 20.0;

    const TAX_RATE_100 = 30.0;

    const TAX_RATE_100_PLUS = 40.0;

 

    const INCOME_CAP_10 = 10000;

    const INCOME_CAP_50 = 50000;

    const INCOME_CAP_70 = 70000;

    const INCOME_CAP_100 = 100000;

    const INCOME_CAP_100_PLUS = 100001;

 

    $tax = 0;

    $taxRate = TAX_RATE_10;

 

    if ($salary <= 10000){

        $tax = TAX_RATE_10;

        $taxRate = INCOME_CAP_10;

    }

    elseif($salary <= 50000){

        $tax = TAX_RATE_50;

        $taxRate = INCOME_CAP_50;

    }

    elseif ($salary <= 70000){

        $tax =TAX_RATE_70;

        $taxRate = INCOME_CAP_70;

    }

    elseif($salary <= 100000){

        $tax = TAX_RATE_100;

        $taxRate = INCOME_CAP_100;

    }

    else{

        $tax = TAX_RATE_100_PLUS;

        $taxRate = INCOME_CAP_100_PLUS;

    }

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
    
                 &copy; <?php echo $year; ?> Stuart Lech
    
            </footer>
    
         </body>
    
    </html>