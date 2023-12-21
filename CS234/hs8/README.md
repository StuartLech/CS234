# p1 - ifElseif - 20 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p1` folder to [Moodle](classes.cs.siue.edu).

## Problem Description
In this assignment you are to use an `if-elseif` construct to determine the amount of federal tax owed based on a randomly generated salary.

The file provided `ifelseif.php` consists of a completed **HTML** section and an incomplete **PHP** block. You are to complete the PHP block as instructed below.

The HTML section uses the *W3.CSS* framework to style the page for improved readability. The page displays the results of the computations performed in the PHP block and which you are to code. 

Notice the use of the PHP drop-ins, i.e. the use of the `<?php` and `?>` tags to execute PHP code from within the HTML elements.

The PHP block starts off by turning on error handling so debugging the code can become a bit easier. 

It then randomly generates a salary amount in the closed range [0,200000].

<b> In this program a random salary will get generated and stored in a variable salary. Compare that salary against the income caps (given below), Depending on the income cap the tax rate (given below) will be determined, put tax rate in another variable called taxRate. Do the simple math and put the answer in a variable called tax. 

At first simply run the php program just to see what the output looks like, there will be error code since the program is not implemented in the beginning <b>

## Problem Instructions
1. Move the file `ifelseif.php` to the `htdocs\hs8\p1` folder. This file is the web page you will be using in this assignment.

1. Run `MAMP` to start the web server. Use your chosen browser to render the page. As you code the page make sure you refresh the browser to verify your efforts as you progress. **DO NOT** wait until you code the entire page to test.

    #### `<footer>` element
1. Type your name in the copyright line.

    #### Constant definitions
1. Define the following constants for the tax rates:
    ```
    TAX_RATE_10 = 0.0
    TAX_RATE_50 = 15.0
    TAX_RATE_70 = 20.0
    TAX_RATE_100 = 30.0
    TAX_RATE_100_PLUS = 40.0
    ```

1. Define the following constants for the income caps:
    ```
    INCOME_CAP_10 = 10000
    INCOME_CAP_50 = 50000
    INCOME_CAP_70 = 70000
    INCOME_CAP_100 = 100000
    INCOME_CAP_100_PLUS = 100001
    ```

    #### Variable definitions
1. Define the variable `$year` and initialize it with the value `2021`. This value is displayed in the copyright inside the footer.

1. Define the variable `$tax` and initialize it to `0`. This variable will hold the federal tax owed. This value may be updated based on the salary generated. This value is displayed inside the `<main>` HTML element. Notice the use of the *`number_format()`* function that formats the results.

1. Define the variable `$taxRate` and initialize it with the `TAX_RATE_10` constant. This value may be updated based on the salary generated. This value is displayed inside the `<main>` HTML element. Notice the use of the *`number_format()`* function that formats the results.

    #### `if` construct
1. Write an `if-elseif` statement to compute the amount of federal tax owed on the generated salary and the corresponding tax rate bracket. **Note:** Make sure you use the defined constants rather than the hard-coded raw values.

1. Test your code thoroughly before you submit.