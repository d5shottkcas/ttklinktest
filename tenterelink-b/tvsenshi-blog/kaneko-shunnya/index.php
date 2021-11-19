<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>大天才テレビジョンブログ 金子隼也 - 天てれリンクB号館</title>

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
    <h1 class="mt-4 h2">金子隼也 ブログ記事一覧</h1>
    <hr>


      <table class="table-bordered w-100 text-center my-4">
      <tr>
      <th>日付</th>
      <th>ブログ記事</th>
      </tr>
      <?php
            $lines = file('../../tvsenshi-blog/kaneko-shunnya/csv/kaneko-shunnya-blog.csv');
            $count = count($lines);
            for($i=0;$i<$count;$i++){
              $csv = explode(',',$lines[$i]);
              echo "<tr>";
              echo '<td>'.'<a href="'.$csv[0].'">'.$csv[1].'</a>'.'</td>';
              echo '<td class="text-left px-2">'.$csv[2].'</td>';
              echo "</tr>";
            }
            ?>


      </table>


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
