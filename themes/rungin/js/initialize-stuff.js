console.log('hello');


( function( $ ) {
	
	$('#main').masonry({
	  // options
	  itemSelector: 'article',
	  columnWidth: 500,
	  percentPosition: true,
	});
	
} )( jQuery );
