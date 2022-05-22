// pay//
$('.pay_method').on('click', function () {
    if ($(this).attr('attr') == 'payment_card_Section') {
        $('.payment_card_Section').show();
        $('.e-invoicing_section').removeAttr('style');
    } else {
        $('.payment_card_Section').removeAttr('style');
        $('.e-invoicing_section').show();
    }
});
$('body').on({
    'click': function () {
        $('.th-pop_up').animate({ 'margin-top': '-250%' });
    }
}, '.close');

$('body').on({
    'click': function () {
        $('.th-pop_up').show().animate({ 'margin-top': '0px' });
    }
}, '.pop_up_con .su_button');


$(document).ready(function () {
    repeted();
    function repeted() {
        x = 1;
        u = 0;
        var classes = $('.flickity-page-dots li').map(function () {
            $(this).attr('id', 'do' + u);
            u++;
            return $(this).attr('id');
        });
        setInterval(function () {
            if (classes.length == x) {
                repeted();
            }
            $('.put').trigger('click');
            x++;
        }, 3000);
    };

    $(".put").on('click', function () {
        // alert('set');
    })

    $(document).ready(function ($) {
        var url = window.location.href;
        var activePage = url;
        $('.deshboard_bar .nav-item a').each(function () {
            var linkPage = this.href;
            $(".deshboard_bar").each(function () {
                if ($(this).attr('attr') == 'setting-bar') {
                    $('[attr="setting-menu"]').addClass('active');
                }
            });
            if ($('[attr="setting-menu"]').attr('href') == activePage) {
                $('a[attr="pg-1"]').addClass('active');
            }
            if (activePage == linkPage) {
                $(this).addClass("active");
            }
        });
    });
})


$('.password_show i').on('click', function () {
    $('.password_show i').show();

    hideORshow = $(this).attr('attr');

    if (hideORshow == 'show') {
        $('.password_show input').attr('type', 'text');
        $('[attr="' + hideORshow + '"]').hide();
    } else {
        $('.password_show input').attr('type', 'password');
        $('[attr="' + hideORshow + '"]').hide();
    }
});
