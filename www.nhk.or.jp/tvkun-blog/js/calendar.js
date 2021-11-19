data = new Date();
year = data.getYear();
year = (year < 2000) ? year + 1900 : year;
month = data.getMonth() + 1;
if(month < 10) {
    month = '0' + month;
}
date = data.getDate();
table = document.getElementById('calendarTable');
flag = 0;
summary = table.getAttribute('summary');
text = year + '年' + month + '月';
if (summary.indexOf(text) != -1) {
    elements = table.getElementsByTagName('tr');
    for(k = 0; k < elements.length; k++) {
        cols = elements[k].childNodes;
        for(i = 0; i < cols.length; i++){
	        if (cols[i].childNodes.length){
	            if((cols[i].childNodes)[0].nodeName == 'A') {
	                if((cols[i].childNodes)[0].innerHTML == date) {
	                    cols[i].setAttribute('class','today');
	                    cols[i].setAttribute('className','today');
	                }
	            } else {
	                if (cols[i].innerHTML == date) {
	                    cols[i].setAttribute('class','today');
	                    cols[i].setAttribute('className','today');
	                }
	            }
	        }
        }
    }
}