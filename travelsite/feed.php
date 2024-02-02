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
		$feedback= $_REQUEST['name'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO feed VALUES ('$feedback')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>YOUR FEEDBACK STATUS IS SENDED SUCCESSFULLY";
				
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
<h5>..DONE..</h5>
</font>
<marquee width="100%" direction="right" height="80px" onmouseover="this.stop( )" onmouseout="this.start()" noresize="noresize">
<center><font color="black" size="20">Thank you for your feedback:)...</font></center>
</marquee>
	<form action="s2t.php">
		<button type="submit" style="height:50px; width:10%;" onclick="oneway.html">OK</button>
	</form>
</center>

</body>
</html>

  
