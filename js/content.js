function init(){
	for (var index = 1; index <= 10; index++){
		$('.content'+index).hide();
	}
}



$(document).ready(function(){
	init();
	$('#trigger1').on('click', function(){ $('.content1').slideToggle(); }); 
	$('#trigger2').on('click', function(){ $('.content2').slideToggle(); }); 
	$('#trigger3').on('click', function(){ $('.content3').slideToggle(); }); 
	$('#trigger4').on('click', function(){ $('.content4').slideToggle(); }); 
	$('#trigger5').on('click', function(){ $('.content5').slideToggle(); }); 
	$('#trigger6').on('click', function(){ $('.content6').slideToggle(); }); 
	$('#trigger7').on('click', function(){ $('.content7').slideToggle(); }); 
	$('#trigger8').on('click', function(){ $('.content8').slideToggle(); }); 
	$('#trigger9').on('click', function(){ $('.content9').slideToggle(); }); 
	$('#trigger10').on('click', function(){ $('.content10').slideToggle(); }); 
	$('#triggerQuiz').on('click', function(){ $('#quiz').slideToggle(); }); 
});





