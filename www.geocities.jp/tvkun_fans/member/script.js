
$(function(){
    $('div.member_list ul li').click(function(){
        $('body').append('<div class="modal-overlay"></div>');
        $('.modal-overlay').fadeIn('fast');
        var modal = '#' + $(this).attr('member');
        modalResize();
        $(modal).fadeIn('fast');
        $('.modal-overlay, span.clause').off().click(function(){
            $(modal).fadeOut('fast');
            $('.modal-overlay').fadeOut('fast',function(){
                $('.modal-overlay').remove();
            });
        });
        $(window).on('resize', function(){
            modalResize();
        });
        function modalResize(){
            var w = $(window).width();
            var h = $(window).height();
            var x = (w - $(modal).outerWidth(true)) / 2;
            var y = (h - $(modal).outerHeight(true)) / 2;
            $(modal).css({'left': x + 'px','top': y + 'px'});
        }
    });
});
