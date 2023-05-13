$(document).ready(function(){
  //navigation
  //Toggle login modal
  $('.loginBtn').click(function(){
    $('.loginModal').show();
  });


	// $('.vendor-account').hide();

	// $('#buyer').click(function(){
	// 	$('.vendor-account').hide();
	// 	$('.buyer-account').show();
	// });
	// 	$('#vendor').click(function(){
	// 	$('.vendor-account').show();
	// });

	// DROP DOWN BTN
	$('.show-more').hide();

	$('#dropBtn').click(function(){
		$('.show-more').show();
	});
});
