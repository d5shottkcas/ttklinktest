<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>大天才テレビジョンブログ 2012 8月21日 - 天てれリンクB号館</title>

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
    <h1 class="mt-4 h2">大天才テレビジョンブログ 2012 8月21日</h1>
    <hr>

    <div class="row">

      <!-- カラム左 -->
      <div class="col-lg-8">

        <!-- 投稿記事１ -->
        <div class="card my-4">

          <!-- 日付 -->
          <h5 class="card-header">
            <?php
            $lines = file('csv/blog20120821-01.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo $csv[0];
            ?>

            <br>
            <!-- 題名 -->
            <?php
            $lines = file('csv/blog20120821-01.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo $csv[1];
            ?>
          </h5>

          <div class="card-body">
            <!-- 投稿内容 -->
            <?php
            $lines = file('csv/blog20120821-01.csv');
            $count = count($lines);
            for($i=1;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<p>'.$csv[0].'</p>';
            }
            ?>
          </div>
          <hr>
          <!-- 投稿者、投稿時刻 -->
          <p class="text-right">
            <?php
            $lines = file('csv/blog20120821-01.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo $csv[2];
            ?>
          </p>
        </div>
        <!-- /.投稿記事１ -->   

        

      </div>
      <!-- /.カラム左 -->

      <!-- カラム右 -->
      <div class="col-lg-4">

        <!-- カレンダー -->
        <div class="card my-4">
          <h5 class="card-header">カレンダー</h5>
          <div class="card-body">
            <table class="table-bordered w-100 text-center">
              <?php
            $lines = file('../calendar2012/calendar201208.csv');
            $count = count($lines);
            $i=0;
              $csv = explode(',',$lines[$i]);
              echo "<tr>";
              echo '<td colspan="2">'.'<a href="'.$csv[0].'">'.'<<'.'</a>'.'</td>';
              echo '<td colspan="3">'.$csv[1].'</td>';
              echo '<td colspan="2">'.'<a href="'.$csv[2].'">'.'>>'.'</a>'.'</td>';
              echo "</tr>";
            ?>
              <?php
            $lines = file('../calendar2012/calendar201208.csv');
            $count = count($lines);
            $i=1;
              $csv = explode(',',$lines[$i]);
              echo "<tr>";
              echo '<td>'.$csv[0].'</td>';
              echo '<td>'.$csv[1].'</td>';
              echo '<td>'.$csv[2].'</td>';
              echo '<td>'.$csv[3].'</td>';
              echo '<td>'.$csv[4].'</td>';
              echo '<td>'.$csv[5].'</td>';
              echo '<td>'.$csv[6].'</td>';
              echo "</tr>";
            ?>
              <?php
            $lines = file('../calendar2012/calendar201208.csv');
            $count = count($lines);
            for($i=2;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo "<tr>";
              echo '<td>'.'<a href="'.$csv[0].'">'.$csv[1].'</a>'.'</td>';
              echo '<td>'.'<a href="'.$csv[2].'">'.$csv[3].'</a>'.'</td>';
              echo '<td>'.'<a href="'.$csv[4].'">'.$csv[5].'</a>'.'</td>';
              echo '<td>'.'<a href="'.$csv[6].'">'.$csv[7].'</a>'.'</td>';
              echo '<td>'.'<a href="'.$csv[8].'">'.$csv[9].'</a>'.'</td>';
              echo '<td>'.'<a href="'.$csv[10].'">'.$csv[11].'</a>'.'</td>';
              echo '<td>'.'<a href="'.$csv[12].'">'.$csv[13].'</a>'.'</td>';
              echo "</tr>";
            }
            ?>
            </table>
          </div>
        </div>


        <!-- バックナンバー -->
        <div class="card my-4">
          <h5 class="card-header">バックナンバー</h5>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <?php
            $lines = file('../../csv/backnumber-dai.csv');
            $count = count($lines);
            for($i=0;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo '<li>'.'<a href="'.$csv[0].'">'.$csv[1].'</a>'.'</li>';
            }
            ?>
            </ul>
          </div>
        </div>

        <!-- てれび戦士一覧 -->
        <div class="card my-4">
          <h5 class="card-header">てれび戦士一覧</h5>
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <?php
            $lines = file('../../csv/tvsenshi.csv');
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