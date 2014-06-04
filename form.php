<!DOCTYPE html>
<html>
  <head>
    <meta name="author" content="Nick Ardecky" >
	<meta name="description" content="COGS187B SP14">
    <title>DVC::Redesign</title>	
	<link href="css/form.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/form.js"></script>
	<script type="text/javascript" src="js/accordion.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>
	<script type="text/javascript" src="js/datepair.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.accordion').accordion({defaultOpen: 'some_id'}); //some_id section1 in demo

                $('#basicExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });

    $('#basicExample .date').datepicker({
        'format': 'm/d/yyyy',
        'autoclose': true
    });

    // initialize datepair
    $('#basicExample').datepair();
        });
    </script>
  </head>
  
<body>
<img src="img/logo-transwhite.png" style="height: 78px; width: 78px; position: fixed; top:0px; left: 10px;z-index: 9000000;">
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
          <div class="row">
            <div class="text">
        	    <label>Phone Number</label>
            </div>
        	  <input id="signup-telephone" type="text" name="signup-telephone" placeholder="760-717-0000"/>
          </div>
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
            <p id="basicExample">
              <div class="row">
                <div class="text">
                  <label>Start Date</label>
                </div>
        		    <input type="text" name="Date Start" class="date start" />
                <div class="text">
                  <label>Start Time</label>
                </div>
        		    <input type="text" name="Time Start" class="time start" /> 
              </div>
              <div class="row">
                <div class="text">
                  <label>End Time</label>
                </div>
        		    <input type="text" name="Time End" class="time end" />
                <div class="text">
                  <label>End Date</label>
                </div>
        		    <input type="text" name="Date End" class="date end" />
              </div>
    		    </p>
    		<br>
        <div class="row">
    		Top 40
    	  	<input type="checkbox" name="genre" />
    		<br>
    		Hip-Hop
    	    <input type="checkbox" name="genre" />
    		<br>
    		Dubstep
    		<input type="checkbox" name="genre" />
    		<br>
    		Other
    	  <input type="checkbox" name="genre" />
        </div>
        
      </div>
      <div class="accordion" id="section3">STEP3: Other Information<span></span></div>
        <div class="container">
          <div class="row">
            <div class="text">
          	  <label> Other Comments </label>
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
 