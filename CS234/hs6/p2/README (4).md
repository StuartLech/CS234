# p3 - dbCreateThreeTables - 20 pts

## Preview Instructions (VSC)
This document is written using `Markdown` and this format includes mark-up syntax along with textual content. In order to view the formatted document do one of two things:

1. Press `Shift + cmd + V` or `Shift + ctrl + V` on a **Mac** or **Win** PC respectively.
1. Right click on the file tab and select `Open Preview`.

Viewing the document in its formatted version will make it easier to read and follow format requirements and file names.


## Submission Instructions
Upload your `p3` folder to [Moodle](classes.cs.siue.edu).


## Problem Instructions
1. Move the file `README.md` to the `htdocs\hs6\p2` folder.

The questions you are to answer are prefixed with a **`Q:`** label. Your answers will be typed directly into the raw version of this document inside an answer block identified as:

**`A:`**
```
Type your answer here
```

*__Note:__* Use uppercase when typing SQL commands and type each part of the SQL statement on a separate line. For example:

```
SELECT *
FROM table
ORDER BY col
```

It is advisable that you use either the `mysql` client monitor or `phpMyAdmin` to perform the following steps and actually create the database and tables. That way you can test out your answers and gain experience interacting directly with the database server.

**Use the following key when answering the questions.**

* i - INT
* u - UNSIGNED
* c - CHAR
* vc - VARCHAR
* d - DOUBLE
* e - ENUM
* D - DATE
* DT - DATETIME
* NN - NOT NULL
* AI - AUTO_INCREMENT
* FK - FOREIGN KEY
* PK - PRIMARY KEY

___
## Questions
___
**`Q1:`** Type a SQL statement to create the database `p3_grades`

**`A1:`**

```sql

CREATE DATABASE p3_grades;

 ```

**`Q2:`** Type a SQL statement to create the primary table `student` with the following fields:

1. `id` iu AI NN PK
1. `eid` i NN
1. `first` vc(20) NN
1. `last` vc(30) NN

**`A2:`**

```sql

CREATE TABLE student (

     id INTEGER UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,

    eid INTEGER NOT NULL,

    First VARCHAR(20) NOT NULL,

    last VARCHAR(20) NOT NULL

);

 

```

**`Q3:`** Type a SQL statement to insert into the table `student` the following records:

1. `1, 800, 'Allison', 'Auburn'`
1. `2, 801, 'Barry', 'Brown'`
1. `3, 802, 'Cathy', 'Crimson'`
1. `4, 803, 'Frank', 'Fucia'`
1. `5, 804, 'Herald', 'Hibiscus'`

**`A3:`**

 

```sql

INSERT INTO student (eid, First , Last ) VALUES

(1, 800, 'Allison', 'Auburn'),

(2, 801, 'Barry', 'Brown'),

(3, 802, 'Cathy', 'Crimson'),

(4, 803, 'Frank', 'Fucia'),

(5, 804, 'Herald', 'Hibiscus');

 

```

**`Q4:`** Type a SQL statement to create the primary table `course` with the following fields:

1. `id` iu AI NN PK
1. `number` c(6) NN
1. `title` vc(50) NN
1. `hours` d(2,1) NN

**`A4:`**

 

```sql

CREATE TABLE course (

     id INTEGER UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,

    number CHAR(6) NOT NULL,

    title VARCHAR(50) NOT NULL,

    Hours Double(2,1) NOT NULL

);

 

```

**`Q5:`** Type a SQL statement to insert into the table `course` the following records:

1. `1, 'CS111', 'Computer Concepts', 3.0`,
1. `2, 'ENG101', 'English Composition', 3.0`,
1. `3, 'MA150', 'Calculus I', 5.0`,
1. `4, 'CS140', 'Intro to Computing I', 4.0`,
1. `5, 'CS150', 'Intro to Computing II', 3.0`,
1. `6, 'CS240', 'Intro to Computing III', 3.0`,
1. `7, 'MA125', 'College Algebra', 3.0`

