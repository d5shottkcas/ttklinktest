document.write('<div class="copyright_date">');
document.write('Copyright (C) 2010-2018 天てれYOUTPIA <span>★</span> Copyright (C) 天てれ情報YOUTIPA<br>');
document.write('天才てれびくんYOU (C) NHK All Rights Reserved.<br>');
document.write("わらたま ドッカ～ン(C)NHK <span>★</span> ");
document.write('少年アシベ GO!GO!ゴマちゃん(C) 森下裕美･OOP／Team Goma<br>');
document.write('ねこねこ日本史(C)2016「ねこねこ日本史」製作委員会<br>');
//document.write("どちゃもんあさめしまえ (C) NHK／神風動画");
document.write('ビットワールド (C) NHK All Rights Reserved. <span>★</span> ');
document.write('あはれ！名作くん (C) MSK All Rights Reserved.<br>');
document.write('</div>');



/*--ページトップスクロール--*/
$(function(){
    var showTop = 100;
    $('body').append('<a href="javascript:void(0);" id="fixedTop">ページ上へ</a>');
    var fixedTop = $('#fixedTop');
    fixedTop.on('click',function(){
        $('html,body').animate({scrollTop:'0'},500);
    });
    $(window).on('load scroll resize',function(){
        if($(window).scrollTop() >= showTop){
            fixedTop.stop().animate({bottom:'00px'},200);
        } else if($(window).scrollTop() < showTop){
            fixedTop.stop().animate({bottom:'-60px'},200);
        }
    });
});
/*--ページスクローラー------*/
$(function(){
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});
/*--------------------------*/