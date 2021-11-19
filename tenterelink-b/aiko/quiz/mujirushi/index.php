﻿<?php
 
$_SESSION = 1;

$choices = array(); //この変数は配列ですよという宣言

$directory = '../mujirushi-list/';
$files = glob($directory.'*.php');
$filecount = count($files);

$min = 1;
$max = $filecount; //最大問題数

$randm = range($min, $max);
shuffle($randm); //ランダム設定
$rand[1] = $randm[0];
$rand[2] = $randm[1];
$rand[3] = $randm[2];
$rand[4] = $randm[3];
$rand[5] = $randm[4];
$rand[6] = $randm[5];
$rand[7] = $randm[6];
$rand[8] = $randm[7];
$rand[9] = $randm[8];
$rand[10] = $randm[9];

$quiz = 1;
$qfile = '../mujirushi-list/quiz'.$rand[$quiz].'.php';

include($qfile);
 
$answer = $choices[0]; //正解の問題を設定
 
shuffle($choices); //配列の中身をシャッフル

$finish = 0;

?>

<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta name="keywords" content="天才てれびくんhello,天才てれびくんYOU,Let's天才てれびくん,大!天才てれびくん,天才てれびくんMAX,天てれ,てれび戦士,Dream5,">

  <title>天てれクイズ 無印編 - 天てれリンクプラス</title>

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
          <h1 class="pagetitle jp" lang="ja-jp">天てれクイズ 無印編</h1>
          <h1 class="pagetitle en" lang="en-gb">Whiz-Kids TV　Quiz </h1>
          <h1 class="pagetitle tw" lang="zh-tw">天てれ小測驗 無印編</h1>
          <h1 class="pagetitle tl" lang="tl-ph">Tentere Pagsusulit </h1>
        </header>

      </div>


    </div>
    <!-- /.row -->

    <div class="row">

      <div class="col-lg-12">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 天てれリンク自動 -->
        <ins class="adsbygoogle ins_ad" style="display:block" data-ad-client="ca-pub-9359745436138089" data-ad-slot="8890141261"
          data-ad-format="auto"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

      </div>

    </div>
    <!-- /.row -->

    <div class="row">

      <div class="col-lg-12">

        <p>&nbsp;</p>
        <div class="tv-screen">

          <p>&nbsp;</p>
          <h2 class="quiz-h2"><?php echo $_SESSION; ?>問目</h2>

          <p>&nbsp;</p>

          <p><?php echo $question ?></p>

          <p>&nbsp;</p>

        </div>

        <div class="controller">

          <form method="POST" action="./mujirushi-a.php">
          <div class="row">
          <div class="col-lg-3 col-md-6"><div class="cnt-blue"><input type="submit" name="choices" value="<?php echo $choices[0]; ?>" /></div></div>
          <div class="col-lg-3 col-md-6"><div class="cnt-red"><input type="submit" name="choices" value="<?php echo $choices[1]; ?>" /></div></div>
          <div class="col-lg-3 col-md-6"><div class="cnt-green"><input type="submit" name="choices" value="<?php echo $choices[2]; ?>" /></div></div>
          <div class="col-lg-3 col-md-6"><div class="cnt-yellow"><input type="submit" name="choices" value="<?php echo $choices[3]; ?>" /></div></div>
   </div>

<input type="hidden" name="answer" value="<?php echo $answer; ?>">
<input type="hidden" name="session" value="<?php echo $_SESSION; ?>">
<input type="hidden" name="quiz" value="<?php echo $quiz; ?>">
<input type="hidden" name="rand1" value="<?php echo $rand[1]; ?>">
<input type="hidden" name="rand2" value="<?php echo $rand[2]; ?>">
<input type="hidden" name="rand3" value="<?php echo $rand[3]; ?>">
<input type="hidden" name="rand4" value="<?php echo $rand[4]; ?>">
<input type="hidden" name="rand5" value="<?php echo $rand[5]; ?>">
<input type="hidden" name="rand6" value="<?php echo $rand[6]; ?>">
<input type="hidden" name="rand7" value="<?php echo $rand[7]; ?>">
<input type="hidden" name="rand8" value="<?php echo $rand[8]; ?>">
<input type="hidden" name="rand9" value="<?php echo $rand[9]; ?>">
<input type="hidden" name="rand10" value="<?php echo $rand[10]; ?>">
<input type="hidden" name="finish" value="<?php echo $finish; ?>">
</form>
        
        </div>

        <p>&nbsp;</p>

      </div>


    </div>
    <!-- /.row -->

    <div class="row">

      <div class="col-lg-12">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 天てれリンク自動 -->
        <ins class="adsbygoogle ins_ad" style="display:block" data-ad-client="ca-pub-9359745436138089" data-ad-slot="8890141261"
          data-ad-format="auto"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

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