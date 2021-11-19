<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta name="keywords" content="天才てれびくんhello,天才てれびくんYOU,Let's天才てれびくん,大!天才てれびくん,天才てれびくんMAX,天てれ,てれび戦士,Dream5,">

  <title>天てれアニメ - 天てれリンクプラス</title>

  <meta name="title" content="天てれリンクプラス - 天才てれびくんhello,関連リンク集">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="天てれリンクプラス - 天才てれびくんhello,関連リンク集" />
  <meta property="og:description" content="天才てれびくん関連サイトリンク集。てれび戦士や天てれの公式サイトやブログ、ファンサイトや応援ブログなどを収集。てれび戦士のプロフィールやMTK一覧、天てれの情報、掲示板などのコンテンツも豊富。">
  <meta property="og:url" content="https://www.tenterelink.net/" />
  <meta property="og:site_name" content="天てれリンクプラス" />
  <meta property="og:image" content="https://www.tenterelink.net/sozai/tenterelink-logo.png" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@tenterelink" />

  <link href="../../../css/bootstrap.css" rel="stylesheet">
  <link href="../../../css/tenterelink.css" rel="stylesheet">
  <link href="../../../css/lang-jp.css" rel="stylesheet" id="switchCSS">

  <link rel="shortcut icon" href="https://www.tenterelink.net/sozai/favicon.ico" />
  <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</head>

<body onload="scrollTest()">

  <nav class="navbar navbar-expand-lg navbar-navi fixed-top">
    <div class="container">
      <a class="btn btn-title" href="../../../">天てれリンク</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            $lines = file('../../../csv/menu04.csv');
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
          <h1 class="pagetitle jp" lang="ja-jp">天てれアニメ</h1>
          <h1 class="pagetitle en" lang="en-gb">Whiz-kids TV cartoon</h1>
          <h1 class="pagetitle tw" lang="zh-tw">天てれ動漫</h1>
          <h1 class="pagetitle tl" lang="tl-ph">Tentere Anime</h1>
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

    <h2 class="explan jp" lang="ja-jp">天才てれびくんで放送されたアニメ一覧。</h2>
    <h2 class="explan en" lang="en-gb">Anime(cartoon) list broadcasted on Whiz-kids TV.</h2>
    <h2 class="explan tw" lang="zh-tw">天才てれびくんで放送されたアニメ一覧。</h2>
    <h2 class="explan tl" lang="tl-ph">Anime list broadcasted on Tensai Terebikun</h2>

    <div class="row">

      <div class="col-lg-8 order-lg-2">

        <div class="text-left">


        <h3 class="h2-border">天才てれびくんhello&#44;</h3>

<div class="ttk-anime">
  <ul class="ttk-anime clearfix">
    <?php
          $lines = file('../csv/ttk-anime-hello.csv');
          $count = count($lines);
  for($i=0;$i<$count;$i++){

            $csv = explode(',',$lines[$i]);
            echo '<li class="ttk-anime">';
            echo '<a href="'.$csv[0].'">';
            echo $csv[1];
            echo '</a>';
            echo '</li>';
          }
          ?>
    </a>
    </li>

  </ul>
</div>

          <h3 class="h2-border">天才てれびくんYOU</h3>

          <div class="ttk-anime">
            <ul class="ttk-anime clearfix">
              <?php
                    $lines = file('../csv/ttk-anime-you.csv');
                    $count = count($lines);
            for($i=0;$i<$count;$i++){
        
                      $csv = explode(',',$lines[$i]);
                      echo '<li class="ttk-anime">';
                      echo '<a href="'.$csv[0].'">';
                      echo $csv[1];
                      echo '</a>';
                      echo '</li>';
                    }
                    ?>
              </a>
              </li>

            </ul>
          </div>

          <h3 class="h2-border">Let's天才てれびくん</h3>

          <div class="ttk-anime">
            <ul class="ttk-anime clearfix">
              <?php
                    $lines = file('../csv/ttk-anime-lets.csv');
                    $count = count($lines);
            for($i=0;$i<$count;$i++){
        
                      $csv = explode(',',$lines[$i]);
                      echo '<li class="ttk-anime">';
                      echo '<a href="'.$csv[0].'">';
                      echo $csv[1];
                      echo '</a>';
                      echo '</li>';
                    }
                    ?>
              </a>
              </li>

            </ul>
          </div>

          <h3 class="h2-border">大!天才てれびくん</h3>

          <div class="ttk-anime">
            <ul class="ttk-anime clearfix">
              <?php
                    $lines = file('../csv/ttk-anime-dai.csv');
                    $count = count($lines);
            for($i=0;$i<$count;$i++){
        
                      $csv = explode(',',$lines[$i]);
                      echo '<li class="ttk-anime">';
                      echo '<a href="'.$csv[0].'">';
                      echo $csv[1];
                      echo '</a>';
                      echo '</li>';
                    }
                    ?>
              </a>
              </li>

            </ul>
          </div>

          <h3 class="h2-border">天才てれびくんワイド</h3>

          <div class="ttk-anime">
            <ul class="ttk-anime clearfix">
              <?php
                    $lines = file('../csv/ttk-anime-wide.csv');
                    $count = count($lines);
            for($i=0;$i<$count;$i++){
        
                      $csv = explode(',',$lines[$i]);
                      echo '<li class="ttk-anime">';
                      echo '<a href="'.$csv[0].'">';
                      echo $csv[1];
                      echo '</a>';
                      echo '</li>';
                    }
                    ?>
              </a>
              </li>

            </ul>
          </div>

          <h3 class="h2-border">天才てれびくん</h3>

          <div class="ttk-anime">
            <ul class="ttk-anime clearfix">
              <?php
                    $lines = file('../csv/ttk-anime-ttk.csv');
                    $count = count($lines);
            for($i=0;$i<$count;$i++){
        
                      $csv = explode(',',$lines[$i]);
                      echo '<li class="ttk-anime">';
                      echo '<a href="'.$csv[0].'">';
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

      </div>

      <div class="col-lg-4 order-lg-1">

        <h3 class="h2-border">天てれアニメ一覧</h3>

        <div class="smenu">
          <ul class="smenu">

            <?php
          $lines = file('../csv/ttk-anime-list.csv');
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
            </a>
            </li>

          </ul>
        </div>

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
  <script src="../../../js/jquery.js"></script>
  <script src="../../../js/bootstrap.js"></script>
  <script src="../../../js/js.cookie.js"></script>
  <script src="../../../js/lang-hierarchy03.js"></script>

</body>

</html>