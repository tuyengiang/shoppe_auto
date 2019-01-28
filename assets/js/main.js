jQuery(document).ready(function($){
	$('.btn-popup').click(function(){
		$('.background').fadeIn('500');
	});
	$('#btn-exits').click(function(){
		$('.background').fadeOut('500');
	});
});