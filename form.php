<!DOCTYPE html>
<html>
  <head>
    <meta name="author" content="Nick Ardecky" >
  	<meta name="description" content="COGS187B SP14">
    <title>DVC::Redesign</title>	
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
  	<link href="css/form.css" rel="stylesheet">
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="js/form.js"></script>
  	<script type="text/javascript" src="js/accordion.js"></script>
  	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
  	<script type="text/javascript" src="js/datepair.js"></script>
  </head>
  
<body>
  <div class="nav">
  	<div class="link">
			<a href="index.html">home</a>
		</div>
  	<div class="link">
	    <a href="events.html">events</a>
    </div>
    <div class="link">
      <a href="form.php" style="color: lightblue;">booking</a>
    </div>
    <div class="link">
      <a href="calendar.html">calendar</a>
    </div>
    <div class="link">
      <a href="media.html">media</a>
    </div>
    <div class="link">
      <a href="artists.html" >artists</a>
    </div>
    <div class="link">
      <a href="about.html">about</a>
    </div>
  </div>
  <div id="form_background">
    <form id="signup-form" style="display:block;" action="formtoemailpro.php" method="post">
      <div class="accordion" id="section1">Step1: Contact Information<span></span></div>
        <div class="container">
          <div class="row">
            <div class="text">
              <label>Contact Name**</label>
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
      <div class="accordion" id="section2">STEP2: Event Information<span></span></div>
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
                <label>Start Date</label>
              </div>
      		    <input type="text" name="Date Start" class="date start" />
            </div>
            <div class="short_row">
              <div class="text">
                <label>Start Time</label>
              </div>
      		    <input type="text" name="Time Start" class="time start" /> 
            </div>
            <br>
            <div class="short_row">
              <div class="text">
                <label>End Time</label>
              </div>
      		    <input type="text" name="Time End" class="time end" />
            </div>
            <div class="short_row">
              <div class="text">
                <label>End Date</label>
              </div>
      		    <input type="text" name="Date End" class="date end" />
            </div>
        </div>
    		<br>
        <div class="short_row">
    		Top 40
    	  	<input type="checkbox" name="genre" />
        </div>
        <div class="short_row">
    		Hip-Hop
    	    <input type="checkbox" name="genre" />
        </div>
        <br>
        <div class="short_row">
    		Dubstep
    		<input type="checkbox" name="genre" />
        </div>
    		<div class="short_row">
    		Other
    	  <input type="checkbox" name="genre" />
        </div> 
        <br>    
      </div>
      <div class="accordion" id="section3">STEP3: Other Information<span></span></div>
        <div class="container">
          <div class="row">
            <div class="text">
          	  <label> Additional Comments: </label>
            </div>
      	     <textarea id="signup-comments" cols="50" rows="10" placeholder="Enter any additional comments"></textarea>
          </div>
    	    <br>   	       
        </div>
    <input id="save" type="submit" value="Send"/>
    </form>
</div>
</body>
</html>
 