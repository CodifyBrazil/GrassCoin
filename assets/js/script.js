

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
