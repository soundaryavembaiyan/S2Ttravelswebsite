<!DOCTYPE html>
<html lang="en">

<head>
	<title>QuickBooking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <h2>QuickBook</h2>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
     <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="quickbookings">QUICK BOOKINGS</a></li>
		  </ul>   
	</div>
	<div>
	</div>
    </div>
  </div>
</nav>    
 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Quick Book</button>
  <div id="demo" class="collapse">
   <form action="insert.php" method="post">
	<div class="form-group">
      		<label>USER DETAILS</label>
	
	 <div>
     		 <label >NAME:	</label>
      		<input  type="text"   placeholder="Enter your Name" required>
   	 </div>
	  <div>
			<label>PHONENUMBER: </label>
			<input  type="number" placeholder="Enter your Number" required>
	  </div>
		<button type="submit" class="test" onclick="oneway.html">BOOK</button>
</div>
</div>
</form>

</body>
</html>
