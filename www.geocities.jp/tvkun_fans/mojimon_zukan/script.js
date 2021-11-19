/*〓PC版に切り替え〓〓〓〓〓〓*/
/*〓モーダルウィンドウ版〓〓〓*/
if(window.matchMedia('(min-width:768.1px)').matches){

$(function(){
    $('div.moji_list ul li').click(function(){
        $('body').append('<div class="modal-overlay"></div>');
        $('.modal-overlay').fadeIn('fast');
        var modal = '#' + $(this).attr('popup');
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

}
/*〓SP版に切り替え〓〓〓〓〓〓*/
/*〓フリックロール〓〓〓〓〓〓*/
else {

$(function(){
	flscroll('div.mojimon1','div.moji_list1');
	flscroll('div.mojimon2','div.moji_list2');
	flscroll('div.mojimon3','div.moji_list3');
	flscroll('div.mojimon4','div.moji_list4');
	flscroll('div.mojimon5','div.moji_list5');
	flscroll('div.mojimon6','div.moji_list6');
	flscroll('div.mojimon7','div.moji_list7');
	flscroll('div.mojimon8','div.moji_list8');
});
function flscroll(icons,targets) {
	var $setMainId = $(icons);
	var $setThumbId  = $(targets);
	var scrollSpeed  = 800;
	var Ww = $(icons).width();
	$('div.mojimon ul li').css('width',Ww+'px');

	var $setMainUl = $setMainId.children('ul'),
	$setThumbUl = $setThumbId.children('ul'),
	$setThumbLi = $setThumbUl.children('li'),
	$setThumbLiFirst = $setThumbUl.children('li:first'),

	listWidth = parseInt($setMainUl.children('li').css('width')),
	listCount = $setMainUl.children('li').length,
	leftMax = -((listWidth)*((listCount)-1));

	$setMainUl.each(function(){
		$(this).css({width:(listWidth)*(listCount)});
	});
	var isTouch = ('ontouchstart' in window);
	$setMainUl.bind(
		{'touchstart mousedown': function(e){
			var $setMainUlNot = $setMainId.children('ul:not(:animated)');
			$setMainUlNot.each(function(){
				e.preventDefault();
				this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
				this.leftBegin = parseInt($(this).css('left'));
				this.left = parseInt($(this).css('left'));
				this.touched = true;
			});
		},'touchmove mousemove': function(e){
			if(!this.touched){
				return;
			}
			e.preventDefault();
			this.left = this.left - (this.pageX - (isTouch ? event.changedTouches[0].pageX : e.pageX) );
			this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);

			if(this.left < 0 && this.left > leftMax){
				$(this).css({left:this.left});
			} else if(this.left >= 0) {
				$(this).css({left:'0'});
			} else if(this.left <= leftMax) {
				$(this).css({left:(leftMax)});
			}
		},'touchend mouseup mouseout': function(e){
			if (!this.touched) {
				return;
			}
			this.touched = false;

			var $setThumbLiActive = $setThumbUl.children('li.active');

			if(this.leftBegin > this.left && (!((this.leftBegin) === (leftMax)))){
				$(this).stop().animate({left:((this.leftBegin)-(listWidth))},scrollSpeed);
				$setThumbLiActive.each(function(){
					$(this).removeClass('active');
					$(this).next().addClass('active');
				});
			} else if(this.leftBegin < this.left && (!((this.leftBegin) === 0))) {
				$(this).stop().animate({left:((this.leftBegin)+(listWidth))},scrollSpeed);
				$setThumbLiActive.each(function(){
					$(this).removeClass('active');
					$(this).prev().addClass('active');
				});
			} else if(this.leftBegin === 0) {
				$(this).css({left:'0'});
			} else if(this.leftBegin <= leftMax) {
				$(this).css({left:(leftMax)});
			}
		}
	});
	$setThumbLi.click(function(){
		var connectCont = $setThumbLi.index(this);
		$setMainUl.stop().animate({left:(-(listWidth)*(connectCont))},scrollSpeed);
		$setThumbLi.removeClass('active');
		$(this).addClass('active');
	});
	$setThumbLiFirst.addClass('active');
	$(window).resize(function(){
		var Ww = $(icons).width();
		$('div.mojimon li').css('width',Ww+'px');
		listWidth = parseInt($setMainUl.children('li').css('width'));
		leftMax = -((listWidth)*((listCount)-1));
		$setMainUl.each(function(){
			$(this).css({width:(listWidth)*(listCount)});
		});
		$setMainUl.stop().animate({left:0},scrollSpeed);
		$setThumbLi.removeClass('active');
		$setThumbLiFirst.addClass('active');
	});
}

}