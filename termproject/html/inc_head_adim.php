<?php
  session_start();
  $_SESSION['emp_no'];
  $_SESSION['emp_name'];
  // print_r(  $_SESSION['emp_no']);
  // print_r(  $_SESSION['emp_name']);
  if( isset( $_SESSION['emp_name'] ) ) {
    $login_state = TRUE;
    // print_r($login_state);
  }
  else
    $login_state = FALSE;
?>
