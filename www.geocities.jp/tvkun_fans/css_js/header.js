document.write('<div class="main_header">										'+
	'	<a href="http://www.geocities.jp/tvkun_fans/" target="_parent" class="main_logo">天てれYOUTPIA</a>	'+
	'	<ul class="topmenu">											'+
	'		<li><a href="http://www.geocities.jp/tvkun_fans/waratama/" target="_parent">	わらたまドッカ～ン</a></li>			'+
	'		<li><a href="http://www.geocities.jp/tvkun_fans/anime_gomachan/" target="_parent">少年アシベ<br>ＧＯ！ＧＯ！ゴマちゃん</a></li>	'+
	'		<li><a href="http://www.geocities.jp/tvkun_fans/anime_nekoneko/" target="_parent">ねこねこ日本史</a></li>			'+
	'	</ul>													');
/**番組サブタトル情報*********************/
document.write('<div class="oa_data">');
w = (new Date()).getDay();
/*-----------------------------------------*/
/*--メイン---------------------------------*/
	if(w == 1) document.write("■ 天才てれびくんYOU ■ 毎週月～木曜 午後６時２０分 <span class='br'>■<br></span>■ 力のもじもんvs立花団長 ■");
	if(w == 2) document.write("■ 天才てれびくんYOU ■ 毎週月～木曜 午後６時２０分 <span class='br'>■<br></span>■ 名レスラーと鍋を作れ ■");
	if(w == 3) document.write("■ 天才てれびくんYOU ■ 毎週月～木曜 午後６時２０分 <span class='br'>■<br></span>■ 連想ゲームで友情を競え ■");
	if(w == 4) document.write("■ 天才てれびくんYOU ■ 毎週月～木曜 午後６時２０分 <span class='br'>■<br></span>■ 茶の間戦士よ キミの奮闘に感謝する ■");
/*---サブ----------------------------------*/
	if(w == 5) document.write("<span class='big'>■ ビットワールド <span class='br'>■<br></span>■ 毎週金曜日 午後６時２０分から好評放送中!! ■	</span>");	/*-ビット--*/
	if(w == 6) document.write("<span class='big'>■ 天才てれびくんＹＯＵ <span class='br'>■<br></span>■ 毎週 月～木曜日 好評放送中!! ■		</span>");	/*-告知----*/
	if(w == 0) document.write("<span class='big'>■ 天才てれびくんＹＯＵ <span class='br'>■<br></span>■ 毎週 月～木曜日 好評放送中!! ■		</span>");	/*-告知----*/
/*-----------------------------------------*/
document.write('</div>');
//document.write('<div class="counter"><p>もじ魔獣による<br>世界の破滅まであと<span id="myFormDate">00</span>日</p></div><span maju="mojimaju" class="check">詳しく見る</span>');
/*******************************************/
document.write('</div>');



/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓もじ魔獣の詳細〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
document.write( '<div id="mojimaju">'+
		'	<img src="http://www.nhk.or.jp/tvkun/images/close_btn.png" class="close">'+
		'	<img src="http://www.geocities.jp/tvkun_fans/images/space.png" class="maju">'+
		'	<h1>どみねすとろんぐのもじ魔獣による<br>世界の破滅まであと<span id="myFormDate_pop">00</span>日</h1>'+
		'	<p>魔のもじもん「までぃえす」により、最強の敵「力」のもじもん「どみねすとろんぐ」がもじ魔獣に！完全体になるのは2月28日。「どみねすとろんぐ」が強大な力で世界を滅ぼす前に、茶の間戦士たちよ、てれび戦士と力を合わせて立ち向うのだ！</p>'+
		'</div>');
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓カウントダウン〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
$(function(){
	myD   = new Date(); 
	myNextYear = new Date( 2019 , 1 , 28 ); //月は本来のものより-1する
	myMsec = myNextYear.getTime()-myD.getTime();
	myNextDay  = Math.floor(myMsec/(1000*60*60*24));
$("#myFormDate").html(myNextDay+1);
$("#myFormDate_pop").html(myNextDay+1);
});
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓もじ魔獣画面〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
$(function(){
    $('span.check').click(function(){
        $('body').append('<div class="modal-overlays"></div>');
        $('.modal-overlays').fadeIn('slow');
        var modal = '#' + $(this).attr('maju');
        modalResize();
        $(modal).fadeIn('slow');
        $('.modal-overlays, img.close').off().click(function(){
            $(modal).fadeOut('fast');
            $('.modal-overlays').fadeOut('slow',function(){
                $('.modal-overlays').remove();
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
            $(modal).css({'left': x + 'px','top': 5 + 'vw'});
        }
    });
});
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/
/*〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓〓*/




//document.write('<div class="maininfo"><h1>放送休止のお知らせ</h1><p>高校野球中継延長のため８月１４日の天才てれびくんＹＯＵ「火か氷か！因縁の対決」の放送はお休みです。ご了承ください。</p></div>');
