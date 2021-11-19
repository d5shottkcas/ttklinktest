var g_flag; //0:ゲーム中 1:ゲーム終了
var b_flag; //0:BACK不可能 1:BACK可能
var c_block = new Array(200); //現在のブロックの色
var p_block = new Array(200); //BACK時のブロックの色
var c_score; //現在のSCORE
var p_score; //BACK時のSCORE
var b_num; //消えるブロックの数

function shuffleBlock(){
	var i;
	for(i=1; i<=200; i++){
		c_block[i] = Math.ceil(Math.random()*5);
		p_block[i] = 0;
	}
}
function writeBlock(){
	var i;
	for(i=1; i<=200; i++){
		if(c_block[i] != p_block[i]){
			document.images[i-1].src = + c_block[i] + ".png";
		}
	}
}
function writeStatus(){
	var b_color = new Array(5);
	var i;
	for(i=0; i<=5; i++) b_color[i] = 0;
	for(i=1; i<=200; i++){
		if(c_block[i] <= 5){
			b_color[c_block[i]]++;
		} else{
			b_color[c_block[i]-5]++;
		}
	}
	for(i=1; i<=5; i++){
		document.forms[0].elements[i-1].value = b_color[i];
	}
	document.forms[0].elements[5].value = 200 - b_color[0];
	document.forms[0].elements[6].value = c_score;
	document.forms[0].elements[7].value = b_num;
}
function selectImage(n){
	var s_block = new Array(50);
	var i,clr,f_num,l_num;
	if(g_flag == 0 && c_block[n] <= 5){
		for(i=1; i<=200; i++){
			if(c_block[i] >= 6){
				c_block[i] = c_block[i] - 5;
				document.images[i-1].src = + c_block[i] + ".png";
			}
		}
		b_num = "";
		if(c_block[n] != 0 && (n >= 21 && c_block[n] == c_block[n-20] || n%20 != 0 && c_block[n] == c_block[n+1] || n <= 180 && c_block[n] == c_block[n+20] || n%20 != 1 && c_block[n] == c_block[n-1])){
			clr = c_block[n];
			c_block[n] = clr + 5;
			s_block[1] = n;
			f_num = 1;
			l_num = 1;
			while(f_num <= l_num){
				for(i=f_num; i<=l_num; i++){
					if(s_block[i] >= 21 && c_block[s_block[i]-20] == clr){
						l_num++;
						s_block[l_num] = s_block[i] - 20;
						c_block[s_block[i]-20] = c_block[n];
					}
					if(s_block[i]%20 != 0 && c_block[s_block[i]+1] == clr){
						l_num++;
						s_block[l_num] = s_block[i] + 1;
						c_block[s_block[i]+1] = c_block[n];
					}
					if(s_block[i] <= 180 && c_block[s_block[i]+20] == clr){
						l_num++;
						s_block[l_num] = s_block[i] + 20;
						c_block[s_block[i]+20] = c_block[n];
					}
					if(s_block[i]%20 != 1 && c_block[s_block[i]-1] == clr){
						l_num++;
						s_block[l_num] = s_block[i] - 1;
						c_block[s_block[i]-1] = c_block[n];
					}
				}
				f_num = l_num + 1;
			}
			for(i=1; i<=l_num; i++){
				document.images[s_block[i]-1].src = + (clr+5) + ".png";
			}
			b_num = l_num;
		}
		document.forms[0].elements[7].value = b_num;
	}
}

function clickImage(n){
	var i,j,k,flag,res;
	if(g_flag == 0 && c_block[n] != 0 && c_block[n] >= 6){
		b_flag = 1;
		for(i=1; i<=200; i++) p_block[i] = c_block[i];
		for(i=1; i<=200; i++){
			if(c_block[i] >= 6){
				for(j=i; j>0; j=j-20){
					if(j <= 20){
						c_block[j] = 0;
					} else{
						c_block[j] = c_block[j-20];
					}
				}
			}
		}
		for(i=2; i<=19; i++){
			if(c_block[180+i-1] != 0 && c_block[180+i] == 0){
				flag = 0;
				for(j=i+1; j<=20; j++){
					if(c_block[180+j] != 0){
						flag = 1;
						j = 99;
					}
				}
				if(flag == 1){
					while(c_block[180+i] == 0){
						for(j=i; j<=19; j++){
							for(k=j; k<=200; k=k+20){
								c_block[k] = c_block[k+1];
							}
						}
						for(j=20; j<=200; j=j+20) c_block[j] = 0;
					}
				}
			}
		}
		writeBlock();
		p_score = c_score;
		c_score = c_score + (b_num-2) * (b_num-2);
		b_num = "";
		writeStatus();
		flag = 0;
		for(i=1; i<=200; i++){
			if(c_block[i] != 0 && (i >= 21 && c_block[i] == c_block[i-20] || i%20 != 0 && c_block[i] == c_block[i+1] || i <= 180 && c_block[i] == c_block[i+20] || i%20 != 1 && c_block[i] == c_block[i-1])){
				flag = 1;
				i = 999;
			}
		}
		if(flag == 0){
				for(i=1; i<=200; i++){
					if(c_block[i] != 0){
						c_score--;
						flag = 1;
					}
				}
				if(flag == 0) c_score = c_score + 1000;
				document.forms[0].elements[6].value = c_score;
				alert("ゲーム終了！”\nあなたの点数は "+c_score+" 点でした。お疲れ様です。");
				g_flag = 1;
		}
	}
}

function backGame(){
	var i,tmp;
	if(g_flag == 0 && b_flag == 1){
		b_flag = 0; //BACK不可能
		for(i=1; i<=200; i++){
			tmp = c_block[i];
			c_block[i] = p_block[i];
			p_block[i] = tmp;
		}
		writeBlock();
		c_score = p_score;
		b_num = "";
		writeStatus();
	}
}

function resetGame(){
	g_flag = 0; //ゲーム中
	b_flag = 0; //BACK不可能
	shuffleBlock();
	writeBlock();
	c_score = 0;
	b_num = "";
	writeStatus();
//	document.forms[0].elements[10].value = "";
}