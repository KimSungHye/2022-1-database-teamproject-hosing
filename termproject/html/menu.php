<?php 
  include 'inc_head.php';
?>



<!DOCTYPE html>

<html>
  <head>

    <title>CELEN</title>
    <meta http-equiv="content-type" content = "text/html" charset="utf-8">
    <link href="..\css\styles.css" rel="stylesheet">
  </head>

  <body>
     <div class="navbar">
      <!--<a class="logo" href="#">
        <img src="images/logo.png" height="20px">
      </a>!-->
      <ul>
    <?php
      if ( $login_state == TRUE) {
    ?>

      <li>
        <a><?php print_r($_SESSION['costomer_name'])?>님 안녕하세요 :) </a>
        <a href="logout.php"><input type="submit" value="로그아웃"></a>
        <a href="myorderpage.php" target="home"><input type="submit" value="order"></a>        
      </li>

    <?php
      } else {
    ?>
        <li><a href="login2.php" target="menu">Login</a></li>
    <?php
      }
    ?>
        <li><a href="my_page.html" target="home">My Page</a></li> 
        <li><a href="sign.html" target="home">Sign up</a></li>
        <li><a href="..\php\cart.php" target="home">Cart</a></li>
        <li><a href="admin_login.php" target="home">Admin</a></li>
        <li><a href="contact.html" target="home">Contact</a></li>
      </ul>
    </div>
  </body>
  </html>