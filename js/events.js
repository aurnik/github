$(document).ready(function() {
      
      
	$(".back").hide();
	$(".hold_image_back1").hide();



/* just swap images within the same div */
	$(".front").mouseenter(function() {
  		$(".back").show();
  		$(".front").hide();
	}).mouseleave(function(){
    	/*$("#img2").hide();    
    	$("#img1").show();*/
	});

    $(".back").mouseenter(function() {
  		/*$("#img1").show();
  		$("#img2").hide();*/
	}).mouseleave(function(){ 
    	$(".front").show();
    	$(".back").hide();   
	});

/* hide and show divs */
$(".hold_image1").mouseenter(function() {
  		$(".hold_image_back1").show();
  		$(".hold_image1").hide();
	}).mouseleave(function(){
    	/*$("#img2").hide();    
    	$("#img1").show();*/
	});

    $(".hold_image_back1").mouseenter(function() {
  		/*$("#img1").show();
  		$("#img2").hide();*/
	}).mouseleave(function(){ 
    	$(".hold_image1").show();
    	$(".hold_image_back1").hide();   
	});


  
});
