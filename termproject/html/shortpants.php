<?php 
  include 'connect_to_mydb.php';
?>

<!DOCTYPE html>

<html>
  <head>
    <title>CELEN</title>
    <meta http-equiv="content-type" content = "text/html" charset="utf-8">
    <link href="/termproject/css/styles.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar">
      <!--<a class="logo" href="#">
        <img src="images/logo.png" height="20px">
      </a>!-->
<!--       <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="..\php\cart.php">Cart</a></li>
        <li><a href="admin_login.html">Admin</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul> -->
    </div>
    
    <img src="\termproject\images\logo\big_logo.png" style="display: block; margin: 0 auto; width:900px; height:450px;">
    <h1>short pants</h1>
<!--     <div class="products">
      <a href="#">
        <img src="\termproject\images\product\11231941911840401.png">
        <p>LINE HALF SHORTS</p>
        <p class="price">32,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11232322382340402.png">
        <p>MARCHE EMBLEM SWEAT SHORTS</p>
        <p class="price">59,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230210200250403.png">
        <p>TWO PINTUCK DERMUDA PANTS</p>
        <p class="price">69,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01231961871700401.png">
        <p>CLASSIC FLAT SHORTS</p>
        <p class="price">119,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01230520550700402.png">
        <p>Denim Half Pants</p>
        <p class="price">99,000</p>
      </a>
      <div class="clearfix"></div>
    </div> -->
    
    <!--<div class="footer">
      <a href="#"><img src="images/facebook.png"></a>
      <a href="#"><img src="images/instagram.png"></a>
      <a href="#"><img src="images/twitter.png"></a>
    </div>!-->
  </body>
</html>

<?php

  // $con = mysqli_connect('172.20.10.9', 'cookUser', '1234');
  // // $con = mysqli_connect('localhost', 'cookUser', '1234');

  // mysqli_select_db($con, 'mydb') or die(mysqli_error($con));

  $list_result_select_shortpants = 
  mysqli_query($con,
    "SELECT * 
      FROM product_barcode PB
        INNER JOIN product P
          ON PB.productbarcode = P.product_barcode
           WHERE PB.style='반바지'") or die(mysqli_error($con));

  $i=0;
  while($i<91){
    $row = mysqli_fetch_array($list_result_select_shortpants)or die(mysqli_error($con));
    if ($row['size'] == 'S'){
    echo     '<div class="products">
        <a href="productinfo.php?product_name=', $row["product_name"],'" target="home">
          <img src="'.$row['product_image_path'].'">
          <p>'.$row['product_name'].'</p>
          <p class="price">'.$row['price'].'</p>
        </a>
      </div>';

    }

    $i=$i-1;
  }



  // $row = mysqli_fetch_array($list_result_select_shortpants)or die(mysqli_error($con));
  //   echo     '<div class="products">
  //       <a href="shortshirts1.html" target="home">
  //         <img src="'.$row['product_image_path'].'">
  //         <p>'.$row['product_name'].'</p>
  //         <p class="price">'.$row['price'].'</p>
  //       </a>
  //     </div>';
?>