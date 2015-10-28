<?php
try{
 $code = $_POST['code'];
//1.データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM `anketo` WHERE code = '.$code;

$stmt = $dbh->prepare($sql);
$stmt->execute();

//$dbh = null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/> 
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">

  <script src="/js/bpptstrap.min.js"></script>
  <title>PHP基盤</title>
  </head>
  <body>
    <?php
      $rec = $stmt->fetch(PDO::FETCH_ASSOC);
      echo $rec['code'];
      echo $rec['nickname'];
      echo $rec['email'];
      echo $rec['goiken'];

      $dbh = null;
    
    ?>
  </body>
  </html>

  <?php
}
catch(exception $e)
{
echo 'ただいま障害が発生しております。ご不便をお掛けし申し訳ありません';

}
?>
