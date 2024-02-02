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
		$conn = mysqli_connect("localhost", "root", "", "s2t");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$mobile = $_REQUEST['mobile'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO 2login VALUES ('$name', '$mobile')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>YOUR QUICK BOOKING IS DONE</h1>";
			
			echo nl2br("\n Your Name: $name\n "
				. "Your Mobileno.: $mobile");
				

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		
		// Close connection
		mysqli_close($conn);
		?>
		
	</center>
<center>
<img src="IMAGES/a8.jpg" height="20%" width="50%">
<font color="red" size="10">
<h4>We will confirm your booking and contact you soon..</h4>
</font>
<marquee width="20%" direction="left" height="20%" onmouseover="this.stop( )" onmouseout="this.start()" noresize="noresize">
<center><font color="black" size="5px"><b>WELCOME:)...</b></font></center>
</marquee>
	<form action="s2t.php">
		<button type="submit" style="height:50px; width:10%;" onclick="oneway.html">OK</button>
	</form>

</body>

</html>
