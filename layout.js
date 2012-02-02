// Automatic stick footer

var footerHeight = $( '#footer' ).outerHeight();

$( '#footer' ).css( { "margin-top" : -footerHeight } );
$( '#main' ).css( { "padding-bottom" : footerHeight } );
	
// Auto absolute centering
var absHeight = $( '.absCenter' ).outerHeight(),
	absWidth = $( '.absCenter' ).outerWidth();

$( '.absCenter' ).css( {
	"position" : "absolute",
	"top" : "50%",
	"margin-top" : - ( absHeight / 2 ),
	"left" : "50%",
	"margin-left" : - ( absWidth / 2 )
} );



