﻿$(document).ready(function () {
	$.getJSON("data.txt", function(data){
		for(var i in data){
//**************************************************************************************//
//**メッセージ情報**********************************************************************//
//**************************************************************************************//
	for(var d in data[i].bbsdt){
		$(".mmbox").append("<li class='bbsdata'>"+
				    "<div class='avt avt_" + data[i].bbsdt[d].avt + "'></div><div class='record'>"+
				    "<p class='name'>CN:" + data[i].bbsdt[d].name + "</p>"+
				    "<h1>" + data[i].bbsdt[d].title + "</h1><br style='clear:both;'>"+
				    "<p class='mess'>" + data[i].bbsdt[d].mess + "</p>"+
				    "<p class='userdt'>" + data[i].bbsdt[d].data + "</p></div></li>");}
//**************************************************************************************//
//**管理者からのメッセージ**************************************************************//
//*****（基本使わないが念のため）*******************************************************//
//**************************************************************************************//
for(var c in data[i].ownermess){$(".mmbox").append("<li class='owner'>"+
						   "<p>" + data[i].ownermess[c].mess + "</p>"+
						   "<div class='avt avt_oct'></div></li>");}
//****************************************************************************************//
		}
	});
});