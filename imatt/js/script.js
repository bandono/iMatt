jQuery.noConflict();
(function($) {

	
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
		}).masonry('reload'),
        $('.shakenpostwrap img').each(function(){
          var maxWidth = 240;
          var ratio = 0;
          var img = $(this);
          if(img.width() > maxWidth){
            ratio = img.height() / img.width();
            img.attr('width', maxWidth);
            img.attr('height', (maxWidth*ratio));
          	}
        }).masonry('reload');
	});
 
 
 
 // MouseOver Events
 $('.shakenpostwrap').hover(function(){
                            $('img', this).fadeTo("fast", 0.75).addClass('shakenpostwrap-hover');
                            $('span.view-large', this).fadeTo("fast", 1)},
                            function(){
                            $('img', this).fadeTo("fast", myOp).removeClass('shakenpostwrap-hover');
                            $('span.view-large', this).fadeTo("fast", 0),
                            function(){
                            $('#sort').masonry({
                                               columnWidth: 280,
                                               animate: true,
                                               itemSelector: '.shakenpostwrap'
                                               },
                                               function() { $(this).css({
                                                                        margin: '10px'
                                                                        });
                                               }).masonry('reload');
                            }
                            });	
 

	

	
})(jQuery);