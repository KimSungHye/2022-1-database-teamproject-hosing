<?php 
  include 'inc_head.php';
?>

<?php 
  include 'connect_to_mydb.php';
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CELEN LOGOUT</title>
  </head>
  <body>
    <?php
      if ( $login_state ) {
        session_destroy();
        header( 'Location: menu.php' );
      } else {
        echo '<h1>로그인 상태가 아닙니다.</h1>';
      }
    ?>
  </body>
</html>