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

 _Note: You will also need to set up your local SQLite database. See official docs [here](https://www.sqlite.org/cli.html). Unless you change my code, you'll need to name the database `test` and create a `books` table in that db._
 
 _Note: Users on Windows or Linux can ignore the above MAMP directions and download [XAMPP](https://www.apachefriends.org/index.html) instead. Not sure of the specific setup, but they probably have good docs?_
 
## Want to use a MySQL db instead?
- Take a look at the code on [this](https://github.com/deeheber/book-inventory/tree/heroku2) branch.
- A local MySQL db instance will run through MAMP if you're on a Mac.
 
## Coming soon
Check out the [issues](https://github.com/deeheber/book-inventory/issues) to see new features and improvments
