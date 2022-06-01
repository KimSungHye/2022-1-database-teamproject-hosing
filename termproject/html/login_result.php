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
    <title>PHP</title>
  </head>
  <body>
    <?php
      if ( $login_state == TRUE) {
        echo '<h1>이미 로그인하셨습니다.</h1>';
      } else {
        $costomer_id = $_POST[ 'costomer_id' ];
        $costomer_name = $_POST[ 'costomer_name' ];
        if ( $costomer_id == 'OYJ9424' and $costomer_name == '오유진' ) {
          $_SESSION[ 'costomer_id' ] = $costomer_name;
          echo '<h1>Hi!</h1>';
        } else {
          echo '<p>사용자 이름 또는 비밀번호가 틀렸습니다.</p>';
        }
      }
    ?>
  </body>
</html>