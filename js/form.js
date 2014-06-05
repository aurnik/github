$(document).ready(function() {
      

	$('.accordion').accordion({defaultOpen: 'some_id'}); //some_id section1 in demo

	$('.square_container .time').timepicker({
	'showDuration': true,
	'timeFormat': 'g:ia'
	});

    $('.square_container .date').datepicker({
        'format': 'm/d/yyyy',
        'autoclose': true
    });

    // initialize datepair
    $('.square_container').datepair();


  
});


