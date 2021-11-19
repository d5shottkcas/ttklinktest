/*〓PC版に切り替え〓〓〓*/
if(window.matchMedia('(min-width:768.1px)').matches){
$(function(){
//	$(".menu").css("display","none");
	$(".sp_button").on("click", function() {
		$(".menu").slideToggle();
	});
});
}
/*〓SP版に切り替え〓〓〓*/
else {
$(function(){
	$(".menu").css("display","none");
	$(".sp_button").on("click", function() {
		$(".menu").slideToggle();
	});
});
}
/*〓〓〓〓〓〓〓〓〓〓〓*/
/*〓メニュースクロール〓*/
/*〓〓〓〓〓〓〓〓〓〓〓*/

jQuery(function($) {
var nav    = $('.navigation'),
    offset = nav.offset();
$(window).scroll(function () {
  if($(window).scrollTop() > offset.top - 0) {
    nav.css('top', $(window).scrollTop() - offset.top + 5);
  } else {  nav.css('top', 0) }
});});

/*〓〓〓〓〓〓〓〓〓〓〓*/
/*〓モーダルウィンドウ〓*/
/*〓〓〓〓〓〓〓〓〓〓〓*/

$(function(){
    $('dl.modal dt').click(function(){
        $('body').append('<div class="modal-overlay"></div>');
        $('.modal-overlay').fadeIn('fast');
        var modal = '#' + $(this).attr('popup');
        modalResize();
        $(modal).fadeIn('fast');
        $('.modal-overlay, span.pop_clause').off().click(function(){
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

/*〓〓〓〓〓〓〓〓〓〓〓*/