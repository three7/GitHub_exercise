<?php
  $link = mysqli_connect('127.0.0.1', 'root', '');
  if (!$link) {
    die('接続失敗！<br>'.mysqli_connect_error());
  } else {
        echo '接続成功！';
  }
?>
