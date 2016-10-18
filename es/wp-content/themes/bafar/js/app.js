/* 
	PAGE LOAD WITH HASH OFFSET 
*/
(function($, window) {
    $navbar_height = $('.navbar').height();
    var adjustAnchor= function() {
        var $anchor = $(':target'),
            fixedElementHeight = $navbar_height;
        if ($anchor.length > 0) {
            $('html, body')
                .stop()
                .animate({
                scrollTop: $anchor.offset().top - fixedElementHeight
            }, 800);
        }
    };
    $(window).on('hashchange load', function() {
        adjustAnchor();
    });
})(jQuery, window)

/*
    NAV TAB FROM EXTERNAL LINK
*/
var url = document.location.toString();
if (url.match('#')) {
    $('.nav.tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
}

/*
        OPEN TAB ON PAGE RELOAD WITH HASH
    *//*
if ( $('#inicio').length() != 0 ) {
    $('.nav.tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    })
}
*/

$(document).load(function() {
	//center_gallery();
});

$(window).resize(function(){
	//center_gallery();
});

function center_gallery () {
    /*
	$(".news-container img").each(function(i, img) {
		$(img).css({
			position: "relative",
			left: ($(img).parent().width() - $(img).width()) / 2
		});
	});
    */
}

$(document).ready(function() {
    /*$('.rpwe-title').each(function() {
        console.log($(this).height());
        if( $(this).height() > 76 ) {
            $(this).addClass('more');
        }
    });*/
});