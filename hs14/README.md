# p3 - sessions - 30 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p3` folder to [Moodle](classes.cs.siue.edu).

## Problem Description
In this assignment you are to use `sessions` to save a user's *name*, *favorite color*, and *favorite music* and personalize a message when the sessions are set.


## Problem Instructions
1. Create a file `index.php`. This file is the web page you will be using in this assignment.

1. Run `MAMP` to start the web server. Use your chosen browser to render the page. As you code the page make sure you refresh the browser to verify your efforts as you progress. **DO NOT** wait until you code the entire page to test.

    #### Create a `<footer>` element inside the index.php
1. Type your name in the copyright line inside the `<footer>` element

    #### Create input fields to take user inputs. There will be four fields viz first name, last name, favorite color and favorite music genre. 
1. Create a form for these inputs. `name` the input fields appropriately.

#### create a file `connect.php` and connect it to the `index.php` file with action field.


    #### Start the session inside `connect.php`
1. First thing is start the session.
2. Check whether the global variable $_SERVER resuest method is post or not. 
3. initialize the $_SESSION variables appropriately with user inputs. 


    #### Function definitions
    You will implement a number of short functions to carry out each needed step. This *modular* approach will make it easier to write and ultimately debug the application.
	

    #### `showSessions()` function definition
1.  Define the function `showSessions()` that does not take any parameters. The function should check if the `first` (first name), `color`, and `music` sessions are set and return the message:

    * `if set`:
    ```
    Welcome John. Your favorite color is blue and music is rock.`
    ```
    where `John`, `blue`, and `rock` are replaced with the actual values stored in the respective sessions.

    * `if not set`: 
    
    simply return an empty string
2. Depending on the color the message colour will change if the color is blue then the above message should be written in blue. An example: `<h1 style="color: value;"> msg </h1>` of how to change font color. Remember you have to write the HTML as PHP code. For example echo "<h1> hello </h1>";
 
3. Create a logout button (take help from my code given in moodle). When user click on the logout button open another page called logout.php where it will display some message.

#### Inside the `logout.php` 

Display a message saying 
    ```
    John you are successfully logout of the system.`
    ```
1.The colour of the above message should be in users favorite colour. 
2. destroy the session and assign the session variable to a null. If you destroy the session before the message then the above message will not get printed in the user's favorite color. Because the session variable is already destroyed. If you want, you can again call another php file to destroy the session, it is all upto you how you create your logic. 

