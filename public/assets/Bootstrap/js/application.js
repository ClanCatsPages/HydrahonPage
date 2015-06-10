$(function() {
	$('h1').addClass('animated fadeInDown').show();
});


$(function() {
	var current = window.location.pathname;
	$('#ccf-sidenav li a').each( function() {
		var $this = $(this);
		
		if( $this.attr('href') === current ) {
			$this.parent().addClass( 'current active' );
		}
		if( $this.attr('href') != '/' && current.substr( 0, $this.attr('href').length ) == $this.attr('href') ) {
			$this.parent().addClass( 'active' );
		}
	});
});

/*
 * start pretty
 */
$(function() {
	$( 'pre' ).each( function() {
		var $this = $(this);
		if( $this.find( 'code' ).is('[class*="language"]') ) {
			$this.addClass( 'prettyprint' ); prettyPrint();
		}
	});
});


