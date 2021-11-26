# Book inventory app

**Note this repo is archived and won't be receiving updates, so code might be out of date with current conventions. Keeping this around as a reminder of how far I've come.**

## Summary
This is a minimal [PHP](http://www.php.net/) application that tracks and stores information about books in a [SQLite](https://sqlite.org/) database.

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
- Take a look at the code on [this](https://github.com/deeheber/book-inventory/tree/heroku) branch.
- A local MySQL db instance will run through MAMP if you're on a Mac.
