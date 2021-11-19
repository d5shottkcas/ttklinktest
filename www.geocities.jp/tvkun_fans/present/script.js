/*---パスワード設定------------------------------------------------*/
function myButton(){
	myPassWord = document.myFormText.myFormTextPass.value;	//ソースを見ればパスワードが分かる
		     if ( myPassWord == "もじ守" ) location.href      = "present.html?id=wp01_mmd";
		else if ( myPassWord == "ワイワイ" ) location.href    = "present.html?id=wp02_member";
		else if ( myPassWord == "海鮮隊" ) location.href      = "present.html?id=wp03_searob";
		else if ( myPassWord == "withwithyou" ) location.href = "present.html?id=withwithyou";


		else document.getElementById("error").style.display="block";
	}
/*---認証ページ設定------------------------------------------------*/
$(function () {
	var urlParam = location.search.substring(1);
	if(urlParam) {
		var param = urlParam.split('&');
		var paramArray = [];
	for (i = 0; i < param.length; i++) {
		var paramItem = param[i].split('=');
		paramArray[paramItem[0]] = paramItem[1];
	}	//パラメーターチェック（ソースを見れば分かる）
/*===守守団壁紙====================================================================================*/
	     if (paramArray.id == 'wp01_mmd')	{ $('.data').append(	'<h1>守守団壁紙</h1>	<img src="img/wallpaper_pc01-morimori.jpg"><br><ul>'+
									'<li class="long"><a href="img/wallpaper_pc01-morimori.jpg" target="_blank">パソコン版をダウンロード</a></li>'+
									'<li><a href="img/wallpaper_ip01-morimori.jpg" target="_blank">スマートフォン版を<br>ダウンロード</a></li>'+
									'<li><a href="img/wallpaper_ad01-morimori.jpg" target="_blank">アンドロイド版を<br>ダウンロード</a></li>'+
									'</ul><hr>');}
/*===てれび戦士壁紙================================================================================*/
	else if (paramArray.id == 'wp02_member'){ $('.data').append(	'<h1>てれび戦士壁紙</h1><img src="img/wallpaper_pc02-senshi.jpg"><ul>'+
									'<li class="long"><a href="img/wallpaper_pc02-senshi.jpg" target="_blank">パソコン版をダウンロード</a></li>'+
									'<li><a href="img/wallpaper_ip02-senshi.jpg" target="_blank">スマートフォン版を<br>ダウンロード</a></li>'+
									'<li><a href="img/wallpaper_ad02-senshi.jpg" target="_blank">アンドロイド版を<br>ダウンロード</a></li>'+
									'</ul><hr>');}
/*===海鮮隊壁紙====================================================================================*/
	else if (paramArray.id == 'wp03_searob'){ $('.data').append(	'<h1>海鮮隊壁紙</h1><img src="img/wallpaper_pc03-kaisen.jpg"><ul>'+
									'<li class="long"><a href="img/wallpaper_pc03-kaisen.jpg" target="_blank">パソコン版をダウンロード</a></li>'+
									'<li><a href="img/wallpaper_ip03-kaisen.jpg" target="_blank">スマートフォン版を<br>ダウンロード</a></li>'+
									'<li><a href="img/wallpaper_ad03-kaisen.jpg" target="_blank">アンドロイド版を<br>ダウンロード</a></li>'+
									'</ul><hr>');}

/*===海鮮隊壁紙====================================================================================*/
	else if (paramArray.id == 'withwithyou'){ $('.data').append(	'<h1>守守団壁紙</h1><img src="img/special/withwithyou_1280_1024.jpg"><p>お使いの端末にあったサイズを<br>お選びいただき、ダウンロードしてご利用ください。</p><ul>'+
									'<p>パソコン用</p>'+
									'<li><a href="img/special/withwithyou_1366_768.jpg" target="_blank">	1366×768</a></li>'+
									'<li><a href="img/special/withwithyou_1920_1080.jpg" target="_blank">	1920×1080</a></li>'+
									'<p>スマートフォン用</p>'+
									'<li><a href="img/special/withwithyou_640_1136.jpg" target="_blank">	640×1136</a></li>'+
									'<li><a href="img/special/withwithyou_720_1280.jpg" target="_blank">	720×1334</a></li>'+
									'<li><a href="img/special/withwithyou_750_1334.jpg" target="_blank">	750×1334</a></li>'+
									'<li><a href="img/special/withwithyou_1080_1920.jpg" target="_blank">	1080×1920</a></li>'+
									'<li><a href="img/special/withwithyou_1242_2208.jpg" target="_blank">	1242×2208</a></li>'+
									'<li><a href="img/special/withwithyou_1280_1024.jpg" target="_blank">	1280×1024</a></li>'+
									'</ul><hr>');}

/*=================================================================================================*/
	else 					{ $('.data').append('<h1>ＥＲＲＯＲ</h1><h1 class="error">データが異常です</h1>');}
	}
});
/*-----------------------------------------------------------------*/