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
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO login VALUES ('$username', '$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>YOUR LOGIN IS DONE";
				

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		
		// Close connection
		mysqli_close($conn);
		?>
		
	</center>
	<br>
	
<center>
<img src="IMAGES/OIP.jpg" height="20%" width="40%">
<font color="red" size="10">
<h4>..THANK YOU FOR LOGIN..</h4>
</font>
<marquee width="20%" direction="left" height="20%" onmouseover="this.stop( )" onmouseout="this.start()" noresize="noresize">
<center><font color="black" size="5px"><b>WELCOME:)...</b></font></center>
</marquee>


</body>

</html>
