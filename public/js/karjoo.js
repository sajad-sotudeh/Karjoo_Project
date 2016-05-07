$(function(){
	var moreText = "بیشتر",
		 lessText = "کمتر",
		 moreButton = $( "a.readmorebtn" );
		 lessButton = $( "a.readlessbtn" );
	moreButton.click( function () {
		//var $this = $(this);
		 //$this.text($this.text() == moreText ? moreText : lessText).next("span.more").slideToggle("slow");
		 $( "a.readmorebtn" ).hide();
		// $this.text($this.text() == moreText ? moreText : lessText).next("span.more").slideToggle("slow");
		 $( "span.more" ).show();
		 $( lessButton ).show();
	} );
	lessButton.click( function () {
		 //var $this = $(this);
		 //$this.text($this.text() == moreText ? moreText : lessText).next("span.more").slideToggle("slow");
		 $( "a.readmorebtn" ).show();
		 $( "span.more" ).hide();
		 $( lessButton ).hide();
	} );
	$('body').append("<p>hello world</p>");
	if( !Modernizr.input.placeholder ){
		$( "input[type=text]" ).each( function(){
			$( this ).val( $(this).attr( "placeholder" ) );
		});
		
		$( "input[type=text]" ).focus( function(){
			if( $( this ).val() === $( this ).attr( "placeholder" ) ){
				$( this ).val( "" );
			}
		} );
		
		$( "input[type=text]" ).blur( function(){
			if( $( this ).val === "" ){
				$( this ).val( $(this).attr("placeholder") );
			}
		} );
	}

});//js
