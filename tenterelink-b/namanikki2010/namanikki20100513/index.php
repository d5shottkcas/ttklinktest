<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>ウキウキ木曜！ナマ日記2010 5月13日 - 天てれリンクB号館</title>

  <!-- Bootstrap CSS -->
  <link href="../../css/bootstrap.css" rel="stylesheet">
  <!-- スタイルシート -->
  <link href="../../css/t-blog.css" rel="stylesheet">

</head>

<body>

  <!-- メニューバー -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../../">天てれリンクB号館</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <?php
            $lines = file('../../csv/menu.csv');
            $count = count($lines);
            for($i=0;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<li class="nav-item">'.'<a class="nav-link" href="'.$csv[0].'">'.$csv[1].'</a>'.'</li>';
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- コンテンツ -->
  <div class="container">

    <!-- 投稿日 -->
    <h1 class="mt-4 h2">ウキウキ木曜！ナマ日記2010 5月13日</h1>
    <hr>

    <div class="row">

      <!-- カラム左 -->
      <div class="col-lg-8">

        <!-- 投稿記事 -->
        <div class="card my-4">

          <!-- 日付 -->
          <h5 class="card-header text-center">
■２０１０年　５月１３日（木）
          </h5>

          <!-- 投稿１ -->

          <!-- 投稿者 -->
          <h5 class="card-header">
            <?php
            $lines = file('csv/namanikki20100513-01.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo $csv[0];
            ?>
          </h5>
          <div class="card-body">
            <!-- 投稿内容 -->
            <?php
            $lines = file('csv/namanikki20100513-01.csv');
            $count = count($lines);
            for($i=1;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<p>'.$csv[0].'</p>';
            }
            ?>
          </div>

          <!-- 投稿２ -->

          <!-- 投稿者 -->
          <h5 class="card-header">
            <?php
            $lines = file('csv/namanikki20100513-02.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo $csv[0];
            ?>
          </h5>
          <div class="card-body">
            <!-- 投稿内容 -->
            <?php
            $lines = file('csv/namanikki20100513-02.csv');
            $count = count($lines);
            for($i=1;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<p>'.$csv[0].'</p>';
            }
            ?>
          </div>

           <!-- 投稿３ -->

          <!-- 投稿者 -->
          <h5 class="card-header">
            <?php
            $lines = file('csv/namanikki20100513-03.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo $csv[0];
            ?>
          </h5>
          <div class="card-body">
            <!-- 投稿内容 -->
            <?php
            $lines = file('csv/namanikki20100513-03.csv');
            $count = count($lines);
            for($i=1;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<p>'.$csv[0].'</p>';
            }
            ?>
          </div>



        </div>
        <!-- /.投稿記事 -->

      </div>
      <!-- /.カラム左 -->

      <!-- カラム右 -->
      <div class="col-lg-4">

        <!-- バックナンバー -->
        <div class="card my-4">
          <h5 class="card-header">バックナンバー</h5>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <?php
            $lines = file('../../csv/backnumber-max.csv');
            $count = count($lines);
            for($i=0;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<li>'.'<a href="'.$csv[0].'">'.$csv[1].'</a>'.'</li>';
            }
            ?>
            </ul>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- フッター -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <a href="https://www.tenterelink.net/">天てれリンク</a></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap JavaScript -->
  <script src="../../js/jquery.js"></script>
  <script src="../../js/bootstrap.js"></script>

</body>

</html>