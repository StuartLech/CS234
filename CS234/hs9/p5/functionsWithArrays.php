<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

function randomArray() {
    $rows = rand(1,5);
    $cols = rand(1,5);
    $array = NULL;
    $data = NULL;
    $row = NULL;

   
    for ($c = 1; $c <= $cols; $c++) {
        $row[$c-1] = "col$c";
    }
    $array['header'] = $row;


    for ($r = 0; $r < $rows; $r++) {
        for ($c = 0; $c < $cols; $c++) {
            $row[$c] = rand(1,10);
        }
        $data[$r] = $row;
    }
    $array['data'] = $data;
    return $array;
}

function buildTable($sArray) {
    $html = '<table class="w3-table-all w3-large">';

 
    $html .= '<thead>';
    foreach ($sArray['header'] as $header) {
        $html .= "<th>$header</th>";
    }
    $html .= '</thead>';


    $html .= '<tbody>';
    foreach ($sArray['data'] as $row) {
        $html .= '<tr>';
        foreach ($row as $cell) {
            $html .= "<td>$cell</td>";
        }
        $html .= '</tr>';
    }
    $html .= '</tbody>';

    $html .= '</table>';
    return $html;
}
?>

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
            &copy; <?php echo date('Y'); ?> Stuart Lech
        </footer>
    </body>
</html>
