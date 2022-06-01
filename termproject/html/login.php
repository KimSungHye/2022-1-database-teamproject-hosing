<?php 
  include 'inc_head.php';
?>

<?php 
  include 'connect_to_mydb.php';
?>


<?php
  // ini_set('display_errors', '0')
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
    ?>
      <h1>이미 로그인하셨습니다.</h1>
    <?php
      } else {
    ?>
      <h1>로그인</h1>
      <form action="login_result.php" method="POST">
        <input type="text" name="costomer_id" placeholder="costomer_id">
        <input type="text" name="costomer_name" placeholder="costomer_name">
        <button>Submit</button>
      </form>
    <?php
      }
    ?>
  </body>
</html>