$(document).ready(function() {
     
  //toggle flip'
  $('.flip-container').click(function()
  {
    var child = $(this).children()
    console.log(child[0])
    var el = document.querySelector('.card').classList.toggle('flip')  
    console.log(el)
    
  })
  
//for crunch navigation
$(".nav-mob").click(function() {
	$(".nav .link").toggleClass("shrink");
});

  
});
