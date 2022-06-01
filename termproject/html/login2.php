<?php
  ini_set('display_errors', '0')
?>

<?php 
  include 'inc_head.php';
?>


<?php
  $costomer_id = $_POST[ 'costomer_id' ];
  $costomer_name = $_POST[ 'costomer_name' ];
  if ( !is_null( $costomer_id ) ) {
    $con = mysqli_connect( 'localhost', 'cookUser', '1234');
    mysqli_select_db($con, 'mydb') or die(mysqli_error($con));


    $sql = "SELECT costomer_name FROM costomer WHERE costomer_id = '" . $costomer_id . "';";
    $result = mysqli_query( $con, $sql );

    // print_r($result);

    while ( $row = mysqli_fetch_array( $result ) ) {
      $encrypted_password = $row[ 'costomer_name' ];
    }


    // print_r($encrypted_password);
    // print_r($costomer_name);



    if ( is_null( $encrypted_password ) ) {
      $wu = 1;
    } else {
      if ( strcmp($costomer_name, $encrypted_password) == 0 ) {
        $login_state = TRUE;
        $_SESSION['costomer_id'] = $costomer_id;
        $_SESSION['costomer_name'] = $costomer_name;
        // echo '<stript langauge="javascript">
        //       window.open("login-ok.php",로그인되었습니다.", "width=200, height=100");';
        // header( 'Location: menu.php' );
        // echo("<meta http-equiv='refresh' content='1'>");
        header( 'Location: menu.php' );

        // echo '<a href="index.html"></a>';
        $wp = 0;
      } else {
        $wp = 1;
      }
    $wu = 0;
    
    }
  }
?>



<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
  </head>
  <body>
    <form action="login2.php" method="POST">
      <p>
      <input type="text" name="costomer_id" placeholder="회원번호" required>
      <input type="text" name="costomer_name" placeholder="회원이름" required>
      <input type="submit" value="로그인"></p>
      <?php
        if ( $wu == 1 ) {
          echo "<p>회원번호가 존재하지 않습니다.</p>";
        }
        else
          echo " ";
        if ( $wp == 1 ) {
          echo "<p>회원이름이 틀렸습니다.</p>";
        }
        else echo " ";
      ?>
    </form>
  </body>
</html>