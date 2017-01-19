(function() {

	$('.live-chat header').on('click', function() {

		$('.chat').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');

	});


	$('.chat-close').on('click', function(e) {


		$('.live-chat').fadeOut(300);
		e.preventDefault();
	});
	$('.clearfix').click(function(){
		$('.live-chat').fadeOut();
	});
});