<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta name="keywords" content="天才てれびくんhello,天才てれびくんYOU,Let's天才てれびくん,大!天才てれびくん,天才てれびくんMAX,天てれ,てれび戦士,Dream5,">

  <title>天てれリンクプラス - 天才てれびくんhello,関連リンク集</title>

  <meta name="title" content="天てれリンクプラス - 天才てれびくんhello,関連リンク集">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="天てれリンクプラス - 天才てれびくんhello,関連リンク集" />
  <meta property="og:description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta property="og:url" content="https://www.tenterelink.net/" />
  <meta property="og:site_name" content="天てれリンクプラス" />
  <meta property="og:image" content="https://www.tenterelink.net/sozai/tenterelink-logo.png" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@tenterelink" />
  <meta http-equiv="Cache-Control" content="no-store">



  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/tenterelink.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Yusei+Magic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Economica:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
  <link href="css/lang-jp.css" rel="stylesheet" id="switchCSS">
  <link rel="manifest" href="manifest.json">

  <link rel="shortcut icon" href="https://www.tenterelink.net/sozai/favicon.ico" />
  <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->


  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-84393719-1', 'auto');
    ga('send', 'pageview');

  </script>

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-navi fixed-top">
    <div class="container">
      <a class="btn btn-title" href="#"><img src="sozai/ttklink.png" width="100" height="10" alt="天てれリンク"></img></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            $lines = file('csv/menu01.csv');
            $count = count($lines);
            for($i=0;$i<$count;$i++){

              $csv = explode(',',$lines[$i]);
              echo '<li class="nav-item">'.$csv[0].$csv[1].$csv[2].$csv[3].$csv[4].'</a>'.'</li>';
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="w-100 py-1">
    <div class="container">
      <div class="clearfix">
        <div class="float-right">
          Language：
          <select id="selectCSS">
            <option value="lang-jp">日本語</option>
            <option value="lang-en">English</option>
            <option value="lang-tw">漢語</option>
            <option value="lang-tl">Tagalog</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-lg-8">

        <header>
          <div class="title">
            <h1 class="sitetitle jp" lang="ja-JP">
              天てれリンク<br>プラス
            </h1>
            <h1 class="sitetitle en" lang="en-GB">
              Whiz-Kids TV Links
            </h1>
            <h1 class="sitetitle tw" lang="zh-TW">
              天てれLink
            </h1>
            <h1 class="sitetitle tl" lang="tl-PH">
              TENTERE LINK<br>PLUS
            </h1>
            <h1 class="subtitle jp" lang="ja-JP">「天才てれびくんhello,」<br>関連サイトリンク集</h1>
            <h1 class="subtitle en" lang="en-GB">"Whiz-Kids TV hello,"<br>links</h1>
            <h1 class="subtitle tw" lang="zh-TW">天才電視兒童連結集</h1>
            <h1 class="subtitle tl" lang="tl-PH">"NHK Tensai Terebikun hello,"links</h1>
          </div>
        </header>

      </div>

      <div class="col-lg-4">

        <div class="counter">
          <!-- FC2カウンター ここから -->
          <script language="JavaScript" type="text/javascript" src="//counter1.fc2.com/counter.php?id=2359267"></script>
          <noscript>
            <img src="//counter1.fc2.com/counter_img.php?id=2359267" alt="アクセスカウンター">
          </noscript>
          <!-- FC2カウンター ここまで -->
          <br>
          <iframe src="//now-visitor3.ziyu.net/counter.php?tentere/default/08/white/black///" width="150" height="15" scrolling="no"
            frameborder="0" marginwidth="0" marginheight="0" title="現在の閲覧者">
            <img src="//now-visitor3.ziyu.net/nojs_cnt.php?tentere/default/" width="1" height="1" alt="現在の閲覧者">
          </iframe>
        </div>

        <h2 class="top jp" lang="ja-JP">
          てれび戦士のブログやツイッターを多数リンク中。 所属事務所の情報もあります。
        </h2>
        <h2 class="top en" lang="en-BG">
          We are linking a lot of blog and Twitter of the TV warriors. There is the information of the entertainment office, too.
        </h2>
        <h2 class="top tw" lang="zh-TW">
          天才電視兒童連結集「天てれLink」
        </h2>
        <h2 class="top tl" lang="tl-PH">
          Ang mga blog sites at twitter ng terebi warior ay naka-saad sa site na 'to.
        </h2>

        <h2 class="top jp" lang="ja-JP">
          てれび戦士のブログは、メニューの『てれび戦士プロフィール』か『公式サイト・ブログ一覧』からどうぞ。
        </h2>
        <h2 class="top en" lang="en-BG">
          Please from "the TV warriors profile" of the menu or "a list of official site blog" when you want to see the blog of the
          TV warriors.
        </h2>
        <h2 class="top tw" lang="zh-TW">
          本站收錄本節目歷年演出者的部落格或官網連結，請多加利用
        </h2>
        <h2 class="top tl" lang="tl-PH">
          Makikita ang mga blog nila sa kategorya na 'Terebi Warior Profile o sa official list.
        </h2>

      </div>

    </div>
    <!-- /.row -->

    <div class="row">

      <div class="col-lg-12">

      <div class="my-2">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 天てれリンク自動 -->
        <ins class="adsbygoogle ins_ad" style="display:block" data-ad-client="ca-pub-9359745436138089" data-ad-slot="8890141261"
          data-ad-format="auto"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>

      </div>

    </div>
    <!-- /.row -->

    <div class="row">

      <div class="col-lg-12">

        <div class="info">

<div class="font-weight-bold jp" lang="ja-JP">
          <p>
            天てれリンクは、NHK教育テレビ(Eテレ)で放送中のテレビ番組
            <span class="text-ff8c00">『天才てれびくんhello,』</span>のファンのために、 多数存在する
            <em class="em">てれび戦士</em>や
             天てれ出演者、番組の関連サイトなどを集めようと思い、作り上げました。どうぞあなたの
            <span class="text-ff8c00">『天てれの友』</span>としてご活用下さい。
            </p>
            <p class="text-center">
            <a href="about/">【はじめての方へ】
            </a>
          </p>
          </div>
          <div class="font-weight-bold en" lang="en-GB">
          <p>
            This Web Site is Links Site of
            <span class="text-ff8c00">"Whiz-Kids TV hello,"</span> of English.
            <br> This Site is British English notations. Each contents are Japanese notations.
            </p>
            <p class="text-center">
            <a href="about/">(To the first person)</a>
          </p>
          </div>
          <div class="font-weight-bold tw" lang="zh-TW">
          <p>
            「天てれLink」是為了在NHK世界台所播出中的節目
            <span class="text-ff8c00">『天才てれびくんhello,』</span>的
            粉絲所設立的，與節目演出者的網站相關的連結集網站，請多加利用本站，
            將本站做為您的
            <span class="text-ff8c00">「天てれ之友」</span>， 本頁面為繁體顯示，其他頁面內容為日文
            </p>
            <p class="text-center">
            <a href="about/">【關於本站】</a>
          </p>
          </div>
          <div class="font-weight-bold tl" lang="tl-PH">
          <p>
            Ang
            <span class="text-ff8c00">「Tensai Terebikun hello, 」</span>ay isang programa na pinapalabas sa NHK Educationa TV
            (E Tele). Ginawa ang site na to para sa mga fans ng warior o ng programa.
            </p>
            <p class="text-center">
            <a href="about/">(To the first person)</a>
          </p>

        </div>
        </div>


        <h3 class="tvslist jp" lang="ja-jp">てれび戦士一覧</h3>
        <h3 class="tvslist en" lang="en-gb">TV warriors's List</h3>
        <h3 class="tvslist tw" lang="zh-tw">TV戰士一覧</h3>
        <h3 class="tvslist tl" lang="tl-ph">Terebi warriors's List</h3>

        <div class="tvs clearfix mb-2">
          <ul class="tvs">

            <?php
                  $lines = file('csv/tvsenshi-top.csv');
                  $count = count($lines);
            for($i=0;$i<$count;$i++){
      
                    $csv = explode(',',$lines[$i]);
                    echo $csv[0].$csv[1].$csv[2].'</a>'.'</li>';
                  }
                  ?>

          </ul>
        </div>
        </div>
        </div>

            <div class="row">

<div class="col-lg-8">

        <h3 class="tvslist jp" lang="ja-jp">イベントカレンダー</h3>
        <h3 class="tvslist en" lang="en-gb">Event calendar</h3>
        <h3 class="tvslist tw" lang="zh-tw">活動日曆</h3>
        <h3 class="tvslist tl" lang="tl-ph">Event calendar</h3>

        <div>
        <iframe src="https://calendar.google.com/calendar/embed?src=tenterelink%40gmail.com&ctz=Asia%2FTokyo" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>

        <div class="w-100">

          <div class="row">

            <div class="col-md-3">

              <div class="search">
                <span class="jp" lang="ja-jp">サイト内検索</span>
                <span class="en" lang="en-gb">Site search</span>
                <span class="tw" lang="zh-tw">網站搜索</span>
                <span class="tl" lang="tl-ph">Site search</span>
              </div>
            </div>

            <div class="col-md-9">
              <div>
                <script>
                  (function () {
                    var cx = '017939248050834519084:sbo_ho8oemi';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                      '//www.google.com/cse/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                  })();
                </script>
                <gcse:search></gcse:search>
              </div>
            </div>
          </div>
          <!-- /.row -->

        </div>



      </div>

      <div class="col-lg-4">

        <h3 class="news jp" lang="ja-JP">天てれ最新情報</h3>
        <h3 class="news en" lang="en-GB">Latest information of TTK</h3>
        <h3 class="news tw" lang="zh-TW">天てれ最新情報</h3>
        <h3 class="news tl" lang="tl-PH">Latest information of TTK</h3>

        <div>
          <a class="twitter-timeline" href="https://twitter.com/tenterelink" data-widget-id="575638932617961472">@tenterelinkさんのツイート</a>
          <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
        </div>

      </div>

    </div>
    <!-- /.row -->

        <div class="row">

<div class="col-lg-12">

<div class="my-2">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- 天てれリンク自動 -->
  <ins class="adsbygoogle ins_ad" style="display:block" data-ad-client="ca-pub-9359745436138089" data-ad-slot="8890141261"
    data-ad-format="auto"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </div>

</div>

</div>
<!-- /.row -->

    <div class="row">

      <div class="col-lg-4 order-lg-2">

        <div class="smenu mt-2">
          <ul class="smenu">
            <li class="smenu">
              <a href="profile/profile2021">
                <span class="jp" lang="ja-jp">てれび戦士プロフィール</span>
                <span class="en" lang="en-gb">TV warriors's Profile</span>
                <span class="tw" lang="zh-tw">TV戰士介紹</span>
                <span class="tl size2" lang="tl-PH">Profile ng mga Terebi Warrior</span>
              </a>
            </li>
            <li class="smenu">
              <a href="tvsenshi">
                <span class="jp" lang="ja-jp">歴代てれび戦士一覧</span>
                <span class="en" lang="en-gb">Successive TV warriors</span>
                <span class="tw" lang="zh-tw">歴代TV戰士班底連結集</span>
                <span class="tl size2" lang="tl-PH">Listahan ng mga Terebi Warrior</span>
              </a>
            </li>
            <li class="smenu">
              <a href="official">
                <span class="jp" lang="ja-jp">公式サイト&amp;ブログ一覧</span>
                <span class="en" lang="en-gb">Official Sites and Blogs</span>
                <span class="tw" lang="zh-tw">官網和部落格連結集</span>
                <span class="tl size2" lang="tl-PH">Opisyal na Websayt &amp; Blog</span>
              </a>
            </li>
            <li class="smenu">
              <a href="synthesis">
                <span class="jp" lang="ja-jp">天てれ関連総合リンク</span>
                <span class="en" lang="en-gb">Links of Whiz-kids TV</span>
                <span class="tw" lang="zh-tw">天てれ關聯総合連結集</span>
                <span class="tl size2" lang="tl-PH">Ibang link na may kaugnayan sa</span>
              </a>
            </li>
            <li class="smenu">
              <a href="ttkdata">
                <span class="jp" lang="ja-jp">天てれ資料室</span>
                <span class="en" lang="en-gb">Material Room</span>
                <span class="tw" lang="zh-tw">天てれ資料室</span>
                <span class="tl size2" lang="tl-PH">Tentere Memoryal Hall</span>
              </a>
            </li>
            <li class="smenu">
              <a href="office">
                <span class="jp" lang="ja-jp">ファンレターの送り先</span>
                <span class="en" lang="en-gb">Destination of the fan letter</span>
                <span class="tw" lang="zh-tw">慕名信</span>
                <span class="tl size2" lang="tl-PH">Sendan ng mensahe ng mga fans.</span>
              </a>
            </li>
            <li class="smenu">
              <a href="goods">
                <span class="jp" lang="ja-jp">天てれ関連商品グッズ</span>
                <span class="en" lang="en-gb">Goods</span>
                <span class="tw" lang="zh-tw">天てれ関連商品グッズ</span>
                <span class="tl size2" lang="tl-PH">Goods</span>
              </a>
            </li>
            <li class="smenu">
              <a href="quiz/choice">
                <span class="jp" lang="ja-jp">天てれクイズ</span>
                <span class="en" lang="en-gb">Whiz-Kids TV　Quiz</span>
                <span class="tw" lang="zh-tw">天てれ小測驗</span>
                <span class="tl size2" lang="tl-PH">Tentere Pagsusulit</span>
              </a>
            </li>
            <li class="smenu">
              <a href="name">
                <span class="jp" lang="ja-jp">てれび戦士名前漢字変換ツール</span>
                <span class="en" lang="en-gb">Name Conversion Tool</span>
                <span class="tw" lang="zh-tw">TV戰士的姓名変換工具</span>
                <span class="tl size2" lang="tl-PH">Gamit na pangalanng mga TV warrior</span>
              </a>
            </li>
            <li class="smenu">
              <a href="http://ameblo.jp/tenterelink/">
                <span class="jp" lang="ja-jp">天てれ視聴日記</span>
                <span class="en" lang="en-gb">Blog of Whiz-kids TV</span>
                <span class="tw" lang="zh-tw">天てれ視聴日誌</span>
                <span class="tl size2" lang="tl-PH">Ang kanilang Heaven Viewing Diary</span>
              </a>
            </li>
            <li class="smenu">
              <a href="http://9314.teacup.com/tenterelink/bbs">
                <span class="jp" lang="ja-jp">天てれリンク掲示板</span>
                <span class="en" lang="en-gb">Whiz-kids TV Links BBS</span>
                <span class="tw" lang="zh-tw">天てれLink留言板</span>
                <span class="tl size2" lang="tl-PH">Tentere Link Boletin Board</span>
              </a>
            </li>
            <li class="smenu">
              <a href="lounge">
                <span class="jp" lang="ja-jp">天てれリンク休憩室</span>
                <span class="en" lang="en-gb">Lounge</span>
                <span class="tw" lang="zh-tw">天てれLink休息室</span>
                <span class="tl size2" lang="tl-PH">Pahina ng mga ng tentere link</span>
              </a>
            </li>
            <li class="smenu">
              <a href="history">
                <span class="jp" lang="ja-jp">天てれリンク更新履歴</span>
                <span class="en" lang="en-gb">Update History</span>
                <span class="tw" lang="zh-tw">天てれLink的歴史</span>
                <span class="tl size2" lang="tl-PH">Kasaysayang ganap ng tentere link</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-8 order-lg-1">

        <div class="button w320 size5 font-weight-bold mx-auto">
          <a href="http://www.nhk.or.jp/tvkun/">
            <span class="jp" lang="ja-jp">天才てれびくんhello,公式サイト</span>
            <span class="en" lang="en-gb">Whiz-kids TV hello, Official Site</span>
            <span class="tw" lang="zh-tw">天才電視兒童官網</span>
            <span class="tl" lang="tl-PH">OFFICIAL SITE OF <br>TENSAI TEREBIKUN hello,</span>
          </a>
          </div>
          <div class="button w320 size5 font-weight-bold mx-auto">
          <a href="https://www.tvkun-stage.com/">
            <span class="jp" lang="ja-jp">天才てれびくん the STAGE</span>
            <span class="en" lang="en-gb">Whiz-kids TV the STAGE</span>
            <span class="tw" lang="zh-tw">天才電視兒童 the STAGE</span>
            <span class="tl" lang="tl-PH">TENSAI TEREBIKUN the STAGE</span>
          </a>
        </div>
        

        <p>&nbsp;</p>
        
<div class="jp" lang="ja-jp">
        <p class="size3">当サイト「天てれリンク」に関するご意見・ご感想・苦情等がございましたら、
          <br>
          <span class="font-weight-bold">
            <a href="mail-form">天てれリンク運営スタッフ</a>
          </span>　まで、ご連絡よろしくお願い致します。
          <br> （直接「NHK
          <strong>天才てれびくんhello,</strong>」への問い合わせなどはしないでください。）
          <br> また、天てれリンクは
          <span class="font-weight-bold">リンクフリー</span>です。
          リンクの申請も、随時受け付けております。
          <br> 天てれリンクの各コンテンツは、内容や編成変更のため、URLが変わることがあります。
          <br> 当サイトのリンクの際、またお気に入りやブックマークの登録の際は、
          <br>
          <span class="font-weight-bold">必ずトップページ</span>
          <span class="sspnone">(https://www.tenterelink.net/)</span>に
          <br> 設定してください。よろしくお願いします。
          <br>
        </p>

        </div>

                <div class="en" lang="en-gb">

<p>
If you have comments, impressions, complaints, etc. on this site "Tentere link"
Please tell us the top link operators staff.

(Please do not make inquiries directly to "Whiz-kids TV hello,.")

Also, this site is link free. Applications for links are also accepted from time to time.
The URL of each content of this site may change due to content and organization change.

When linking this site, when registering favorites and bookmarks,
Be sure to go to the top page (https://www.tenterelink.net/)
Please set it. Thank you.
</p>

</div>

<div class="tw" lang="zh-tw">
        <p class="size3">当サイト「天てれリンク」に関するご意見・ご感想・苦情等がございましたら、
          <br>
          <span class="font-weight-bold">
            <a href="mail-form">天てれリンク運営スタッフ</a>
          </span>　まで、ご連絡よろしくお願い致します。
          <br> （直接「NHK
          天才てれびくんhello,」への問い合わせなどはしないでください。）
          <br> また、天てれリンクは
          <span class="font-weight-bold">リンクフリー</span>です。
          リンクの申請も、随時受け付けております。
          <br> 天てれリンクの各コンテンツは、内容や編成変更のため、URLが変わることがあります。
          <br> 当サイトのリンクの際、またお気に入りやブックマークの登録の際は、
          <br>
          <span class="font-weight-bold">必ずトップページ</span>
          <span class="sspnone">(https://www.tenterelink.net/)</span>に
          <br> 設定してください。よろしくお願いします。
          <br>
        </p>

        </div>

                <div class="tl" lang="tl-ph">

<p>
If you have comments, impressions, complaints, etc. on this site "Tentere link"
Please tell us the top link operators staff.

(Please do not make inquiries directly to "Whiz-kids TV hello,.")

Also, this site is link free. Applications for links are also accepted from time to time.
The URL of each content of this site may change due to content and organization change.

When linking this site, when registering favorites and bookmarks,
Be sure to go to the top page (https://www.tenterelink.net/)
Please set it. Thank you.
</p>

</div>
        <p class="size1">
          <span class="jp" lang="ja-jp">バナーは↓下記のをお使いください。</span>
          <span class="en" lang="en-gb">Please use this for the banner.</span>
          <span class="tw" lang="zh-tw">バナーは↓下記のをお使いください。</span>
          <span class="tl" lang="tl-ph">Please use this for the banner.</span>
          <br>
          <img src="sozai/ttklinkbanner.gif" alt="天てれリンクプラス" width="230" height="60" />
          <br> （以前使用していたバナーでもかまいません。）
        </p>
        </div>
        </div>
        <p>&nbsp;</p>
        <div class="container-fluid">

        <p>
        <span class="jp" lang="ja-jp">無断で文章や画像を転載することは固く禁止いたします。</span>
          <span class="en" lang="en-gb">You must not do reprints of sentences and images without permission.</span>
          <span class="tw" lang="zh-tw">無断で文章や画像を転載することは固く禁止いたします。</span>
          <span class="tl" lang="tl-ph">You must not do reprints of sentences and images without permission.</span>
          </p>

        <p>
          <a href="privacy-policy">
            <span class="jp" lang="ja-jp">プライバシーポリシー</span>
            <span class="en" lang="en-gb">Privacy Policy</span>
            <span class="tw" lang="zh-tw">個人信息保護政策</span>
            <span class="tl" lang="tl-ph">Privacy Policy</span>
          </a>
        </p>
          </div>
      


          </div>
</div>

          
    <!-- /.row -->

    <div class="row">

      <div class="col-lg-12">

      <div class="my-2">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 天てれリンク自動 -->
        <ins class="adsbygoogle ins_ad" style="display:block" data-ad-client="ca-pub-9359745436138089" data-ad-slot="8890141261"
          data-ad-format="auto"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>

      </div>

    </div>
    <!-- /.row -->

    <p>
      <span class="jp" lang="ja-jp">天てれリンク管理人：ジャビット</span>
      <span class="en" lang="en-gb">Webmaster：Giabbit</span>
      <span class="tw" lang="zh-tw">天てれLink管理人：ジャビット</span>
      <span class="tl" lang="tl-ph">Webmaster：Giabbit</span>
    </p>

    <p>
      <a href="staff">
        <span class="jp" lang="ja-jp">運営スタッフ一覧</span>
        <span class="en" lang="en-gb">Staff List</span>
        <span class="tw" lang="zh-tw">管理人員名單</span>
        <span class="tl" lang="tl-ph">Staff List</span>
      </a>
    </p>

  </div>
  <!-- /.container -->

  <footer class="py-5 bg-orange">
    <div class="container">
      <p class="m-0 text-center text-dark">since 6.26.2001 by ichiro (since 3.25.2005 by Giabbit)
        <br> Copyright &copy; 2005 天てれリンク. All Rights Reserved. </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/js.cookie.js"></script>
  <script src="js/lang.js"></script>
  <script src="js/svwkr.js"></script>

<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('serviceWorker.js').then(function(registration) {
    // 登録成功
    console.log('ServiceWorker の登録に成功しました。スコープ: ', registration.scope);
  }).catch(function(err) {
    // 登録失敗
    console.log('ServiceWorker の登録に失敗しました。', err);
  });
}
</script>


</body>

</html>
