<?php
try{

//1.データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

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
    <div align="center">
  	<?php




        $nickname=$_POST['nickname'];
        $email=$_POST['email'];
        $goiken=$_POST['goiken'];

        
        $nickname=htmlspecialchars($nickname);
        $email=htmlspecialchars($email);
        $goiken=htmlspecialchars($goiken);
        
          echo '<span style="color:#000080; font-size: 70px;">';
          echo $nickname;
          echo '様<br />';
          echo '</span><br />';
          echo '<span style="color:#000080; font-size: 20px;">';
          echo'ご意見ありがとうございました。<br />';
          echo'頂いたご意見『';
          echo $goiken;
          echo'』<br />';
          echo $email;
          echo'にメールを送りましたのでご確認ください。';
          echo '</span>';

          

          //2.SQLで指令をだす
        $sql = 'INSERT INTO anketo (nickname,email,goiken)VALUES("';
        $sql .= $nickname.'","'.$email.'","'.$goiken.'")';

        //echo $sql;
        $stmt = $dbh->prepare($sql);

        $stmt->execute();

        //3.データベースから切断する
        $dbh=null;
    }
    catch(exception $e)
    {

      echo 'ただいま障害が発生しております。ご不便をお掛けし申し訳ありません';
    } 
    ?>

  </body></div>
</html>
