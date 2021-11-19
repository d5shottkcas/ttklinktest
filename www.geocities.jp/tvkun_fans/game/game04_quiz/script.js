/* === 基礎設定 ===================================== */
var q_no=10;	/* 出題数 */
var q_rnd=1;	/* 出題順 0-昇順 1-ランダム */
var q_title="もじもじクイズ";
var q_dsp=0;	var q_sfl=1;	var q_dtime=0;	var q_timer=0;
/* === クイズの情報 ================================= */
document.open();
var tmp=location.search;
if(tmp!=""){
	tmp=tmp.substring(1,tmp.length);
	var tmp2=tmp.split("&");
	for(i in tmp2){
		var data=tmp2[i].split("=")[0];
		var nam=tmp2[i].split("=")[1];
		document.write('<script type="text/javascript" src="'+data+'_'+nam+'.js"></script>');
	}
}
document.close();
/* ================================================== */