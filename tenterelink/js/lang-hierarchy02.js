// CSSのURLを定義
var jpcss = '../../css/lang-jp.css';
var encss = '../../css/lang-en.css';
var twcss = '../../css/lang-tw.css';
var tlcss = '../../css/lang-tl.css';
// 画面表示時のCSSの読み込み設定
$(document).ready(
    function () {
        if (!Cookies.get('cookieCSS')) {
            // クッキー未登録であれば日本語選択
            $("#selectCSS").val("lang-jp");
        } else if (Cookies.get('cookieCSS') == 'lang-jp') {
            // クッキーが日本語登録であれば日本語選択
            $("#selectCSS").val("lang-jp");
            // jpCSSを読み込む
            $("#switchCSS").attr("href", jpcss);
        } else if (Cookies.get('cookieCSS') == 'lang-en') {
            // クッキーが英語登録であれば英語選択
            $("#selectCSS").val("lang-en");
            // enCSSを読み込み設定
            $("#switchCSS").attr("href", encss);
        } else if (Cookies.get('cookieCSS') == 'lang-tw') {
            // クッキーが漢語登録であれば漢語選択
            $("#selectCSS").val("lang-tw");
            // enCSSを読み込み設定
            $("#switchCSS").attr("href", twcss);
        } else if (Cookies.get('cookieCSS') == 'lang-tl') {
            // クッキーがタガログ語登録であればタガログ語選択
            $("#selectCSS").val("lang-tl");
            // enCSSを読み込み設定
            $("#switchCSS").attr("href", tlcss);
        }
    }
);
// セレクトボックス操作時の設定
$(function () {
    $('#selectCSS').change(function () {
        // セレクトボックスのvalueを取得
        var val = $(this).val();
        // valueによって読み込むCSSを変更する
        if (val == "lang-jp") {
            cssurl = jpcss;
        } else if (val == "lang-en") {
            cssurl = encss;
        } else if (val == "lang-tw") {
            cssurl = twcss;
        } else if (val == "lang-tl") {
            cssurl = tlcss;
        }
        // 選択結果をクッキーに登録する
        Cookies.set('cookieCSS', val);
        // CSSを読み込む
        $("#switchCSS").attr("href", cssurl);
    });
});