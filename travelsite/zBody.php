<!DOCTYPE html>
<html lang="en">

<head>
<title>S2T</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  
 <link rel="stylesheet" href="style.css">
 
 </head> 
  <body>
<br>
<div>
<br>
<img src="IMAGES/a4.jpg" style="width:20%; float:left;">

<div class="content" style="text-align:right;" id="myForm">
  <form action="modalform.php"  method="post" class="form-container">
	   <button class="open-button" onclick="openForm()"><h1>QUICK BOOK</h1></button>
  </form>
</div>
<h1><p class="ob" style="text-align:center; font-family: Times New Roman; font-size:230%;"><b>SRI SWAMINATHA TRAVELS</b></p></h1>
 <h2 style="text-align:center; font-family: Times New Roman;"><b>...WELCOME TO OUR TRAVELS...</b></h2>


</div>
<br>

<h2 style="text-align:center; font-family: Times New Roman; color:red;"><b>CARS OF OUR SWAMINATHA TRAVELS</b></h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>	  
    </ol>


    <!-- Wrapper for slides -->
	<div id="cen">
    <div class="carousel-inner">
      <div class="item active">
        <img src="IMAGES/ambass.jpg" alt="AMBASSTOR" style="width:90%; height:50%;float:center;">
      </div>

      <div class="item">
        <img src="IMAGES/etios.jpg" alt="ETIOS" style="width:90%;height:50%;float:center;">
      </div>
    
      <div class="item">
        <img src="IMAGES/indica.jpg" alt="INDICA" style="width:90%;height:50%;float:center;">
      </div>
  
	
	<div class="item">
        <img src="IMAGES/indigo.jpg" alt="INDIGO" style="width:90%;height:50%;float:center;">
      </div>
    
	<div class="item">
        <img src="IMAGES/innovaswft.jpg" alt="INNOVASWFT" style="width:90%;height:50%;float:center;">
      </div>
    
	<div class="item">
        <img src="IMAGES/tavera.jpg" alt="TAVERA" style="width:90%;height:50%;float:center;">
      </div>
	   </div>
	    </div>
    


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

 
  <br>
  <br>
  <br>
 <div> 
<picture width="100%"  height="50%">
<img src="IMAGES/vehh.jpg" style="width:90%;height:50%;float:center;">
</picture>
<br>
<div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="IMAGES/ambass.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="IMAGES/etios.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="IMAGES/indica.jpg" style="width:50%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="IMAGES/indigo.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="IMAGES/innovaswft.jpg" style="width:50%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="IMAGES/tavera.jpg" style="width:50%">
  </div>
 
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="IMAGES/ambass.jpg" style="width:100% " onclick="currentSlide(1)" alt="AMBASSTOR-1000.00/Day">
    </div>
    <div class="column">
      <img class="demo cursor" src="IMAGES/etios.jpg" style="width:100%" onclick="currentSlide(2)" alt="ETIOS-1000.00/Day">
    </div>
    <div class="column">
      <img class="demo cursor" src="IMAGES/indica.jpg" style="width:100%" onclick="currentSlide(3)" alt="INDICA-1200.00/Day">
	 
    </div>
    <div class="column">
      <img class="demo cursor" src="IMAGES/indigo.jpg" style="width:100%" onclick="currentSlide(4)" alt="INDIGO-1400.00/Day">
    </div>
    <div class="column">
      <img class="demo cursor" src="IMAGES/innovaswft.jpg" style="width:100%" onclick="currentSlide(5)" alt="INNOVA SWIFT-1300.00/Day">
    </div>    
    <div class="column">
      <img class="demo cursor" src="IMAGES/tavera.jpg" style="width:100%" onclick="currentSlide(6)" alt="TAVERA-1000.00/Day">
    </div>
  </div>
 </div>
 
 <div style="text-align:center; font-size:25px;">
 <span><a href="s2trent.php"><b>For more details: CLICK ME</b></a></span>
 </div>
<br>

<div id="ttt">
<marquee width="100%" direction="right" scrollamount="20" height="80px" color:"#8FBC8F">
<h2>..*TRAIN TATKAL/ BUS TICKET BOOKING AVAILABLE*..</h2>
</marquee>
</div>

