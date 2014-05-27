$(document).ready(function() {
      
      
      $( "#signup-form" ).fadeIn( "slow", function() {
      });

      $('#signup-form')[0].reset();

/* clear form after submit 
 * TO DO LIST:
 * 1) If a field isnt entered scroll to that field and highlight 
 * the field prompting user for re-input
 */
      $("#signup-button").click(function() {

	      $('#signup-form')[0].reset();

      });


  
});


