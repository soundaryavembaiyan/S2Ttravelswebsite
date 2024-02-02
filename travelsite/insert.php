<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "quick");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$number = $_REQUEST['number'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO book VALUES ('$name', '$number')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>YOUR BOOKING IS SUCESSFULLY DONE";
				

			echo nl2br("\n Your Name: $name\n "
				. "Your Mobilenumber: $number");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
