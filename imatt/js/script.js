jQuery.noConflict();
(function($) {

	$('span.view-large').hide();
	myOp = 1;
 
	$(window).load(function(){
		$('#sort').masonry({ 
			columnWidth: 280,
			animate: true,
			itemSelector: '.shakenpostwrap'
		}, 
		function() { $(this).css({
			margin: '10px'
			});
		}).masonry('reload');
	});
 

	

	
})(jQuery);