﻿<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta name="keywords" content="天才てれびくんhello,天才てれびくんYOU,Let's天才てれびくん,大!天才てれびくん,天才てれびくんMAX,天てれ,てれび戦士,Dream5,">

  <title>Let's天才てれびくん 用語集 - 天てれリンクプラス</title>

  <meta name="title" content="天てれリンクプラス - 天才てれびくんhello,関連リンク集">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="天てれリンクプラス - 天才てれびくんhello,関連リンク集" />
  <meta property="og:description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta property="og:url" content="https://www.tenterelink.net/" />
  <meta property="og:site_name" content="天てれリンクプラス" />
  <meta property="og:image" content="https://www.tenterelink.net/sozai/tenterelink-logo.png" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@tenterelink" />

  <link href="../../css/bootstrap.css" rel="stylesheet">
  <link href="../../css/tenterelink.css" rel="stylesheet">
  <link href="../../css/lang-jp.css" rel="stylesheet" id="switchCSS">

  <link rel="shortcut icon" href="https://www.tenterelink.net/sozai/favicon.ico" />
  <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body onload="scrollTest()">

  <nav class="navbar navbar-expand-lg navbar-navi fixed-top">
    <div class="container">
      <a class="btn btn-title" href="../../">天てれリンク</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            $lines = file('../../csv/menu03.csv');
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

      <div class="col-lg-12">

        <header>
          <h1 class="pagetitle jp" lang="ja-jp">Let's天才てれびくん 用語集</h1>
          <h1 class="pagetitle en" lang="en-gb">Let's天才てれびくん Glossary</h1>
          <h1 class="pagetitle tw" lang="zh-tw">Let's天才てれびくん 用語集</h1>
          <h1 class="pagetitle tl" lang="tl-ph">Let's天才てれびくん Glossary</h1>
        </header>

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

      <div class="col-lg-9 order-lg-2">

        <h3 class="h2-border text-left">Let's天才てれびくん 用語集</h3>

        <p class="text-left small">※表は左右にスクロールできます。</p>

        <table class="table table-bordered-event table-responsive text-nowrap mx-auto w-100 eventtable wh-bd-none small" summary="天てれ公開収録・イベント一覧">

          <th colspan="5" class="th-white text-left">「あ」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-01.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

          <th colspan="5" class="th-white text-left">「か」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-02.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

          <th colspan="5" class="th-white text-left">「さ」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-03.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

          <th colspan="5" class="th-white text-left">「た」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-04.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

          <th colspan="5" class="th-white text-left">「は」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-05.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

          <th colspan="5" class="th-white text-left">「や」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-06.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

          <th colspan="5" class="th-white text-left">「ら」行</th>
          </tr>

          <?php
                $lines = file('csv/letsten-07.csv');
                $count = count($lines);
            for($i=0;$i<$count;$i++){
    
                  $csv = explode(',',$lines[$i]);
                  echo '<tr>';
                  echo '<td class="px-2">'.$csv[0].'</td>';
                  echo '<td class="text-left px-1">'.$csv[1].'</td>';
                  echo '</tr>';
                }
                ?>

        </table>

      </div>

      <div class="col-lg-3 order-lg-1">

<h3 class="h2-border">Let's天才てれびくん</h3>

<div class="smenu">
  <ul class="smenu">

    <?php
    $lines = file('../csv/lets-data-1.csv');
    $count = count($lines);
    for($i=0;$i<$count;$i++){

    $csv = explode(',',$lines[$i]);
    echo '<li class="smenu">';
    echo '<a href="'.$csv[0].'">';
    echo $csv[1];
    echo '</a>';
    echo '</li>';
    }
    ?>

  </ul>
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
  <script src="../../js/jquery.js"></script>
  <script src="../../js/bootstrap.js"></script>
  <script src="../../js/js.cookie.js"></script>
  <script src="../../js/lang-hierarchy02.js"></script>

</body>

</html>