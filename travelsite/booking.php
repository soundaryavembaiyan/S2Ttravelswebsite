<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "s2t");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
		$number = $_REQUEST['number'];
		$date = $_REQUEST['bookingdate'];
		$seats = $_REQUEST['seats'];
		$cartype = $_REQUEST['type'];
		$pickupplace = $_REQUEST['place'];
		

		$sql = "INSERT INTO booking VALUES ('$name', '$number', '$date', '$cartype', '$seats', '$pickupplace')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>YOUR BOOKING IS DONE SUCCESSFULLY";
							

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		mysqli_close($conn);
		?>
		
	</center>
	<br>
	
<center>
<img src="IMAGES/a23.jpg" height="20%" width="40%">
<font color="red" size="10">
<h4>..THANK YOU FOR BOOKING..</h4>
</font>
<marquee width="20%" direction="left" height="20%" onmouseover="this.stop( )" onmouseout="this.start()" noresize="noresize">
<center><font color="black" size="5px"><b>...WELCOME:)...</b></font></center>
</marquee>

	<form action="home.php">
		<button type="submit" style="height:50px; width:10%;" onclick="oneway.html"><b>OK</b></button>
	</form>
	
</body>
</html>
