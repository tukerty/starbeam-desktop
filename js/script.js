$(window).load(function () {

    $('#shader').fadeOut('slow', function () {
        $(this).remove();
        setTimeout(function () {
            $('.arrowscroll').fadeOut();
        }, 3000);

    });
});

$(document).ready(function () {
    if (window.location.href.split("/").length == 6) {
        $('.arrowscroll').css('display', 'none');
    }
    var touchscreen = 0;
    var use = 0;
    var ex = 0;
    var lb = 0;
    var f = 0;
    var h = window.innerHeight;
    var w = window.innerWidth;
    $("#logo").click(function () {
        window.location.href = 'http://starbeam.ru/';
    });

    //region WindowResize_Event
    $(window).resize(function () {
        initialise();
    });
    //endregion

    function initialise() {
        h = window.innerHeight;
        w = window.innerWidth;

        $(".contentblock h1").css('font-size', w / 320 + 'em');
        if (window.location.href == "https://starbeam.ru/rasshirenye-uslugi/garantii-i-obsluzhivanie/") {
            $(".contentblock h1").css('font-size', window.innerWidth / 320 - 0.5 + 'em');
        }
        $(".contentblock h2").css('font-size', w / 320 - 1 + 'em');
        $(".small_h2").css('font-size', (w / 320 - 1)*0.55 + 'em');
        $('.scrollbar-outer').scrollbar();


    }

    function closelightbox() {
        $('#lightboxshader').fadeOut();
    }

    $(".contentblock").hover(function () {
        $(this).css('background-color', 'rgba(255,255,255,1)');
        $(this).css('color', 'rgba(0,0,0,1)');
        $(this).find('h1').css('color', 'rgba(0,0,0,1)');
        $(this).find('h2').css('color', 'rgba(0,0,0,1)');
        $(this).find('.scroll-bar').css('background-color', 'rgba(0,0,0,1)');
        $(this).find('.bookmark').css('background-color', 'rgba(255,255,255,1)');
        $(this).find('.bookmark').css('color', 'rgba(0,0,0,1)');
        $(this).find('.bookmark').css('width', 'initial');
        $(this).find('a').css('color', '#000');

    }, function () {
        $(this).css('background-color', 'rgba(24,22,43,0.75)');
        $(this).css('color', 'rgba(255,255,255,1)');
        $(this).find('h1').css('color', 'rgba(255,255,255,1)');
        $(this).find('h2').css('color', 'rgba(200,200,200,1)');
        $(this).find('.small_h2').css('color', 'rgba(255,255,255,1)');
        $(this).find('.scroll-bar').css('background-color', 'rgba(255,255,255,1)');
        $(this).find('.bookmark').css('background-color', 'rgba(24,22,43,0.75)');
        $(this).find('.bookmark').css('color', 'rgba(255,255,255,1)');
        $(this).find('.bookmark').css('width', '6vh');
        $(this).find('a').css('color', '#b5b5b5');
    });

    $('.lightbox').click(function () {
        var s = $(this).find('.lightboximg').css('background-image');
        if (lb == 0) {
            $('#lightboxshader').fadeIn();
            $('#lightboximg').css('background-image', s);
        }
    });


    $('#lightboxcloseangle').click(function () {
        closelightbox();
    });

    $(".lightbox").hover(function () {
        $(this).find('.magshader').css('background-color', 'rgba(24, 22, 43, 0.3)');

    }, function () {
        $(this).find('.magshader').css('background-color', 'rgba(24, 22, 43, 0.6)');
    });


    $(".btnimg").hover(function () {
        $(this).css('background-color', 'rgba(255,255,255,1)');
        $(this).find('#cw').css('opacity', 1);
        $(this).find('#cb').css('opacity', 0);

    }, function () {
        $(this).css('background-color', 'rgba(24,22,43,0.75)');
        $(this).find('#cw').css('opacity', 0);
        $(this).find('#cb').css('opacity', 1);
    });

    $(".makeorderbtn").click(function () {
        if (ex == 0) {
            $('.bigangle').css('border-bottom', '0vh solid rgba(24, 22, 43, 0)');
            $('.bigangle').css('border-left', '0vh solid rgba(24, 22, 43, 0)');
            $('.expandcontent').fadeOut('fast', function () {
                ex = 1;
                $('.closeangle').fadeIn('slow');
            });
            $('.bigangle').css('height', '70vh');
            $('.bigangle').css('width', '40vw');
            $('.bigangle').css('background-color', 'rgba(24,22,43,0.75)');
            $('.bigangle').css('cursor', 'default');
            $('.closeangle').css('border-bottom', '20vh solid rgba(24, 22, 43, 1)');
            $('.closeangle').css('border-left', '20vh solid rgba(24, 22, 43, 0)');
            $('.closetext').css('color', 'rgba(255, 255, 255, 1)');
            $('.bigangle').css('cursor', 'default');
            $('.makeorder').fadeIn();
            $('.closeimg').fadeIn()
        }
    });

    $(".makeorderbtn_b").click(function () {
        if (ex == 0) {
            $('.expandcontent').fadeOut('fast', function () {
                ex = 1;
                $('.closeangle_b').fadeIn('slow');
            });
            $('#columns').addClass('fixed');
            $('.bigangle_b').css('border-bottom', '0vh solid rgba(24, 22, 43, 0)');
            $('.bigangle_b').css('border-left', '0vh solid rgba(24, 22, 43, 0)');
            $('.bigangle_b').css('height', '95vh');
            $('.bigangle_b').css('width', '100%');
            $('.bigangle_b').css('background-color', 'rgba(24,22,43,0.9)');
            $('.bigangle_b').css('cursor', 'default');
            $('.closeangle_b').css('border-bottom', '20vh solid rgba(24, 22, 43, 1)');
            $('.closeangle_b').css('border-left', '20vh solid rgba(24, 22, 43, 0)');
            $('.closetext').css('color', 'rgba(255, 255, 255, 1)');
            $('.makeorder').fadeIn();
            $('.closeimg').fadeIn()
        }
    });

    $('.c52').click(function () {
        $('.makeorderbtn_b').click();
        $('.makeorderbtn').click()
    });

    $('.c53').click(function () {
        $('.makeorderbtn_b').click();
        $('.makeorderbtn').click()
    });


    $('.closeangle').click(function () {
        if (ex == 1) {
            $('.bigangle').fadeIn();
            $('.bigangle').css('border-bottom', '35vh solid rgba(255, 255, 255, 1)');
            $('.bigangle').css('border-left', '35vh solid transparent');
            $('.bigangle').css('height', '0vh');
            $('.bigangle').css('width', '0vw');
            $('.bigangle').css('background-color', 'rgba(24,22,43,0)');
            $('.expandcontent').fadeIn('fast', function () {
                ex = 0;
            });
            $('.closeangle').css('border-bottom', '20vh solid rgba(24, 22, 43, 0)');
            $('.closeangle').css('border-left', '20vh solid rgba(24, 22, 43, 0)');
            $('.closetext').css('color', 'rgba(255, 255, 255, 0)');
            $('.bigangle').css('cursor', 'pointer');
            $('.closeangle').fadeOut(200);
            $('.makeorder').fadeOut(200);
            $('.closeimg').fadeOut();
        }
    });

    $('.closeangle_b').click(function () {
        if (ex == 1) {
            $('#columns').removeClass('fixed');
            $('.bigangle_b').fadeIn();
            $('.bigangle_b').css('border-bottom', '25vh solid rgba(255, 255, 255, 1)');
            $('.bigangle_b').css('border-left', '25vh solid transparent');
            $('.bigangle_b').css('height', '0vh');
            $('.bigangle_b').css('width', '0vw');
            $('.bigangle_b').css('background-color', 'rgba(24,22,43,0)');
            $('.bigangle_b').css('cursor', 'pointer');
            $('.expandcontent').fadeIn('fast', function () {
                ex = 0;
            });
            $('.closeangle_b').css('border-bottom', '20vh solid rgba(24, 22, 43, 0)');
            $('.closeangle_b').css('border-left', '20vh solid rgba(24, 22, 43, 0)');
            $('.closetext').css('color', 'rgba(255, 255, 255, 0)');
            $('.closeangle_b').fadeOut(200);
            $('.makeorder').fadeOut(200);
            $('.closeimg').fadeOut();
        }
    });

    $(document).keydown(function (e) {
        if (e.which == 27) {

            $('.closeangle_b').click();
            $('.closeangle').click()
        }
    });

    var mouseX = 0;
    var mouseY = 0;
    var xp = 0;
    var maped = 0;
    var target = 0;

    $(document).on('touchstart', 'body', function (e) {
        touchscreen = 1;
        $('body').css('overflow', 'visible');
    });

    //region MouseMove_Event
    $("html").mousemove(function (event) {
        if (touchscreen != 1) {
            mouseX = event.clientX;
            mouseY = event.clientY;


            $(".bg").css('top', ((window.innerHeight - $(".bg").height()) / 2 - (mouseY - window.innerHeight / 2) / 25));
            $(".bg").css('left', ((window.innerWidth - $(".bg").width()) / 2 - (mouseX - window.innerWidth / 2) / 25));
            if (window.location.pathname != "/obratnaja-svjaz/") {
                if (mouseX / w < 0.1) {
                    target = 0;
                }
                else if (mouseX / w > 0.9) {
                    target = window.innerHeight / 2 * 7 - w;
                    console.log
                }
                else {
                    target = (mouseX / w * (window.innerHeight / 2 * 7 - w));
                }

                xp += (target - xp) / 3;
                xp = Math.round(xp);
                $("#columns").css({left: xp * -1 + 'px'});
            }
            else {
                if (mouseX / w < 0.1) {
                    target = 0;
                }
                else if (mouseX / w > 0.7) {
                    target = window.innerHeight / 2 * 7 - w;
                    maped = 1;
                }
                if (mouseX / w < 0.5 && maped == 1) {
                    maped = 0;
                }
                else {
                    if (maped != 1) {
                        target = (mouseX / w * (window.innerHeight / 2 * 7 - w));
                    }
                }

                xp += (target - xp) / 3;
                xp = Math.round(xp);
                $("#columns").css({left: xp * -1 + 'px'});
            }
        }
    });
    //endregion

    function lightup(column) {
        column.find(".overlayblack").fadeTo(10, 0);
        column.find(".textwrap").css("background-color", "#FFF");
        column.find('.columnsmalltext').css("background-color", "#FFF");
        column.find('.firstprice').css("background-color", "#FFF");
        column.find('.secondprice').css("background-color", "#FFF");
        column.find(".textoverlay").css("color", "#18162B");
        column.find('.botshader').css('background-color', 'rgba(24, 22, 43, 0.75)');
        column.find('.innertext').css('color', 'rgba(255, 255, 255, 1)');
        column.find(".textoverlay").addClass("off");
    }

    function lightdown(column) {
        column.find('.addition').removeClass('moveAway');
        column.find(".overlayblack").fadeTo(10, 0.75);
        column.find('.firstprice').css("color", "#666");
        column.find('.secondprice').css("color", "#666");
        column.find(".textwrap").css("background-color", "#18162B");
        column.find('.columnsmalltext').css("background-color", "#18162B");
        column.find(".textoverlay").css("color", "#FFF");
        column.find(".textwrap").css('top', h / 100 * 60 + 'px');
        column.find('.overlayblack').css('opacity', '0.9');
        column.find(".textoverlay").removeClass("off");
        column.find('.botshader').css('background-color', 'rgba(24, 22, 43, 0)');
        column.find('.innertext').css('color', 'rgba(255, 255, 255, 1)');
        column.css('z-index', 5);
    }

    var fullwidth = window.innerHeight/100*350;

    $(document).scroll(function () {
        if (touchscreen == 1) {
            var f = Math.round(document.body.scrollLeft / window.innerWidth/0.66666-0.5);

            console.log(f);
            for(var i = 0; i<$('.columnblock').length; i++)
            {
                if (f == i)
                {
                    lightup($('.columnblock').eq(i));
                }
                else
                {
                    lightdown($('.columnblock').eq(i));
                }
            }
        }
    });

    //region All_Blocks_Hover


    $(".columnblock").hover(
        function () {
            if (!use) {
                $(this).find(".overlayblack").fadeTo(10, 0);
                $(this).find(".textwrap").css("background-color", "#FFF");
                $(this).find('.columnsmalltext').css("background-color", "#FFF");
                $(this).find('.firstprice').css("background-color", "#FFF");
                $(this).find('.secondprice').css("background-color", "#FFF");
                $(this).find(".textoverlay").css("color", "#18162B");
                $(this).find('.botshader').css('background-color', 'rgba(24, 22, 43, 0.75)');
                $(this).find('.innertext').css('color', 'rgba(255, 255, 255, 1)');
                $(this).find(".textoverlay").addClass("off");
            }
        }, function () {
            if (!use) {
                f = 0;
                $(this).find('.addition').removeClass('moveAway');
                $(this).find(".overlayblack").fadeTo(10, 0.75);
                $(this).find('.firstprice').css("color", "#666");
                $(this).find('.secondprice').css("color", "#666");
                $(this).find(".textwrap").css("background-color", "#18162B");
                $(this).find('.columnsmalltext').css("background-color", "#18162B");
                $(this).find(".textoverlay").css("color", "#FFF");
                $(this).find(".textwrap").css('top', h / 100 * 60 + 'px');
                $(this).find('.overlayblack').css('opacity', '0.9');
                $(this).find(".textoverlay").removeClass("off");
                $(this).find('.botshader').css('background-color', 'rgba(24, 22, 43, 0)');
                $(this).find('.innertext').css('color', 'rgba(255, 255, 255, 1)');
                $(this).css('z-index', 5);
            }
        }
    );
    //endregion
    //region Hover
    $(".maincol1").hover(
        function () {
            if (!use) {
                $("#c1tb").css("color", "#000");
                $("#c1ts").css("color", "#000");
                $("#logo").css("opacity", "0");
                $(this).find(".overlayblack1").css("background-color", "#FFF");
                $(this).css("color", "#18162B");
            }
        }, function () {
            if (!use) {
                $("#c1tb").css("color", "#FFF");
                $("#c1ts").css("color", "#18162B");
                $("#logo").css("opacity", "1");
                $(this).find(".overlayblack1").css("background-color", "#18162B");
                $(this).css("color", "#FFF");
            }
        }
    );
    //endregion


    initialise();



    $("#submit_call").on('click', function () {
        var time = 6000;
        if (document.getElementById('phone').value != '') {
            
            var countdown = setInterval(function () {
                if (time > 0) {
                    time -= 1;
                }
                else {
                    clearInterval(countdown);
                    $('#timing').fadeOut();
                    $('#recallbutton').fadeIn();
                    $('#recallquestion').fadeIn();
                }
                if (time >= 1000) {
                    document.getElementById('timing').innerHTML = "00:" + String(time).substr(0, 2) + ":" + String(time).substr(2, 4);
                }
                else if (time < 1000 && time >= 100) {
                    document.getElementById('timing').innerHTML = "00:0" + String(time).substr(0, 1) + ":" + String(time).substr(1, 3);
                }
                else if (time < 100 && time >= 10) {
                    document.getElementById('timing').innerHTML = "00:00:" + String(time).substr(0, 2);
                }
                else if (time < 10) {
                    document.getElementById('timing').innerHTML = "00:00:0" + String(time).substr(0, 1);
                }
            }, 10);

            $('#timing').fadeIn();
            $('#submit_call').fadeOut();
            $('#phone').fadeOut();
        }
    });

    $("#recallbutton").on('click', function () {
        var time = 6000;
        if (document.getElementById('phone').value != '') {

            document.getElementById('callback-frame').contentWindow.document.getElementsByClassName('actionCallAgain')[0].click();

            var countdown = setInterval(function () {
                if (time > 0) {
                    time -= 1;
                }
                else {
                    clearInterval(countdown);
                    $('#timing').fadeOut();
                    $('#recallbutton').fadeIn();
                    $('#recallquestion').fadeIn();
                }
                if (time >= 1000) {
                    document.getElementById('timing').innerHTML = "00:" + String(time).substr(0, 2) + ":" + String(time).substr(2, 4);
                }
                else if (time < 1000 && time >= 100) {
                    document.getElementById('timing').innerHTML = "00:0" + String(time).substr(0, 1) + ":" + String(time).substr(1, 3);
                }
                else if (time < 100 && time >= 10) {
                    document.getElementById('timing').innerHTML = "00:00:" + String(time).substr(0, 2);
                }
                else if (time < 10) {
                    document.getElementById('timing').innerHTML = "00:00:0" + String(time).substr(0, 1);
                }
            }, 10);

            $('#timing').fadeIn();
            $('#recallbutton').fadeOut();
            $('#recallquestion').fadeOut();
        }
    });

});