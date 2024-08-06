# p4 - phpUpdateTable - 40 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p4` folder to [Moodle](classes.cs.siue.edu).

## Problem Description
In this assignment you are to use `PDO` to access the database `my_db`. At first create this database. Create one JSON file known as `my_data.json`. Use this file to store data. 

Write a php program to retrieve this data and store the data into the database `my_db`. The table where you have to store the data will be `my_data`, Create the table inside of `my_db`. Finally retrieve the data fromm the database and display it in HTML. 

## Problem Instructions
1. create a file `jason_to_db.php` into the `htdocs\hs12\p4` folder. This file is the web page you will be using in this assignment.

1. create a file `index.php` where you will include the php file `jason_to_db.php`.

1. Run `MAMP` to start the web server. Use your chosen browser to render the page. As you code the page make sure you refresh the browser to verify your efforts as you progress. **DO NOT** wait until you code the entire page to test.

    #### Create the `my_db` database
1. Create the json file `my_data.json` the fields of json file are `name`, `age` and `occupation`. There should be at least three persons in the json file with their `name`, `age` and `occupation`. 

1. Import the the information provided in the json file `my_data.json`. Use `file_get_contents` and `json_decode` to retrieve the data from json file. Store the data into a variable.

1. Create a PDO with the database `my_db`. USE `PDO()` function


1. Create a table with four attributes `id` which will be NOT NULL and should be AUTO_INCREMENT. A `name` attribute with varchar type, a `occupation` field with varchar type and a `age` field with int type. The name of the table should be `my_data`. Check phpmyadmin page in MAMP whether the table is there or not after a successful creation. Use `CREATE TABLE IF NOT EXISTS` to create the table. 

1. Create `id` as the primary key.


1. Create a sql query to insert the data `name`, `age` and `occupation` into the table. Create placeholders for these data.

1. Create a PDO statement.

1. Bind the values (or parameters) of the json file to the sql statement. The `name` from json file should me inserted to the `name` attribute of the `my_data` table, similarly for all the other three fields.

1. After successful insertion of the data to the table, create a sql statement `SELECT * FROM my_data` and retrieve all the information from the table

1. Store the retrieve information in some variable and print them out as <h3> elements. In the output there should he at lease three person with their name, age and occupation. Use a unordered list to display this information. 
1. Close the PDO statement

1. Disconnect from the database by setting the `$pdo` instance to `null`.

1. Test your code thoroughly before you submit.