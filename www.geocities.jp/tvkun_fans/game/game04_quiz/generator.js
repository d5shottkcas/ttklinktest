var q_now = 0, tokuten = 0, tsum = 0;
var ques = new Array();
for (i=0;  i<q_no ; i++){ques[i] = 0;}
var qs_len = questions.length;
if (qs_len < q_no){$(function() {$("#errormes").css({"display": "block"});});throw new Error(0, "");}
//if (qs_len < q_no){alert("出題数に異常が発生しています。\n申し訳ございませんが、出題されているクイズのテーマを明記の上、ご意見ご感想までメールでお伝えください。");throw new Error(0, "");}
var seq = new Array();
for (i=0; i<qs_len; i++){seq[i] = i;}
if (q_rnd){shuffle(seq);}
$(function(){
	if (q_dsp){var q_img_div="";}else{var q_img_div="";}			//正解不正解かは表示させない
	if (q_dsp && q_sound){var sound_msg="";}else{var sound_msg="";}		//正解不正解音はださない
	if (q_timer){var q_timer_div="";}else{var q_timer_div="";}		//残り時間は設定しない
	$("#quiz_box").html("<div class='q_box'><div id='message'><div class='messbox'>" + openning_msg + "</div><div id='quiz_start'>挑戦する</div></div><div id='quiz_wrap'></div></div>"
	 + q_img_div + q_timer_div);
	$("#quiz_wrap");
	$("#quiz_start").click(function(){
		$("#message").hide();
		var a_seq = new Array();
		go_question();
	});
});
function next_question(){
	q_now ++;
	if (q_now >= q_no){n = setTimeout(ending,1000);}
	else {go_question();}
}
function go_question(){
		var list_html="<div id='quiz_answer'>";
		a_seq = [];
		for (i=0; i<questions[seq[q_now]][1].length; i++){a_seq[i] = i;}
		if (q_sfl){shuffle(a_seq);}
		for (i=0; i < a_seq.length; i++){
			j = a_seq[i] + 1;
			list_html = list_html + "<div id='qan" + j + "' class='qan_list' onclick='q_answer(" + j + ");'>" + questions[seq[q_now]][1][a_seq[i]] + "</div>";
		}
		list_html += "</div>";
		$("#quiz_wrap").html("<div class='question_box'>" + questions[seq[q_now]][0] + "</div>" + list_html).fadeIn("fast");

}
function q_answer(ans){
	if (ques[q_now] == 0){
		if (q_timer){clearInterval(qt_interval);}
		ques[q_now] = 1;
		for (i=0; i < questions[seq[q_now]][1].length; i++){
			j = i + 1;
			if (ans == j){$("#qan" + j).css("background","#ffe").css("border-top","2px solid #000").css("border-bottom","2px solid #ffe");}
			else{$("#qan" + j);}
		}
		if (questions[seq[q_now]][2] == ans){tokuten = tokuten + questions[seq[q_now]][3]; qa = 1;}
		else{qa = 0;}
		if (q_dsp){
			if (q_sound){$("#quiz_question").append("<embed src='"  + sound_file[qa] + "' autostart='true' hidden='true' loop='false' />");}
			$("#dsp" + qa ).fadeIn();
			nl=setTimeout(q_answer_close,q_dtime*1000);}
		else {nl=setTimeout(q_answer_close,500);}
	}
}
function q_answer_close(){
	tsum = tsum + questions[seq[q_now]][3];
	$("#dsp0,#dsp1").hide();
	$("#quiz_wrap").fadeOut("fast");
	n = setTimeout(next_question,1000);
}

function ending(){
	if (tokuten < 1){var q_tok=0;}
	else {var q_tok=Math.round(tokuten / tsum * 10);}
	for (i=0; i < endings.length; i++){
		if (q_tok >= endings[i][0]){
			last_msg = endings[i][1];
			break;
		}
	}
	$("#message").html("<div class='end_tk'>結果発表！<br>10問中<b>" + q_tok + "問正解</b>でした。<br>" + last_msg + "</div><div id='quiz_start' onclick='location.reload();'>もう一度挑戦する</div>").fadeIn("fast");
}
function shuffle(list) {var i = list.length;while (--i) {var j = Math.floor(Math.random() * (i + 1));if (i == j) continue;var k = list[i];list[i] = list[j];list[j] = k;}return list;}