<h2><p style="text-align:center";>Discounted Package for Marriage
 & Other Functions..</p></h2>
 <div id="soc" style="text-align:center;">
 <i class="fa fa-envelope" style="font-size:18px; color: black; bgcolor: yellow;">--<b>Email:</b> 
 <span><a href="mailto:sriswaminathatravels@gmail.com">sriswaminathatravels@gmail.com</a></span></i>
  <i class="fa fa-internet-explorer" style="font-size:18px; color: black;">--<b>Web:</b> 
  <span><a href="webto:sriswaminathatravels.com">sriswaminathatravels.com</a></span></i>
  <i class="fa fa-facebook" style="font-size:18px; color: black;">--<b>Facebook:</b> 
  <span><a href="facebook: www.facebook.com/sriswaminathatravels"> www.facebook.com/sriswaminathatravels</a></span></i>
  
 </div>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	
   <a id="hedr" class="navbar-brand" href="#"><i class="fa fa-car"></i>
	  SWAMINATHA TRAVELS &#10548;</a>
	 
    </div>
	
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		
		   <li><a href="#home"><i class="fa fa-home"></i> HOME</a></li>
		  <li><a href="#services"><i class="fa fa-wrench"></i> SERVICES</a></li>
          <li><a href="#vehicle"><i class="fa fa-car"></i> AVAILABLE CARS</a></li>
	      <li><a href="#contact"><i class="fa fa-phone"></i> CONTACT</a></li>
		  <li><a href="#bookings"><i class="fa fa-address-card"></i> BOOKINGS</a></li>
		   <li><a href="#aboutus"><i class="fa fa-car"></i>ABOUT US</a></li>
		 </ul>
    </div>
	</div>
</nav>  
 </div>
 <br>
 <br>


<div id="home" class="container-fluid">
<br>
	 <p id="HOME"><i class="fa fa-home" style="font-size:50px; color: black;"></i> <b>HOME</b></p>
	<br>
	<img src="IMAGES/a2.jpg" style="width:50%;height:50%;float:left;">
	
	<img src="IMAGES/a5.jpg" style="width:50%;height:50%;float:right;">
<br>
	 <p style="color: black;"> Welcome to the City of Kumbakonam.</p>
    <p style="color: black;">The foundation of <b>SRI SWAMINATHA TRAVELS</b> is built on a philosophy of Exceptional Customer Services.
	With the constineous support of our customers we are able to grow faster.
    Each car will be throughly checked up and cleaned before every trip so that our customers get a perfect car.
		At Kumbakonam we have excelled in this art, and this is the only aspect that makes us special. 
	Our travels rendered have always been in great demand, irrespective seasonal fluctuation in demand.
		We will also arrange accommodation in  around Kumbakonam & Thanjavur upon your request.
	we can able to arrange Bus / Train Tickets also.
	 <p style="color: black;">Our Team,
			Our staff members are work round the clock to ensure total travel comfort to our valued clients. 
			Our experienced drivers provide safely travel with comfort.</p>
	<p style="color: black;"> <b>SWAMINATHA TRAVELS</b> have good-mannered and polite drivers with efficient capacity and full co-operations. 
	The drivers are well versed in the local dialects of the places of travel and have a sound knowledge of the routes used and the places visited.
	 <b>SWAMINATHA TRAVELS offers 24x7 hassle free car rental in KUMBAKONAM.</b></p>
 </div>


<div id="services" class="container-fluid">
<br>
 <p id="SERVICES"><i class="fa fa-fw fa-wrench" style="font-size:40px; color: black;"></i>SERVICES</p>
 <br>
<img src="IMAGES/ser.jpg" style="width:50%;height:60%;float:left;">
<img src="IMAGES/a15.jpg" style="width:50%;height:60%;float:right;">
<br>
    <p style="color: black;">
Our <b>SWAMINTHA TRAVELS</b> services is prompt, provisioned with moblie phones or else QuickBooking.</p> 
 <p style="color: black;"> On monthly and day-to-day basis transport facilities are being provided.
    Our services are extended to all major cities of India and rendered have always been in great demand.
	SWAMINATHA TRAVELS has been involved in the car rental service since 2000.
	We are providing excellent customer service and satisfying every customer							
    And, car washing is just one of the most common type of car maintenance.</p>
	<p style="color: black;">Get ready to pick your favorite car.</p>
</div>

<div id="vehicle" class="container-fluid">
 <br>
  <p id="VEHICLE"><i class="fa fa-car" style="font-size:40px; color: black;"></i>AVAILABLE  CARS</p>
  <br>
