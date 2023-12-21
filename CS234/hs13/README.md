#  bcryptHashing - 40 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p8` folder to [Moodle](classes.cs.siue.edu).

## Problem Description
In this assignment you are to use the cryptography hash function `bcrypt` to encrypt a password. Such `hashed` password would then be saved into the database for each user. Best practice dictates that passwords should always be saved as a hash, rather than as plain text.


## Problem Instructions
1. Run `MAMP` to start the web server. Use your chosen browser to render the page. As you code the page make sure you refresh the browser to verify your efforts as you progress. **DO NOT** wait until you code the entire page to test.

## Problem definition: The user will provide a username and a password. The password will be of length between 7-12 characters and with at least one uppercase letter. Check whether the user exists or not if it exists echo username already exists. If it does not exist, check whether the password followed the criteria or not. If it does then ONLY insert the username and the password in hashed format to the database.

    #### Update the `<footer>` element
1. Type your name in the copyright line inside the `<footer>` element.

    #### Variable definition(s)
1. Define the variable `$year` and initialize it with the value returned from the call to the built-in function `date('Y')`. The function returns the *year* component of the current date and time on your system. This value is displayed in the copyright inside the footer.

1. Define the variable `$userStatus` and initialize it with an empty string. This variable will hold the verification status of the user checked against all the users in the database.

1. Define the variable `$pwdEntered` and initialize it with an empty string. This variable will hold the original password entered that is to be hashed. This would be the value entered by a user on a registration form for instance.

1. Define the variable `$pwdHashed` and initialize it with an empty string. This variable will hold the hashed password and is what gets stored in a database.



    #### Function definitions
    You will implement a number of short functions to carry out each needed step. This *modular* approach will make it easier to write and ultimately debug the application.

    #### Create the front end.
1. Create a form which takes two inputs: the username and a password. Ask the user to create a password which has a length between 7-12 characters.It should have at least one capital letter in it.  Put the password criteria into the front page with a <h6> tag, so that the user knows the valid password format. Use the POST method to send information to the server. connect a PHP file called `server.php` as an action.


    #### Create a PDO connection and a table
1. Create a PDO connection in a PHP file `server.php`. Then create a table `user_info` with attributes `id`, `username` and `password`. NOTE: Please check whether the code is able to create a table or not before moving further. 


    #### `check_user` function definition
1. Define the function `check_user()` that takes two arguments, `$username` and the `password` that represents the username extracted from the `$_POST` superglobal array. Check to make sure that this `username` is set first, using the `isset()` function. 
2. if it is set check whether the user already exists in the database or not if it does not that means you can insert it into the database. BUT you cannot insert the user into the database since you have to check the validity of the password.
3. Check whether the password matches the criteria of a good password (as mentioned above), call a function `check_password` and return a true or false value. True if the password is correct, false if the password does not follow the criterion.

    #### `check_password` function definition
1.  Define the function `check_password()`, the input will be a `password`. Inside of this function check the length of the password and whether it contains at least one upper case letter. Hint: to check for upper case use in-build function `strtolower` in a clever logical manner. Or you can use any logic or function you prefer. Return a True or False value. 

1. Test your code thoroughly before you submit.