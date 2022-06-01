<?php
  ini_set('display_errors', '0')
?>

<?php 
  include 'inc_head_adim.php';
  include 'connect_to_mydb.php';
?>


<?php
  $emp_no = $_POST[ 'emp_no' ];
  $emp_name = $_POST[ 'emp_name' ];

    $sql = "SELECT emp_name FROM employee WHERE emp_no = '" . $emp_no . "';";
    $result = mysqli_query( $con, $sql );

    // print_r($result);

    while ( $row = mysqli_fetch_array( $result ) ) {
      $encrypted_password = $row[ 'emp_name' ];
    }


    // print_r($encrypted_password);
    // print_r($emp_name);



    if ( is_null( $encrypted_password ) ) {
      $wu = 0;
    } else {
      if ( strcmp($emp_name, $encrypted_password) == 0 ) {
        $login_state = TRUE;
        $_SESSION['emp_no'] = $emp_no;
        $_SESSION['emp_name'] = $emp_name;
        header( 'Location: admin2.html' );
        
        $wp = 0;
      } else {
        $wp = 1;
      }
    $wu = 0;
    
    }
?>



<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>CELIN ADMIN LOGIN PAGE</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
  </head>
  <body>
    <?php
      if ( $login_state == TRUE) {
        header('Location:admin2.html')
    ?>

        <a><?php print_r($_SESSION['emp_name'])?>님 안녕하세요 :) </a>
        <a href="logout.php"><input type="submit" value="로그아웃"></a>

    <?php
      } else {
    ?>
        <h1>로그인</h1>
    <form action="admin_login.php" method="POST">
      <p><input type="text" name="emp_no" placeholder="사원번호" required></p>
      <p><input type="text" name="emp_name" placeholder="사원이름" required></p>
      <p><input type="submit" value="로그인"></p>
      <?php
        if ( $wu == 1 ) {
          echo "<p>사원번호가 존재하지 않습니다.</p>";
        }
        else
          echo " ";
        if ( $wp == 1 ) {
          echo "<p>사원이름이 틀렸습니다.</p>";
        }
        else echo " ";
      ?>
    <?php
      }
    ?>





    
    </form>
  </body>
</html>