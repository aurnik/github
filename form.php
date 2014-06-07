<!DOCTYPE html>
<html>
  <head>
    <meta name="author" content="Nick Ardecky" >
  	<meta name="description" content="COGS187B SP14">
    <title>DVC::Redesign</title>	
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
  	<link href="css/form.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="js/form.js"></script>
  	<script type="text/javascript" src="js/accordion.js"></script>
  	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
  	<script type="text/javascript" src="js/datepair.js"></script>
  </head>
  
<body>
  <div class="nav">
    <div class="nav-mob">
      -NAV-
    </div>
  	<div class="link shrink">
			<a href="index.html">home</a>
		</div>
  	<div class="link shrink">
	    <a href="events.html">events</a>
    </div>
    <div class="link shrink">
      <a href="form.php" class="active-link">booking</a>
    </div>
    <div class="link shrink">
      <a href="calendar.html">calendar</a>
    </div>
    <div class="link shrink">
      <a href="media.html">media</a>
    </div>
    <div class="link shrink">
      <a href="artists.html" >artists</a>
    </div>
    <div class="link shrink">
      <a href="about.html">about</a>
    </div>
  </div>
  <div id="form_background">
    <form id="signup-form" action="formtoemailpro.php" method="post">
      <div class="accordion" id="section1">Step 1: Contact Information<span></span></div>
        <div class="container">
          <div class="row">
            <div class="text">
              <label>Contact Name*</label>
            </div>
    	      <input id="signup-contact" type="text" name="signup-contact" placeholder="Mary Poppins" />
          </div>
    	    <br>
          <div class="row">
            <div class="text">
    	        <label> Email* </label>
            </div>
            <input id="signup-email" type="text" name="signup-email" placeholder="mary@ucsd.edu"/>
          </div>
          <br>
          <div class="row">
            <div class="text">
              <label>Phone Number</label>
            </div>
    	      <input id="signup-telephone" type="text" name="signup-telephone" placeholder="760-717-0000"/>
          </div>
    	    <br>
      </div>
      <div class="accordion" id="section2">STEP 2: Event Information<span></span></div>
        <div class="container">
          <div class ="row">
            <div class="text">
        	   <label> Event Name* </label>
            </div>
    	      <input id="signup-event" type="text" name="signup-event" placeholder="Something Awesome"/>
          </div>
    	    <br>
          <div class="row">
            <div class="text">
    	        <label>Venue</label>
            </div>
            <input id="signup-venue" type="text" name="signup-venue" placeholder="UCSD Price Center"/>
          </div>
          <br>
          <div class="square_container">
            <div class="short_row">
              <div class="text">
                <label>Date</label>
              </div>
      		    <input type="text" name="Date Start" class="date start small" />
            </div>
            <div class="short_row">
              <div class="text">
                <label>Start Time</label>
              </div>
      		    <input type="text" name="Time Start" class="time start small" /> 
            </div>
            <div id="end" class="short_row">
              <div id="semi"> - </div>
              <div class="text">
                <label>End Time</label>
              </div>
      		    <input type="text" name="Time End" class="time end small" />
            </div>
        </div>
        <br>
        <div class="row">
          <div class="short_row check1">
      		  <label>Top-40</label>
      	  	<input type="checkbox" name="genre top40" />
          </div>
          <div class="short_row check1">
      		  <label>Hip-Hop</label>
      	    <input type="checkbox" name="genre hiphop" />
          </div>
          <div class="short_row check1">
      		  <label>Dubstep</label>
      		  <input type="checkbox" name="genre dubstep" />
          </div>
      		<div class="short_row check1">
      		  <label>Other</label>
      	    <input type="checkbox" name="genre other" />
          </div> 
      </div>
    </div>
      <div class="accordion" id="section3">STEP 3: Other Information<span></span></div>
        <div class="container">
          <div class="row">
            <div class="text">
          	  <label> Additional Comments</label>
            </div>
      	     <textarea id="signup-comments" cols="50" rows="5" placeholder="Enter any additional comments"></textarea>
          </div>
    	    <br>   	       
        </div>
    <input id="save" type="submit" value="Send"/>
    <div id="necessary"> *Required Field</div>
    </form>
</div>
</body>
</html>
 