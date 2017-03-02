 $(function() {
    $('#fader img:not(:first)').hide();
    $('#fader img').each(function() {
        var img = $(this);
        $('<img>').attr('src', $(this).attr('src')).load(function() {
            img.css('margin', '0 auto');
        });
    });

    var pause = false;
    
    function fadeNext() {
        $('#fader img').first().fadeOut().appendTo($('#fader'));
        $('#fader img').first().fadeIn();
    }

    function fadePrev() {
        $('#fader img').first().fadeOut();
        $('#fader img').last().prependTo($('#fader')).fadeIn();
    }

    $('#fader, #next').click(function() {
        fadeNext();
    });

    $('#prev').click(function() {
        fadePrev();
    });

    $('#fader, .button').hover(function() {
        pause = true;
    },function() {
        pause = false;
    });

    function doRotate() {
        if(!pause) {
            fadeNext();
        }    
    }
    
    var rotate = setInterval(doRotate, 3000);

     $('[data-toggle="collapse"]').addClass("collapsed");
});
 
$(function(){

    $('#txt1').hide();
    $('#txt2').hide();
    $('#txt3').hide();
    $('#txt4').hide();
    
    $("#btn1").on('click' , function() {
        $('#txt1').slideToggle(200);
        $('#txt2').slideUp(200);
        $('#txt3').slideUp(200);
        $('#txt4').slideUp(200);
    });

    $("#btn2").on('click' , function() {
        $('#txt2').slideToggle(200);
        $('#txt1').slideUp(200);
        $('#txt3').slideUp(200);
        $('#txt4').slideUp(200);

    });

    $("#btn3").on('click' , function() {
        $('#txt3').slideToggle(200);
        $('#txt4').slideUp(200);
        $('#txt2').slideUp(200);
        $('#txt1').slideUp(200);
    });
    $("#btn4").on('click' , function() {
        $('#txt4').slideToggle(200);
        $('#txt3').slideUp(200);
        $('#txt2').slideUp(200);
        $('#txt1').slideUp(200);
    });
});

(function($){
    var x = 0;
    var y = 0;

    var banner = $("#banner");

    banner.css("backgroundPosition" , x + 'px' + '' + y + 'px');

    window.setInterval(function() {
        banner.css("backgroundPosition" , x + 'px' + '' + y + 'px');
        y--;
    }, 90);
})(jQuery);

