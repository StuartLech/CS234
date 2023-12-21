# p5 - registrationForm - 10 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p5` folder to [Moodle](classes.cs.siue.edu).


## Problem Instructions
In this assignment you are to create a web page that includes a form with basic form widgets such as labels, text boxes, check boxes and buttons.

*__Hint:__* As you develop the page use your browser to test out the site. 

1. Run `MAMP` to start up the web server. This will allow you to test the site as you implement each step and find any errors early during development.

1. Create the file `p5.html` under the `htdocs\hs4\p5` folder. This file will represent your web page for this assignment. Move the `added.html` file into this folder as well.

1. Create the page skeleton by adding the elements `<!DOCTYPE>, <html>, <head>, <title> and <body>`. You will be adding to each the missing components as you follow these instructions.

1. Add the content `"p5-registrationForm"` to the `<title>` element.

1. Add a `<p>` element to the `<body>`.
1. Add an `<h1>` element with content `"p5-Registration Form"` to the paragraph above.

1. Add a `<form>` element to the body next.
1. Add the `action` attribute with the value `"added.html"`. This is the target page then the form is submitted. It will normally be a .php file. you can find the added.html file with this homework in Moodle. 
1. Add the `method` attribute with value `POST`. This HTTP method represents the request type sent to the server. Notice the url box which contains the `name=value` pairs of form data collected by the browser and sent along with the request. You will learn how to process the data later in the course.

1. Add a `<fieldset>` element to the form. This add a border around the form.
1. Add six `<p>` elements to the `<fieldset>` element. Each one will contain form `<input>` elements as follows:
    
    1-5. Add a `<label>` followed by a text box to each `<p>`.
    6. Add a checkbox followed by a `<label>` to the last `<p>`.

1. Add the following textual content to each label respectively:
    1. `First:`
    1. `Last:`
    1. `Username:`
    1. `Password:`
    1. `Email:`
    1. `Add to mailing list`

1. Add a `placeholder` attribute to each of the five text `<input>` elements with the corresponding textual content:
    1. `First name`
    1. `Last name`
    1. `Username`
    1. `Password`
    1. `Email`

1. Add a `type` attribute to the password element with the content `"password"` to protect the entered password from prying eyes.

1. Add a `submit button` element with content `"Create Account"` to the last paragraph next. When this button is clicked the `action` attribute will redirect the browser to the page specified. Try this out.

1. Add a `<footer>` element to the body next.
1. Add the copyright &copy; 2021 `your name here` to the footer.

1. Verify and upload your submission.