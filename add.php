<html>
<head>
	<title>Add Book</title>
</head>

<body>
<?php
//including the database connection file
include("connect.php");

if(isset($_POST['Submit'])) {	
	$title = $_POST['title'];
	$author = $_POST['author'];
	$year = $_POST['year'];
		
	// checking empty fields
	if(empty($title) || empty($author) || empty($year)) {
				
		if(empty($title)) {
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		
		if(empty($author)) {
			echo "<font color='red'>Author field is empty.</font><br/>";
		}
		
		if(empty($year)) {
			echo "<font color='red'>Year field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO books(title, author, year) VALUES('$title','$author','$year')");
		
		//display success message
		echo "<font color='green'>Book added successfully.";
		echo "<br/><a href='index.php'>View Books</a>";
	}
}
?>
</body>
</html>