
jQuery(document).ready(function(){
	
	jQuery('#add_css').click(function(e){

		if(jQuery('#css_block input:last').attr('name') == undefined){
			var atribut = 0;
		}else{
			var atribut = jQuery('#css_block input:last').attr('name').replace(/\D/g, '');
			var atribut = parseFloat(atribut)+1;
		}
		
		jQuery('#css_block').append('<p><label><input type="text" name="extra[css_url' + atribut + ']" style="width:50%" value="" />.CSS</label></p>');		
		e.preventDefault();
	});	
	
	jQuery('#add_js').click(function(e){

		if(jQuery('#js_block input:last').attr('name') == undefined){
			var atribut = 0;
		}else{
			var atribut = jQuery('#js_block input:last').attr('name').replace(/\D/g, '');
			var atribut = parseFloat(atribut)+1;
		}
		
		jQuery('#js_block').append('<p><label><input type="text" name="extra[js_url' + atribut + ']" style="width:50%" value="" />.JS</label></p>');		
		e.preventDefault();
	});	

	
	
})