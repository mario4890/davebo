$(document).ready(function () {

    var $width = $(window).width();
    var $outerWidth = $('#bg').innerWidth();
    console.log(screen.width);



//    $('#bg').css({
//        left: ($(window).width() - $('#bg').outerWidth())/2
//    }); 

//    $('#bg').load(alert($('#bg').outerWidth())); 

    if (screen.width > 1583) {
        $('#camera_wrap').camera({
            navigationHover: false,
            mobileNavHover: false,
            height: '1100px',
            alignment: 'center',
            piePosition: 'rightTop',
            overlayer: false,
            pagination: false,
            fx: 'simpleFade',
            time: 5000
        });
    } else {
        $('#camera_wrap').camera({
            navigationHover: false,
            mobileNavHover: false,
            height: '600px',
            alignment: 'center',
            piePosition: 'rightTop',
            overlayer: false,
            pagination: false,
            fx: 'simpleFade',
            time: 5000
        });
    }

    window.mobilecheck = function () {
        var check = false;
        (function (a) {
            if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) {
                check = true;
                iframeClick();
            }

        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    };

    $(function () {
        var $video = $('#bg');
        if (window.mobilecheck()) {
            $video.remove();
            $('#wrapper nav').remove();
        }
    });

    $('.menu').click(function () {
        $('#bs-example-navbar-collapse-1').removeClass('in');
        $('#bs-example-navbar-collapse-1').attr('aria-expanded', false);
    });

    $('.navbar li a').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
                    || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body')
                        .animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });

    $('.js-navbarBrand').click(function (e) {
        e.preventDefault();
    });

    $('.js-arrow').click(function (e) {
        var $dataSection = $(this).attr('data-section');
        var $target = $('section[id=' + $dataSection + ']');
        if ($target.length) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $target.offset().top
            }, 1000);
        }
    });

    $(".js-volume").click(function (e) {
        e.preventDefault();
        volume();
    });

    $(".js-image").mouseenter(function (e) {
        $(this).parent().find(".img-text").css({'display': 'block'})
    });

    $(".js-image").mouseout(function (e) {
        $(this).parent().find(".img-text").css({'display': 'none'})
    });

    $('.js-photo').click(function () {
        var $video = $('#bg');
        if ($video.prop('muted', true)) {
            $('.js-volume').attr('src', './graph/speakerOff.svg');
            $('.js-volume').attr('title', 'Włącz głos');
        } else {
            volume();
        }
    });

    $(".js-photo").click(function () {
        var $id = $(this).attr('data-id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        showModal();
        $.ajax({
            type: "POST",
            url: "./",
            data: {id: $id, _token: CSRF_TOKEN},
            dataType: 'JSON',
            success: function (data) {
                $('#myModalLabel').text(data[0].name);
                $('.iframe').attr("src", data[0].url + '?showinfo=0&autoplay=1');
            }
        });

    });
    
    $('.js-photoHit').click(function () {
        var $video = $('#bg');
        if ($video.prop('muted', true)) {
            $('.js-volume').attr('src', './graph/speakerOff.svg');
            $('.js-volume').attr('title', 'Włącz głos');
        } else {
            volume();
        }
    });
    
    $(".js-photoHit").click(function () {
        var $id = $(this).attr('data-id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        showModal();
        $('#myModalLabel').text("Dave Bo Project - The Greatest Saxophone Hits");
        $('.iframe').attr("src", 'https://www.youtube.com/embed/Q-QHo3FLp08' + '?showinfo=0&autoplay=1');

    });
    
    $('.js-photoProject').click(function () {
        var $video = $('#bg');
        if ($video.prop('muted', true)) {
            $('.js-volume').attr('src', './graph/speakerOff.svg');
            $('.js-volume').attr('title', 'Włącz głos');
        } else {
            volume();
        }
    });
    
    $(".js-photoProject").click(function () {
        var $id = $(this).attr('data-id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        showModal();
        $('#myModalLabel').text("Dave Bo Project - Stand By Me");
        $('.iframe').attr("src", 'https://www.youtube.com/embed/OQJs_qRE4mA' + '?showinfo=0&autoplay=1');

    });

    $("video").prop("volume", 0.3);

    $('.js-backModal').click(function () {
        hideModal();
    });

    $('.js-myModal').click(function (e) {
        e.stopPropagation();
    });

    $('.js-close').click(function () {
        hideModal();
    });
});

function volume() {
    var $volume = $(this);
    var $video = $('#bg');

    if ($video.prop('muted')) {
        $video.prop('muted', false);
        $('.js-volume').attr('src', './graph/speakerOn.svg');
        $('.js-volume').attr('title', 'Wyłącz głos');
    } else {
        $video.prop('muted', true);
        $('.js-volume').attr('src', './graph/speakerOff.svg');
        $('.js-volume').attr('title', 'Włącz głos');
    }
}
;

function showModal() {
    $('.js-myModal').css({
        "display": "block"
    });
    $('.js-backModal').css({
        "display": "block"
    });
}
;

function hideModal() {
    $('.js-myModal').css({
        "display": "none"
    });

    $('.js-backModal').css({
        "display": "none"
    });

    $('.iframe').attr("src", '');
}
;

function iframeClick() {
    $('.iframe').click();
}
    