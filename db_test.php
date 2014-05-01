<?php
  $link = mysql_connect('127.0.0.1', 'root', '');
  if (!$link) {
    die('接続失敗！<br>'.mysql_error());
  } else {
        echo '接続成功！';
  }
?>
