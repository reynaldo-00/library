$(document).ready(function(){
	var $outer = $('html'),
        $overlay = $('<div>', {
            css: {
                position: 'absolute',
                width: $outer.outerWidth(),
                height: $outer.outerHeight(),
                top: $outer.position().top,
                left: $outer.position().left,
                backgroundColor: 'rgba(117,117,117,0.5)',
                zIndex: 10,
                display: 'none'        
            }
    }).appendTo( $outer );
    var delay = 600;


	$("#addButton").click( function(){
        var $this = $(this);
        $this.css( 'z-index', 111 );
        $overlay.data('current', $this).show();
        var delay = 400;

        setTimeout(function(){
            $(".form_wrapper").show("clip");
        }, delay);
	});

    $("#deleteButton").click( function(){
        var $this = $(this);
        $this.css( 'z-index', 111 );
        $overlay.data('current', $this).show();
        var delay = 400;

        setTimeout(function(){
            $("#deleteForm").show("clip");
        }, delay);
    });

    $("#cancelBtn").click( function(){
        $(".form_wrapper").hide("clip");
        var delay = 600;

        $('.form_wrapper').find("input[type=text]").val("");

        setTimeout(function(){
            $overlay.hide();
            $overlay.data('current').css('z-index', 1);
        }, delay);
    });

    $("#deleteCloseBtn").click( function(){

        $("#deleteForm").hide("clip");
        var delay = 600;

        setTimeout(function(){
            $overlay.hide();
            $overlay.data('current').css('z-index', 1);
        }, delay);
    });

});
