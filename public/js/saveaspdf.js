$(document).ready(function(){
	prettyPrint();
	
	$('.sample').hide();
	$('#sample_1').show();
	$('#pdf_options a').click(function() {
		var id = $(this).attr('rel');
		var sample = '#sample_' + id;
		$('.sample').hide();
		$(sample).show();
		
		$('#pdf_options a').removeClass('active');
		$(this).addClass('active');
		
		return false;
	});
});