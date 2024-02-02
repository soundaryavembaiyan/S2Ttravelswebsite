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
	

<center>
<img src="IMAGES/carbck.jpg" height="50%" width="50%">
<font color="red" size="10">
<br>
<h1>..BOOKED..</h1>
</font>
<br>
<marquee width="100%" direction="right" height="80px" onmouseover="this.stop( )" onmouseout="this.start()" noresize="noresize">
<center><font color="black" size="20"><b>THANK YOU FOR YOUR BOOKING:)...</b></font></center>
</marquee>


</body>

</html>
