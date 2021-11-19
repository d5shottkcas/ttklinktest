<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ディスコグラフィ- Dream5 ドリーム５ ファンサイト</title>
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
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="profile.php">プロフィール <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="discography.php">ディスコグラフィー</a>
      <a class="nav-item nav-link active" href="event.php">イベントレポート</a>
      <a class="nav-item nav-link active" href="link.php">外部リンク</a>
    </div>
  </div>
</nav>
</nav>
</nav> 
</div>
</div>
</div>
<h1>ディスコグラフィー</h1>

<div class="container">
<div class="row">

<div class="col-lg-11 order-lg-2">

  <table class="table table-bordered-mtk mx-auto mt-3 mb-5 w-100 mtktable" summary="シングル">

                      <tr>
      <th colspan="3" class="th-y">シングル</th>
    </tr>
    <tr>
      <th class="th-i w5p">発売日</th>
      <th class="th-i w40p">シングル名</th>
      <th class="th-i w65p">収録曲</th>
    </tr>

    <?php
          $lines = file('csv/disco1.csv');
          $count = count($lines);
      for($i=0;$i<$count;$i++){

            $csv = explode(',',$lines[$i]);
            echo '<tr>';
            echo '<td>'.$csv[0].'</td>';
            echo '<td>'.$csv[1].'</td>';
            echo '<td class="text-left px-1">'.$csv[2].'</td>';
            echo '</tr>';
          }
          ?>

</tr>
  <table class="table table-bordered-mtk mx-auto w-100 mtktable2" summary="アルバム">
  <div class="col-lg-11 order-lg-2">
      <th colspan="3" class="th-y">アルバム</th>
    </tr>
    <tr>
      <th class="th-i w5p">発売日</th>
      <th class="th-i w40p">アルバム名</th>
      <th class="th-i w65p">収録曲</th>
    </tr>

    <?php
          $lines = file('csv/disco2.csv');
          $count = count($lines);
      for($i=0;$i<$count;$i++){

            $csv = explode(',',$lines[$i]);
            echo '<tr>';
            echo '<td>'.$csv[0].'</td>';
            echo '<td>'.$csv[1].'</td>';
            echo '<td class="text-left px-1">'.$csv[2].'</td>';
            echo '</tr>';
          }
          ?>

<tr>
        </table>
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
    <div class="container text-center">
    <span class="text-muted">Copyright (C) 2011 Giabbit. All Rights Reserved.</span>
      </div>
    </footer>
</body>
</html>