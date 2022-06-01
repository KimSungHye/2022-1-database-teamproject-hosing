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

    </div>
    
    <img src="\termproject\images\logo\big_logo.png" style="display: block; margin: 0 auto; width:900px; height:450px;">
    <h1>long pants</h1>
 <!--    <div class="products">
      <a href="#">
        <img src="\termproject\images\product\11230340340360301.png">
        <p>BUCKLE WIDE DENIM PANTS</p>
        <p class="price">69,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\11230790961120302.png">
        <p>Deep Washing Wide Denim</p>
        <p class="price">52,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01232182121980301.png">
        <p>Deep One Tuck Sweat Pants</p>
        <p class="price">39,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01231101331510302.png">
        <p>WIDE DENIM PANTS</p>
        <p class="price">49,000</p>
      </a>
      <a href="#">
        <img src="\termproject\images\product\01230340360490303.png">
        <p>Wide String Cargo Slacks</p>
        <p class="price">89,000</p>
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

  $con = mysqli_connect('172.20.10.9', 'cookUser', '1234');
  // $con = mysqli_connect('localhost', 'cookUser', '1234');

  mysqli_select_db($con, 'mydb') or die(mysqli_error($con));

  $list_result_select_longpants = 
  mysqli_query($con,
    "SELECT * 
      FROM product_barcode PB
        INNER JOIN product P
          ON PB.productbarcode = P.product_barcode
           WHERE PB.style='긴바지'") or die(mysqli_error($con));


  // if(!empty($_GET['id'])) {
  //   $product_result = mysql_query($con, 'SELECT * FROM product WHERE product_name = '.mysql_real_escape_string($_GET['id']));
  //   $product = mysql_fetch_array($product_result);
  // }


  $i=0;
  while($i<91){
    $row = mysqli_fetch_array($list_result_select_longpants)or die(mysqli_error($con));
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



  // $row = mysqli_fetch_array($list_result_select_longpants)or die(mysqli_error($con));
  //   echo     '<div class="products">
  //       <a href="shortshirts1.html" target="home">
  //         <img src="'.$row['product_image_path'].'">
  //         <p>'.$row['product_name'].'</p>
  //         <p class="price">'.$row['price'].'</p>
  //       </a>
  //     </div>';
?>