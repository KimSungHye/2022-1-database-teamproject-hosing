<?php
  ini_set('display_errors', '0')
?>


<?php
  session_start();
  $_SESSION['costomer_id'];
  $_SESSION['costomer_name'];
  // print_r(  $_SESSION['costomer_id']);
  // print_r(  $_SESSION['costomer_name']);
  if( isset( $_SESSION['costomer_name'] ) ) {
    $login_state = TRUE;
    // print_r($login_state);
  }
  else
    $login_state = FALSE;
?>
