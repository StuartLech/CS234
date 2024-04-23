# p5 - functionsWithArrays - 20 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p5` folder to [Moodle](classes.cs.siue.edu).

## Problem Description
In this assignment you are to use arrays and functions to build an HTML table displaying the array elements.

The provided file `functionsWithArrays.php` consists of a partially completed **HTML** section and an incomplete **PHP** block. You are to complete the PHP block as instructed below.

The HTML section uses the *W3.CSS* framework to style the page for improved readability. The page displays the results of the computations performed in the PHP block and which you are to code. 

Notice the use of the PHP drop-ins, i.e. the use of the `<?php` and `?>` tags to execute PHP code from within the HTML elements.

The PHP block starts off by turning on error handling so debugging the code can become a bit easier. 


## Problem Instructions
1. Move the file `functionsWithArrays.php` to the `htdocs\hs9\p5` folder. This file is the web page you will be using in this assignment.

1. Run `MAMP` to start the web server. Use your chosen browser to render the page. As you code the page make sure you refresh the browser to verify your efforts as you progress. **DO NOT** wait until you code the entire page to test.

    #### Update footer
1. Type your name in the copyright line inside the `<footer>` element.


    #### Variable definition(s)
1. Define the variable `$year` and initialize it with the value returned from the call to the built-in function `date('Y')`. The function returns the *year* component of the current date and time on your system. This value is displayed in the copyright inside the footer.

    #### randomArray() function defintion
    The provided `randomArray()` function creates a random associative array with two keys: `header` and `data`.

    The `header`'s value is an indexed array of column headers to be used when building an HTML table. A sample `header` is:

    `'header' => ['col1', 'col2']` for a 2-column table

    The `data`'s value is an indexed two-dimensional array containing the data cell values of the table. A sample `data` is:

    `'data' => [ [1, 2], [5, 2], [9, 3]]` for a 3x2 table

    #### buildTable() function definition
1. Define the function `buildTable` that accepts an `$array` parameter, an array generated from the `randomArray()` function. Build an HTML table that includes a `<caption>`, `<thead>`, and `<tbody>` elements.

1. Add the class `w3-table-all` to the `<table>` tag.
1. Add the class `w3-large` to the `<caption>` tag.

1. The `<thead>` element should contain the values in the `header`'s array.
1. The `<tbody>` element should contain the values in the `data`'s two-dimensional array.

1. Test your code thoroughly before you submit.