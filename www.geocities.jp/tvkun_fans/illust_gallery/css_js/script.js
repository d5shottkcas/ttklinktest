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
	$(".wipe").css("display","none");
	$(".sp_button").on("click", function() {
		$(".wipe").slideToggle();
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
/*〓ピックアップ〓〓〓〓*/
/*〓〓〓〓〓〓〓〓〓〓〓*/
jQuery(function($) {
$.fn.extend({
	picup : function(num) {
		return this.each(function() {
			var chn = $(this).children().hide().length;
			for(var i = 0; i < num && i < chn; i++) {
				var r = parseInt(Math.random() * (chn - i)) + i;
			$(this).children().eq(r).show().prependTo($(this));
			}
		});
	}
});
$(function(){
	$("[picup]").each(function() {
	$(this).picup($(this).attr("picup"));
	});
});
});
/*〓〓〓〓〓〓〓〓〓〓〓*/



/*〓〓〓〓〓〓〓〓〓〓〓*/
/*〓ＪＳＯＮデータ〓〓〓*/
/*〓〓〓〓〓〓〓〓〓〓〓*/
$(document).ready(function () {
	$.getJSON("data.txt", function(data){
		for(var i in data){
//**************************************************************************************//
			for(var m in data[i].headline){$("#info").append("<li><div class='oct'></div><p><strong>" + data[i].headline[m].ttl + "</strong><br>" + data[i].headline[m].mess + "</p>");}
//**作品リスト**************************************************************************//
			for(var d in data[i].illust){$("#list").append("<li><a href='#IST_" + data[i].illust[d].nam + "'>" + data[i].illust[d].title + "</a></li>");}
//**新着コメント************************************************************************//
			for(var v in data[i].ncmess){$(".newcomment").append("<li><a href='#IST_" + data[i].ncmess[v].nam + "'><div class='icon avt" + data[i].ncmess[v].avt + "'></div><div class='comment'>"+
									     "<span class='name'>CN." + data[i].ncmess[v].name + "</span><p>" + data[i].ncmess[v].mess + "</p><span class='data'>Title." + data[i].ncmess[v].title + " / IST." + data[i].ncmess[v].nam + "</span></li>");}	
//**作品データ**************************************************************************//
			for(var d in data[i].illust){
				$(".gallery").append("<li class='illustlist  " + data[i].illust[d].type + "' id='IST_" + data[i].illust[d].nam + "'>"+
						    "<h1>" + data[i].illust[d].title + "</h1>"+
						    "<img src='../images/space.png' style='background:url(gallery/IST_" + data[i].illust[d].nam + ".jpg) no-repeat center center /100%;'>"+
						    "<p class='data'>IST:" + data[i].illust[d].nam + " * illust." + data[i].illust[d].name + "</p>"+
						    "<p class='message'>" + data[i].illust[d].mess + "</p></li>");}
//**イラストへのコメント******************************************************************//
			for(var c in data[i].comment){$(".gallery").append("<li><div class='comment'><div class='icon avt" + data[i].comment[c].avt + "'></div>"+
									   "<div class='messagebox'><span>茶の間戦士ネーム：" + data[i].comment[c].name + "</span>"+
									   "<p>" + data[i].comment[c].mess + "</p></div></li>");}
//****************************************************************************************//
		}
	});
});
/*〓〓〓〓〓〓〓〓〓〓〓*/