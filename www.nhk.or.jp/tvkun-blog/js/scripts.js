/* Comments */
function _get_param(_url) {
    var _index = _url.indexOf('?', 0);
    var query = _url.substr(_index + 1);
    var parms = query.split('&');
    var result = new Array();
    for (var i=0; i<parms.length; i++) {
        var pos = parms[i].indexOf('=');
        if (pos > 0) {
            var key = parms[i].substring(0,pos);
            var val = parms[i].substring(pos+1);
            result[key] = val;
        }
    }
    return result;
}
function OpenComments (_url) {
    var _jump_url = 'https://cgi2.nhk.or.jp/cgiblog/jumpcomments.html?entry_id=';
    var _q_param = _get_param(_url);
    var _entry_id = _q_param['entry_id'];
    if (_entry_id.match(/[^0-9]/g)) {
        _entry_id = "";
    }
    _jump_url = _jump_url + _entry_id;
    _open_window = window.open(_jump_url,
       'comments',
       'width=540,height=660,scrollbars=yes,status=yes'
     );
}


/* search pagenate  */
function js_page_jump(_formname, _page) {
    var _form   = document.getElementById(_formname);
    if (_form){
        var _limit  = _form.limit;
        var _offset = _form.offset;
        if ((_limit) && (_offset)){
            _offset.value = "0";
            if (_page > 1){
                _offset.value = _limit.value * (_page - 1);
            }
            _form.submit();
        }
    }
}