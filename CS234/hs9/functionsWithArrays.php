 <?php
    // Turn on error reporting.
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    function randomArray() {
        /* Creates a random associative array of two keys:
         * 'header' => ['h1', 'h2', ...]
         * 'data' => [ [v1, v2, ...], [v1, v2, ...], ...]
         * 
         * where 'header' is an indexed array of column headers
         * and 'data' is a two-dimensional array of data vallues.
         */
        $rows = rand(1,5);
        $cols = rand(1,5);
        $array = NULL;
        $data = NULL;
        $row = NULL;


        // First key is for column headers.
        for ($c = 1; $c <= $cols; $c++) {
            $row[$c-1] = "col$c";
        }
        $array['header'] = $row;

        // Second key is for the data.
        for ($r = 0; $r < $rows; $r++) {
            for ($c = 0; $c < $cols; $c++) {
                $row[$c] = rand(1,10);
            }
            $data[$r] = $row;
        }
        $array['data'] = $data;
        return $array;
    }

    // Type your code here
    
    

    
?>

<!-- HTML rendered as is. Note the PHP drop-ins, i.e. PHP tags. -->
 <!DOCTYPE html>
 <html>
     <head>
         <title>p5-functionsWithArrays</title>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     </head>

     <body class="w3-panel">
         <header class="w3-container w3-khaki"><h1>p5 - Functions With Arrays</h1></header>
        
        <main class="w3-container">
            <br><br>
            <?php echo buildTable(randomArray()); ?>
            <br><br>
            <?php echo buildTable(randomArray()); ?>
            <br><br>
            <?php echo buildTable(randomArray()); ?>
        </main>

         <footer class="w3-panel w3-center w3-text-gray w3-small">
             &copy; <?php echo $year; ?> Type your name here
        </footer>
     </body>
 </html>