<img src="IMAGES/vehh.jpg" style="width:90%;height:50%;float:center;">
    <p> <u> <h2>OUR S2T AVAILABLE CARS: </h2> </u> </p>
	<p style="color:blue; text-align:center;"><b>AMBASSADOR</b></p>
	<p style="color:blue; text-align:center;"><b>ETIOS</b></p>
	<p style="color:blue; text-align:center;"><b>INDICA</b> </p>
	<p style="color:blue; text-align:center;"><b>INDIGO</b></p>
	<p style="color:blue; text-align:center;"><b>INNOVA SWIFT DZIRE</b></p>
	<p style="color:blue; text-align:center;"><b>TAVERA</b></p>
	<br>
	<p style="color:red; text-align:center;">*A/C & NON A/C CARS AVAILABLE*</p>   
	
	 <div style="text-align:center; font-size:25px;">
		<span><a href="s2trent.php"><b>Click here: Our available Travels Cars</b></a></span>
	</div>
</div>


<div id="contact" class="container-fluid">
<br>
<p id="CONTACT"><i class="fa fa-address-card" style="font-size:42px; color: black;"></i>CONTACT</p>
<br>
<img src="IMAGES/cont.jpg" style="width:50%;height:38%;float:center;">
  <br>
<p "text-align:center"><h3>Need any more help or want to give us a suggestion, <b>Contact us.</h3></b></p> 
<br> 
     
<h4><p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i><b>ADDRESS</b> 
<p>Municipal Complex, </p>
 <p>8,Gandhi Park,</p>
 <P>Kumbakonam,Thanjavur.</P>
 <p>Tamil Nadu, India.</p>
 <p>PINCODE-612-001.</p>
<p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>
<b>Phone: </b>0435-2402091,+919243536892</p>
<p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> 
<b>Email:</b><span><a href="mailto:sriswaminathatravels@gmail.com">sriswaminathatravels@gmail.com</a></span></p>
<br>
<p style="font-style:oblique";>Lets get ready to Booking and touch with us:---</p></h4>
</p>
</div>

<img src="IMAGES/a17.jpg" style="float:left;">
<div id="mmm">
<form action="message.php" method="post">
<h2>
<i class="fa fa-envelope icon"></i>
<b><u> QUERY: </u></b> 
<input class="input" type="name" name="name" id ="name" style="width: 30%; height: 200px;" placeholder="ENTER YOUR QUERY" required>
<br> <br>
<form action="message.php" method="post">
<center>
      <button type="submit" style="width:30% height:20%"> SEND </button>
	  
		<input type="reset"  value="CLEAR" name="reset">
</center>
</form>
</h2>
</form>
</div>
<br> 
<br>
<br>
<br>
<br>
<br>



<div>

<img src="IMAGES/a18.jpg" style="width:30%;height:40%;float:right;">
<img src="IMAGES/a20.jpg" style="width:30%;height:50%;float:left;">
<form action="booking.php" target="_blank" method="post" style="max-width:500px;margin:auto;float:center;">
<div id="bookings" class="container-fluid">
<p class="inset">
<br>
<br>
<br>


      <p id="BOOKINGS">
	  <i class="fa fa fa-user" style="font-size:40px;text-align:center color:black;"></i>   <b>BOOKINGS</b></p>

<div class="form-group">
      <label><h1>USER DETAILS</h1></label>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="name" id="name" name="name" placeholder="YOUR NAME " required>
  </div>
	
 <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" id="number" name="number" placeholder="PHONENUMBER" required>
  </div>
   
  <div class="input-container">
  <i class="fa fa-calendar icon"></i>  
        <input class="input-field" type="date" id="date" name="bookingdate" placeholder="Choose booking date" required>
   </div>
   
   <div class="input-container">
    <i class="fa fa-users icon"></i>
    <input class="input-field" type="number" id="seats" name="seats" placeholder="HOW MANY SEATS" required>
  </div>      
        
	<div class="input-container">
    <i class="fa fa-car icon"></i>	
