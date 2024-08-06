# hs1-Setup

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.

## Description
* Use **Visual Studio Code** (**VSC**) to create, and type the following program.

## Set up the folders
1. Use your file manager (**Mac**: Finder or **Win**: Windows Explorer) to navigate to the `htdocs` folder. 
1. **Win users only:** Under `htdocs` you will find an `index.php` file. Rename this to `index_old.php`.
1. Under the folder `htdocs` create a folder to store all your CS 234 homework sets. Name this folder `CS234`.
1. Under the folder `CS234` create a folder for the homework set itself. Name this folder `hs1-Setup`. You may want to use this naming convention for all future homework sets.
1. Under the folder `hs1-Setup` create a folder named `p1`. This is the problem folder. Each future homework set will consist of a number of problems, so this naming convention will make things a bit more organized.


## Start VSC
1. Open the VSC IDE.
1. Select the menu option *File > Auto Save*. This option will automatically save all your files after 1 second, thus assuring you never forget to save changes you make to any file. You only have to do this once and it will remain checked for all future projects, until you uncheck it.

## [4 pts] Edit index.html
1. Select the menu option *File > Open...*, navigate to the `hs1` folder, select the folder `p1` and open it up.
1. Back in VSC select the `p1` folder in the *Explorer* window to expand it. The Explorer window should be visible, but if not click the top icon in the left margin. It looks like two stacked documents.
1. With the `p1` folder still selected, click the first icon that appears to the right of the folder name. This creates a new file. Alternatively, you may right-click under the expanded folder's name and click on *New File*.
1. Type `index.html` as the name of the file. The file will open in the editor on the right.
1. Type the following code in `index.html`.

    ```
    <!--   File: index.html
     Author: Type your name here
    -->

    <!DOCTYPE html>
    <html>
        <head>
            <title>My First Web Page</title>
        </head>

        <body>
            <p>This is my first HTML web page.</p>
            <p>I used VSC to create this.</p>
        </body>
    </html>
    ```

## [3 pts] Verifying the server status
1. Start MAMP and verify that the Apache server is running.
1. Take a screenshot of the MAMP window, making sure the server status is visible. Both servers (Apache, MySQL) should be green.
1. Save the screenshot in your `p1` folder with the name `server-status`.

## Render the web page
Rendering the web page simply means viewing it in a browser.

1. Make sure MAMP is still running.
1. Open your browser.
1. In the address box enter the url: `localhost:8888` and press enter. Navigate to the `p1` folder.
1. The page should now load and the two lines of output displayed.
1. Resize the browser to a smaller size and take a screenshot of the browser window. Save it in your `p1` folder with the name `browser`.
1. Congrats on your creating your first HTML page and viewing it. 


## [3 pts] Verifying MySQL status
The verification will make sure your OS can locate the `mysql` and `mysqld` binaries. The `mysql` app is the *Cient Monitor* and `mysqld` is the actual database server.

* **Mac users only:** Run the `Terminal` app under `/Applications/Utilities`. This is your shell prompt.
* **Win users only:** In the search box type cmd and press *enter*. Click on `Command Prompt` to create a command prompt.

1. At your prompt type: `mysql --version` and press *enter*.
1. If your PATH was updated correctly (refer to Setup slides), the version number will be displayed.
1. Take a screenshot of the command/shell window and save it in your `p1` folder with the name `mysql-version`.
1. At your prmpt type: `mysqld --version` and press *enter*.
1. Take a screenshot of the command/shell window and save it in your `p1` folder with the name `mysqld-version`.

## Upload your code and screenshots
Now that your web page was rendered successfully, upload the `p1` folder to [Moodle](classes.cs.siue.edu).


