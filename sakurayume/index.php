<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>サクラユメ - Dream5 ドリーム５ ファンサイト </title>
    <!-- BootstrapのCSS読み込み -->
    <link rel="manifest" href="manifest.json">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sakurayume.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" href="images/tenterelink144.png">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
  <body>
<div class="container-fluid">
<div class="row">
<div class="col-12">
  <nav class='fixed-top'>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="images/mainlogo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="profile.php">プロフィール <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="discography.php">ディスコグラフィー</a>
      <a class="nav-item nav-link active" href="event.php">イベントレポート</a>
      <a class="nav-item nav-link active" href="link.php">外部リンク</a>
    </div>
  </div>
</nav>
</nav>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="container">
      <img src="images/top.jpg" alt="#" class="w-100 h-auto">
  </div>
</div>
  <div class="row mx-auto table-responsive">
  <div class="container">
    <h1>Dream5とは</h1>
</div>
</div>
<div class="container">
<div class="border  rounded w-100 h-auto text-center" style="padding:10px;" border-width="thick;"><p class="text-break">
2009年、NHK教育の人気番組<strong>「天才てれびくんMAX」</strong>が前代未聞のMTK全国オーディションを開催。<br>
てれび戦士の重本ことりとユニット組むことが、番組内で発表された。
オーディションでは、小4から中２までのダンスや歌が得意な男女を募集し、<br>
多数応募があった中から4名を選び、ヴォーカルの<strong>重本ことり</strong>、<strong>日比美思</strong>、ダンサーの<strong>玉川桃奈</strong>、<strong>高野洸</strong>、<strong>大原優乃</strong>の5人で結成された。<br>
ユニット名も番組内での公募により、<strong>「Dream5 (ドリーム5)」</strong>（通称：ドリ5）と命名。<br>
多大なる反響により2009年11月に<strong>「I don't obey ～僕らのプライド～」</strong>でCDデビュー!!!
その後もアーティスト活動に留まらず、ドラマ・バラエティなど活躍の場を広げている。
幅広いファン層の中でも特に親子、小中学生から絶大なる人気を誇る　ダンス＆ボーカルユニット!</p>
<p class="lead font-weight-bold"><h6>それが、<strong>Dream5</strong>だ！ </p></h6>
</div> <!--全辺ボーダー -->
</div>
<div class="container">
<h2>最新情報</h2>

<div class="row mx-auto table-responsive">
<div class="text-left">
    <table class="table table-bordered">
    <div class="col-lg-9">

      <?php
      $lines = file('csv/news.csv');
      $count = count($lines);
      for($i=0;$i<$count;$i++){

      $csv = explode(',',$lines[$i]);
      echo '<tr>'.'<td class="text-left w-auto table-borderless">';
      echo $csv[0];
      echo '</td>'.'</tr>';
      }
      ?>
    </table>
  </div>
</div>
    </div>
    <div class="container mx-auto">
           <section class="page-section" id="contact">
                <div class="container">
                    <!-- Contact Section Heading-->
                    <div class="text-center">
                        <h3>Dream5 動画リンク</h3>
                    </div>
            <div class="ttkdata">
                        <ul class="ttkdata clearfix">
                            <?php
                        $lines = file('csv/menu.csv');
                        $count = count($lines);
                        for($i=0;$i<$count;$i++){
                        
                        $csv = explode(',',$lines[$i]);
                        echo '<li class="ttkdata">';
                        echo $csv[0];
                        echo $csv[1];
                        echo '</a>';
                        echo '</li>';
                        }
                        ?>
                                </a>
                                </li>

                        </ul>
                    </div>
                      </div>
                    <div class="text-center">
                        <h3>Dream5 公式リンク(外部サイト)</h3>
                    </div>
            <div class="ttkdata">
                        <ul class="ttkdata clearfix">
                            <?php
                        $lines = file('csv/menu2.csv');
                        $count = count($lines);
                        for($i=0;$i<$count;$i++){
                        
                        $csv = explode(',',$lines[$i]);
                        echo '<li class="ttkdata">';
                        echo $csv[0];
                        echo $csv[1];
                        echo '</a>';
                        echo '</li>';
                        }
                        ?>
                                </a>
                                </li>

                        </ul>
    </div>
</div>
<div class="container">
<div style="text-align:center;">
<div id="twitter-widget">
<a class="twitter-timeline " data-lang="ja" data-width="800" data-height="800" data-theme="dark" href="https://twitter.com/209harrison/lists/dream5?ref_src=twsrc%5Etfw">Dream5</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
</div>
</div>
</div>
                      </div>
                      </div>

  <div class="row container-fluid text-center p-5 table-responsive">
<p class="small">「サクラユメ」は、私設ファンサイトであり、Dream5および、所属事務所avexとは<br>
一切の関わりはございませんので、問い合わせなどはしないでください。<br>
「サクラユメ」に掲載している画像を無断で使用することは固く禁止いたします。<br>
この「サクラユメ」に関する感想・ご意見・苦情等がございましたら、
<b><a href="https://www.tenterelink.net/mail-form/">キノ</a></b>　まで、ご連絡よろしくお願い致します。<br>
また、この「サクラユメ」は<b>リンクフリー</b>です。連絡の必要はありません。</p>

<p class="small">管理人：キノ<br>
副管理人：ジャビット、みりん</p>
<p class="small">illustration by ゆうひまり</p>
                      </div>
                      </div>
                      </div>
<footer class="footer mt-auto py-3 text-center bg-dark">
  <div class="container">
    <span class="text-muted">
    since 2011.1.15<br>
      Copyright (C) Giabbit. All Rights Reserved.</span>
  </div>
</footer>
<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('sw.js').then(function(registration) {
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