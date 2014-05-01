<?php
  $link = mysqli_connect('127.0.0.1', 'root', '');
  if (!$link) {
    die('接続失敗！<br>'.mysqli_connect_error());
  } else {
        echo '接続成功！';
        mysqli_set_charset($link, "utf8");
        echo '文字コードは'.mysqli_character_set_name($link).'です。';
        mysqli_close($link);
  }
?>
