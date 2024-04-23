# p4 - sanitizedPOST - 20 pts

## 1. Preview Instructions (VSC)

This document is written using `Markdown` and this format includes mark-up
syntax along with textual content. In order to view the formatted document do
one of two things:

* Press `Shift + cmd + V` on a **Mac** or `Shift + ctrl + V` on a **Win** PC.
* `Right+click` on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and
follow format requirements and file names.

## 2. Submission Instructions

Upload your `p4` folder to [Moodle](classes.cs.siue.edu).

## 3. Problem Description

In this assignment you are to process and validate a form that is submitted
using the `POST` method to a script `process.php` for processing.

The provided file `sanitizedPOST.php` consists of a partially completed **HTML**
section and an incomplete **PHP** block. You are to complete the PHP block as
instructed below.

The HTML section uses the *W3.CSS* framework to style the page for improved
readability. The page displays the results of the computations performed in the
*PHP* block and which you are to code.

Notice the use of the **PHP drop-ins**, i.e. the use of the `<?php` and `?>`
tags to execute *PHP* code from within the *HTML* elements.

The *PHP* block starts off by turning on error handling so debugging the code
can become a bit easier.

## 4. Problem Instructions

1. Move the file `sanitizedPOST.php` to the `htdocs\hs10\p4` folder. This file
is the web page you will be using in this assignment.

1. Run `MAMP` to start the web server. Use your chosen browser to render the
page. As you code the page make sure you refresh the browser to verify your
efforts as you progress. **DO NOT** wait until you code the entire page to test.

## 5. Update the `<footer>` element

1. Type your name in the copyright line inside the `<footer>` element.

## 6. Variable definition(s)

1. Define the variable `$year` and initialize it with the value returned from
the call to the built-in function `date('Y')`. The function returns the *year*
component of the current date and time on your system. This value is displayed
in the copyright inside the footer.

## 7. The `process.php` file

1. Add a new file to your site named `process.php`. This file will validate the
submission of the form and echo relevant messages or values.

    Since the form was submitted using the `POST` method, use the `$_POST`
    superglobal to retrieve the collected data.

    You should also notice the `url` in the address bar that will **NOT** show
    the `name=value` pairs of each data collected, since those values are now
    transmitted inside the body of the request object. Thus, the posting of form
    data offers an elevated level of security.

    *__Note:__* If submitting via the `http` protocol, then the data is not
    secure still, so make sure the `https` protocol is used since it encrypts
    the transmitted data.

## 8. The `getValue()` function

1. Define the function `getValue()` that takes a single argument, `$key` that
represents a key in the `$_POST` superglobal array. Check to make sure that this
key is set first, using the `isset()` function.

    * If the key is set return the sanitized value after calling the two
    functions `htmlspecialchars()` and `trim()`.
    * If the key is not set simply return an empty string.

## 9. Validate the month text box

1. Call the `getValue()` function to validate the month.
1. If a month is provided echo the message in a `<p>` element:

    ```text
    Month: entered month
    ```

     where `entered month` is the month entered in the text box.
1. If a month is not provided echo the message in a `<p>` element:

    ```text
    Month: Not provided
    ```

## 10. Validate the marital status radio buttons

1. Call the `getValue()` function to validate the marital status.
1. If a radio is checked echo the message in a `<p>` element:

    ```text
    Marital status: checked status
    ```

     where `checked status` is the marital status checked.
1. If a radio is not checked echo the message in a `<p>` element:

    ```text
    Marital status: Not provided
    ```

## 11. Validate the favorite music genre check boxes

1. Validation here is addressed a bit differently. Rather than calling the
`getValue()` function, check each value against the possible options (`Pop`,
`Reggae`, and `Rock`).
1. If a check box is checked echo a list of the checked boxes in a `<ul>`
element inside a `<p>` element:

    ```html
    Favorite music genre: 
        • checked box
        • checked box
    ```

     where `checked box` is the music genre checked.
1. If a check box is not checked echo the message in a `<p>` element:

    ```text
    Favorite music genre: Not provided
    ```

## 12. Validate the state dropdown

1. Call the `getValue()` function to validate the state.
1. If a state is selected echo the message in a `<p>` element:

    ```text
    State: selected state
    ```

     where `selected state` is the state selected.
1. If a state is not selected echo the message in a `<p>` element:

    ```text
    State: Not provided
    ```

## 13. Test your code thoroughly before you submit
