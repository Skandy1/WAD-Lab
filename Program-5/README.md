# Program 5

Write a PHP program to read Student Data from an XML file and store into the MySQL database .

**Using mysql functions and reading XML data from PHP**

```php
<?php 
   $xmlDoc = new DOMDocument(); // creating an object of DOMDocument class
	$xmlDoc->load("Student_details.xml"); // reading data from the XML file
?>
```

### How to execute?

:information_source: **Make sure you use the file 'fix_mysql.inc.php' to replace mysqli commands.**

1. Fork on download in a zip file and extract in your local machine.
2. Copy this folder into C:/wamp64/www/
3. Start apache server using WAMP or XAMPP.
4. Open MYSQL console and follow this [video](images/create_database.mp4) to create database and table.
5. Open browser of your choice and enter **localhost/Program-5**

### Screenshot

------

![5.1](images/5.1.gif)

##### Date: 18/5/2021

