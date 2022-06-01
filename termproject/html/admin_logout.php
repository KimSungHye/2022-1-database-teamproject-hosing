<?php 
  include 'inc_head_adim.php';
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>ADMIN LOGOUT</title>
  </head>
  <body>
    <?php
      if ( $login_state ) {
        session_destroy();
        header( 'Location: home.php' );
      } else {
        echo '<h1>로그인 상태가 아닙니다.</h1>';
      }
    ?>
  </body>
</html>