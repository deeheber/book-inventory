# Book inventory app

## Summary
This is a simple [PHP](http://www.php.net/) application that tracks and stores information about books in a [SQLite](https://sqlite.org/) database.

Working prototype deployed on Heroku using their JawsDB MySQL add-on [here](https://book-tracking.herokuapp.com/index.php)

## Features
- Read and display all books in the database
- Create a new book
- Delete a book
- Update a book

## Directions to run locally
1. clone the repo
2. install [MAMP](https://www.mamp.info/en/)
3. move project directory to `/Applications/MAMP/htdocs/`
4. open MAMP from `/Applications/MAMP/MAMP.app`
5. click on `start servers`
6. navigate to `localhost:8888` in a web browser

 _Note: you might also have to set up the database called test and create a books table in that db if requests aren't working. This can be done in PHPmyadmin link can be found on the launch page that opens in your browser after starting the servers from MAMP_
 
 _Note: users on Windows or Linux can ignore the above directions and download [XAMPP](https://www.apachefriends.org/index.html) instead. Not sure of the specific setup, but they probably have good docs?_
 
## MySQL options
If your prefer MySQL, take a look at the code on [this](https://github.com/deeheber/book-inventory/tree/heroku2) branch.

Alternatively, you can change line 8 of `connect.php` in the `master` branch to  
`$db = new PDO("mysql: host=localhost;dbname=$databaseName", $databaseUsername, $databasePassword);`
 
## Coming soon
Check out the [issues](https://github.com/deeheber/book-inventory/issues) to see new features and improvments
