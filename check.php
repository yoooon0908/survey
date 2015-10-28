<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/> 
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">

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
    


    if($nickname=='')
    {
      // echo '<span style="color:red; font-size:20pt;">';
      echo '<span style="color:red; font-size: 20px;">';
      echo 'ニックネームが入力されていません。<br />';
      echo '</span>';
    }else{
      echo 'ようこそ';
      echo $nickname;
      echo '様';
      echo '<br />';
    }

    if($email=='')
    {
       echo '<span style="color: red; font-size: 20px;">';
       echo'メールアドレスが入力されていません。<br />'; 
       echo '</span>';
    }
    else
    {
        echo'メールアドレス：<br />';
        echo $email;
        echo'<br />';
    }
    if($goiken=='')
    {
       echo '<span style="color: red; font-size: 20px;">';
       echo 'ご意見が入力されていません。<br />';
       echo '</span><br /><br />';
    }
    else
    {
        echo'ご意見『';
        echo $goiken;
        echo'』<br />';
    }

    if($nickname==''|| $email==''|| $goiken=='')
    {
      echo '<form method="post" action="thanks.php">';
      echo '<input type="button" onclick="history.back()" value="戻る">';
      echo '</form>';
    }

      else
    {
       echo'<form method="post" action="thanks.php">';
       echo'<input name="nickname" type="hidden" value=" '.$nickname.'">';
       echo'<input name="email" type="hidenn" value="'.$email.'">';
       echo'<input name="goiken" type="hidden" value="'.$goiken.'">';
       echo'<input type="button" onclick="history.back()"value="戻る">';
       echo'<input type="submit" value="OK">';
       echo'</form>';
    }
    ?>
    </body></div>
  </html>