**`A5:`**

 

```sql

INSERT INTO course (id, number, title, Hour)

VAlUES('CS111', 'Computer Concepts', 3.0),

(2, 'ENG101', 'English Composition', 3.0),

(3, 'MA150', 'Calculus I', 5.0),

(4, 'CS140', 'Intro to Computing I', 4.0),

(5, 'CS150', 'Intro to Computing II', 3.0),

(6, 'CS240', 'Intro to Computing III', 3.0),

(7, 'MA125', 'College Algebra', 3.0);

 

```

**`Q6:`** Type a SQL statement to create the associateive table `transcript` with the following fields:

1. `id` iu AI NN PK
1. `student$id` iu NN FK
1. `course$id` iu NN FK
1. `term` e('SP', 'SU', 'FA') NN
1. `year` i(4) NN
1. `grade` c(2)

**`A6:`**

 

```sql

CREATE TABLE transcript(

    id INTEGER UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,

    student$id INT UNSIGNED NOT NULL,

    course$id INT UNSIGNED NOT NULL,

    term ENUM ('SP', 'SU', 'FA') NOT NULL,

    year INT(4)NOT NULL,

    grade CHAR(2),

    PRIMARY KEY(id),

    FOREIGN KEY(student$id),REFERENCES student(id),

    FOREIGN KEY(course$id) REFERENCE course(id)

);

 

```

**`Q7:`** Type a SQL statement to insert into the table `transcrpt` the following records:

1. `1, 1, 'SP', 2018, 'A'`
1. `1, 2, 'SP', 2018, 'B'`
1. `1, 3, 'SU', 2018, 'A'`
1. `1, 4, 'FA', 2018, 'B'`
1. `1, 5, 'FA', 2018, 'C'`
1. `2, 1, 'FA', 2019, 'A'`
1. `2, 3, 'FA', 2019, 'WP'`
1. `2, 4, 'FA', 2019, 'B'`
1. `2, 7, 'FA', 2019, 'C'`
1. `3, 1, 'SU', 2020, 'A'`
1. `4, 2, 'FA', 2019, 'B'`
1. `4, 3, 'FA', 2019, 'C'`
1. `4, 1, 'SP', 2020, 'A'`
1. `4, 2, 'SP', 2020, 'B'`
1. `4, 3, 'SP', 2020, 'A'`

**`A7:`**



```sql

INSERT INTO transcript (id, student$id,course$id,term,year,grade) VALUES

(1, 1, 'SP', 2018, 'A')

(1, 2, 'SP', 2018, 'B')

(1, 3, 'SU', 2018, 'A')

(1, 4, 'FA', 2018, 'B')

(1, 5, 'FA', 2018, 'C')

(2, 1, 'FA', 2019, 'A')

(2, 3, 'FA', 2019, 'WP')

(2, 4, 'FA', 2019, 'B')

(2, 7, 'FA', 2019, 'C')

(3, 1, 'SU', 2020, 'A')

(4, 2, 'FA', 2019, 'B')

(4, 3, 'FA', 2019, 'C')

(4, 1, 'SP', 2020, 'A')

(4, 2, 'SP', 2020, 'B')

(4, 3, 'SP', 2020, 'A');

 

```

 
 

**`Q8:`** Type a SQL statement to update the year of row/tuple with `id=1` to `2023` in table `transcript`.

**`A8:`**
```sql
UPDATE transcript
SET year = 2023
WHERE id = 1;


```

**`Q9:`** Type a SQL statement to insert a new column into the table `transcript`, the name of the new column will be `remarks` and data type will be vc(50) and set it to `NULL`.

**`A9:`**
```sql
ALTER TABLE transcript
ADD remarks VARCHAR(50) NULL;


```
**`Q10:`** Type a SQL statement to insert into the column `remarks` (from Q9) where `grade` is equal to `WP` the statement `no effect on the GPA`.

**`A10:`**
```sql
UPDATE transcript
SET remarks = 'no effect on the GPA'
WHERE grade = 'WP';

```



