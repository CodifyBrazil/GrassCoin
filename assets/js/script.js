/*$(function(){

	$('.web').bind('mousedown', function(){
		$('.web').bind('mousemove', function(e){
			var x = e.originalEvent.pageX;
			var y = e.originalEvent.pageY;

			var	widht = $(this).width();
			var	height = $(this).height();

			$(this).css('left', (x - (widht/2))+'px');
			$(this).css('top', (y - (height/2))+'px');
		});
	});

	$('.web').bind('mouseup', function(){
		$('.web').unbind('mousemove');
	});
});



function shell(obj, event){
	if(event.keyCode == 13){ //tecla enter

		var comand = obj.value;
		obj.value = '';

		var dt = new Date();
		var hr = dt.getHours()+':'+dt.getMinutes()+':'+dt.getSeconds();
		var nome = $('.shell').attr('data-log');	
		
		if (nome == 'ls') {
			var ls = 'listar todos os dados do site!';
			$('.body_prompt').append('<span class="name_prompt">'+nome+' - ></span><span class="comand_write">'+comand+'</span><br />');
			
		}

	}
}*/

$(function(){

	$('.dropdraw-login').hover(function(){
		$(this).find('.login-template').slideDown('fast');
	}, function(){
		$(this).find('.login-template').slideUp('fast');
	});

	$('.droprawn-lang').hover(function(){
		$(this).find('.langs').slideDown('fast');
	}, function(){
		$(this).find('.langs').slideUp('fast');
	});
});
