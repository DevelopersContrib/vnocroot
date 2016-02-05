$(function(){
	$('input[name=service]:radio').change(function(){
		var option = $(this).val();		
		$('.form').hide();
		$('#form_'+option).show();		
	});

	$('._back').click(function(){
		$('#form_option').show();
		//$('._options').hide();
		$('.parent_option').hide();
		$('input[name=service]:radio').prop('checked', false);
	});
	
	$('._next, .back').click(function(){
		$('._options').hide();
		$($(this).attr('data-target')).show();
		if($(this).hasClass('_final')){
			$(this).parents('#form_partner').find('.header').hide();
		}else{
			$(this).parents('#form_partner').find('.header').show();
		}
	});
});