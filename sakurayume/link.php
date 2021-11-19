<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>サクラユメ - Dream5 ドリーム５ ファンサイト </title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/sakurayume.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
  </head>
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
<div class="container mt-5">
<div class="row">
<div class="col-lg-12 official mx-auto">
      <h2>公式リンク</h2>
        <div class="row mx-auto">

          <?php
          $lines = file('csv/official.csv');
          $count = count($lines);
          for($i=0;$i<$count;$i++){
            $csv = explode(',',$lines[$i]);
            echo '<div class="col-sm-12 col-md-6 col-lg-4">';
            echo '<div class="card card-official my-2">';
            echo '<div class="card-body px-2 py-3">';
            echo '<p class="card-text official">';
            echo $csv[0];
            echo '</p>';
            echo '</div>'.'</div>'.'</div>';
          }
          ?>

        </div>
        <!-- /.row -->

      </div>

    </div>
      <div class="col-lg-12 official mx-auto mb-5">
      <h2>ファンサイト 相互リンク</h2>
        <div class="row mx-auto">

          <?php
          $lines = file('csv/fansite.csv');
          $count = count($lines);
          for($i=0;$i<$count;$i++){
            $csv = explode(',',$lines[$i]);
            echo '<div class="col-sm-12 col-md-6 col-lg-4">';
            echo '<div class="card card-official my-2">';
            echo '<div class="card-body px-2 py-3">';
            echo '<p class="card-text official">';
            echo $csv[0];
            echo '</p>';
            echo '</div>'.'</div>'.'</div>';
          }
          ?>

        </div>
        <!-- /.row -->

      </div>
    </div>
</div>
</div>
</div>
  
              
<footer class="footer mt-auto py-3 text-center bg-dark">
<ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">サクラユメ　トップ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="profile.php">プロフィール</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="discography.php">ディスコグラフィー</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="event.php">イベントレポート</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="link.php">リンク</a>
            </li>
          </ul>
  <div class="container">
    <span class="text-muted">
      Copyright (C) 2011 Giabbit. All Rights Reserved.</span>
  </div>
</footer>
</body>
</html>