<select class="input-field" type="number" placeholder="Car Type" name="type" id="number" required>
  </div>
	<option value="">Select CAR Type</option>
	<option value="AMBASSADOR(Non-A/c)">AMBASSADOR--(Non-A/c) </option>
	<option value="ETIOS(A/c) ">ETIOS-(A/c) </option>
	<option value="INDICA(Non A/c)">INDICA--(Non A/c)</option>
	<option value="INDIGO(A/c)">INDIGO--(A/c)</option>
	<option value="INNOVA SWIFT DZIRE(A/c) ">INNOVA SWIFT DZIRE--(A/c) </option>
	<option value="TAVERA(Non A/c)">TAVERA--(Non A/c)</option>
</select>	
      </div>  
	 
  <div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input class="input-field" type="text" placeholder="ENTER PICKUP PLACE" id="place" name="place" required>
  </div>
  
	  
  <div class="checkbox">
     <div><label><input type="checkbox" name="remember"> Remember me</label></div>
  </div>
   <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn btn-primary ">Book</button>
      </div>
	  <div>
		<input type="reset" style="text-align:right" value="clear" name="reset">
       </div>
    </div>
	</p>
</div>
</form>
</div>


</center>
</form>
</form>
</h2>

</div>
<br>
<br>
<br>







<br>
<div>
<marquee width="100%" direction="right" scrollamount="20" height="10%" color:"#8FBC8F">
<img src="IMAGES/vehh.jpg" style="width:100%;height:100%;">
</marquee>
</div>
  <br>
  <br>

   <a href="#" class="scrollup" style="float:right;" align="right";>U☝P</a>

<br>

<div id="aboutus" class="container-fluid">
 <br><center>
  <p id="ABOUT US"><i class="fa fa-car" style="font-size:40px; color: black;"> ABOUT US</i></p>
  <br>
  <div>
<img src="IMAGES/a4.jpg" style="width:35%;height:15%;float:center;">

    <p style="color:red;"> 
Our SWAMINATHA TRAVELS, your trusted and safe journey</p>. 
<p style="color:black;">SWAMINATHA Cars is also an online booking facilities for customer. 
With 10+ years of experience exclusively in travel and tourism industry, 
 we provide exemplary car rental services at affordable price.</p>
 
 	<img src="IMAGES/a6.jpg" style="width:50%;height:30%;float:center;">
	<br>
	<br>
</center>
</div>

<br>
<br>
<div id="abc">
 <br><center>
  <br><br><br><br><br><br><br><br>
  <div ><h3 style="text-align:center; font-family: Times New Roman; color:blue; font-size:30px;">
  <br><br><br><br><br><br><b>SWAMINATHA TRAVELS</b></h3></div>
  <p style="color:grey;"><em>HELLO!</em></p>
  <p style="color:black; font-size:130%;">Our S2T, your trusted and safe journey.</p>
  
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center" style="text-align:center; font-family: Times New Roman; color:black; font-size:30px;"><strong>Name: M. Nagarajan</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="IMAGES/s1.jpg" class=" person">
      </a>
      <div id="demo" class="collapse">
        <p> </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center" style="text-align:center; font-family: Times New Roman; color:black; font-size:40px;"><strong>S2T</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="IMAGES/sss.jpg" class="img-circle person"  width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p> </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center" style="text-align:center; font-family: Times New Roman; color:black; font-size:30px;"><strong>Name: N. Arivalagan</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="IMAGES/s5.jpg" class=" person"  width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p> </p>
      </div>
    </div>
  </div>
</div>

 <div style="text-align:right; float:right; font-size:20px;">
 <b>Boss:)</b><span><a href="boss.html">CLICK ME</a></span>
 </div>




 <form action="feedback.html" method="post" >
	   <button class="open-button" onclick="openForm()"><h1 style="color:yellow; font-family: Times New Roman;">FEEDBACK</h1></button>
 </form>

<br>

<!-- Container (TOUR Section) -->
<center>
<div class="bg-1" id="abc">
<div class="container">
    <div >
         <h3 id="abc">SWAMINATHA TRAVELS</h3>
	</div>
	
<div>
    <p id="abc" style="color:grey;" >Our <b>S2T</b> TRAVELS offers: <br> 24x7 free car rental in KUMBAKONAM..<br> Remember to BOOK your booking on online!</p>
</div>
</div>
</div>
</center>
<br>


<footer class="ccc" style="text-align:center; font:50%;">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="www.sriswaminathatravelss.com" target="_blank" class="w3-hover-text-green">SriSwaminathaTravels</a></p>
</footer>
 <script src="scrip.js"></script>
 </body>
</html>

